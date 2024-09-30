<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category, Product, Faq};





class xCatalogController extends Controller
{


    public function showCategoryOrProduct($slug)
    {
        // ищем Категорию или Продукт по слагу
        $category = Category::findBySlug($slug);
        if ($category) {
            return $this->showCategory($category);
        }
    
        $item = Product::findBySlug($slug);
        if ($item) {
            return $this->showProduct($item);
        }

        // Бросаем ошибку 404, если ни категория, ни продукт не найдены
        abort(404);
    }

    public function morda()
    {
        // Получаем категорию 'catalog' вместе с дочерними категориями и сортируем их сразу в запросе
        $item = Category::whereSlug('catalog')
            ->with(['childrenCategories' => function ($query) {
                $query->orderBy('order', 'asc')->orderBy('name', 'asc');
            }])
            ->firstOrFail();


        // Получаем категорию 'hydozhestvennaya-kovka' вместе с дочерними категориями
        $kovka = Category::whereSlug('hydozhestvennaya-kovka')
            ->with('childrenCategories')
            ->firstOrFail();
 

        return view('xAsgrupp.PAGE.catalog.Morda', compact('item', 'kovka'));
    }

    // private function showCategory($item)
    // {
    //     $products = $item->products()
    //         ->orderBy('pin', 'desc')
    //         ->orderBy('order', 'asc')
    //         ->orderBy('created_at', 'asc')
    //         ->get();

    //     $items = $this->getFeaturedProductsFromCategory($item);

    //     return view('xAsgrupp.PAGE.ShowCategory_product', compact('item', 'items', 'products'));
    // }


    
    private function showCategory($item)
    {
        // Получаем продукты из основной категории
        $products = $item->products()
            ->with(['childrenProducts' => function ($query) {
                $query->orderBy('order', 'asc');
            }])
            ->orderBy('pin', 'desc')
            ->orderBy('order', 'asc')
            ->orderBy('created_at', 'asc')
            ->get();
    
        // Получаем продукты с featured = 1
        $items = $item->products()->where('featured', 1)->limit(20)->get();
    
        // Проверяем наличие дочерних продуктов у каждого продукта и добавляем их
        foreach ($products as $product) {
            if ($items->count() >= 20) {
                break;
            }
    
            // Добавляем дочерние продукты этого продукта
            $childProducts = $product->childrenProducts()->where('featured', 1)->limit(20 - $items->count())->get();
            $items = $items->merge($childProducts);





            // Проверка на наличие суррогатного продукта
            if ($product->surrogate) {
                $surrogate = $product->surrogate;

                // Добавляем суррогат, только если у него есть цена
                if (!is_null($surrogate->price)) {
                    $items->push($surrogate);
                }

                // Проверяем наличие дочерних продуктов у суррогата
                $surrogateChildProducts = $surrogate->childrenProducts()->where('featured', 1)->limit(20 - $items->count())->get();
                $items = $items->merge($surrogateChildProducts);
            }




        }
    

        // Если всё ещё не набрали 20 продуктов, загружаем дочерние категории
        if ($items->count() < 20) {
            $childCategories = $item->childrenCategories()->with(['products' => function ($query) {
                $query->orderBy('pin', 'desc')
                      ->orderBy('featured', 'desc')
                      ->orderBy('order', 'asc')
                      ->limit(20);
            }])->get();
    
            foreach ($childCategories as $childCategory) {
                foreach ($childCategory->products as $childProduct) {
                    if ($items->count() >= 20) {
                        break;
                    }
    
                    // Добавляем продукт, только если у него есть цена
                    if (!is_null($childProduct->price)) {
                        $items->push($childProduct);
                    }
    
                    // Проверяем наличие дочерних продуктов у этих продуктов
                    $grandChildProducts = $childProduct->childrenProducts()->where('featured', 1)->limit(20 - $items->count())->get();
                    $items = $items->merge($grandChildProducts);
    
                    // Проверяем суррогат у дочернего продукта
                    if ($childProduct->surrogate) {
                        $surrogate = $childProduct->surrogate;

                        // Добавляем суррогат, если у него есть цена
                        if (!is_null($surrogate->price)) {
                            $items->push($surrogate);
                        }

                        // Проверяем дочерние продукты суррогата
                        $surrogateChildProducts = $surrogate->childrenProducts()->where('featured', 1)->limit(20 - $items->count())->get();
                        $items = $items->merge($surrogateChildProducts);
                    }


                    
                    if ($items->count() >= 20) {
                        break;
                    }
                }
            }
        }
    
        return view('xAsgrupp.PAGE.ShowCategory_product', compact('item', 'items', 'products'));
    }
    








    private function showProduct($item)
    {
        $faqs = Faq::where('faq_id', null)->get();
        $services = $this->getServicesForProduct($item);
        $servicesJson = json_encode($services);

        $items = $this->getProductsLine($item->parent ?? $item);

        return view('xAsgrupp.PAGE.ShowProduct', compact('item', 'items', 'faqs', 'services', 'servicesJson'));
    }

    // Метод для получения выделенных продуктов (featured) из категории и ее дочерних категорий
    private function getFeaturedProductsFromCategory($item, $limit = 20)
    {
        $items = $item->products()->where('featured', 1)->limit($limit)->get();

        if ($items->count() < $limit) {
            $childCategories = $item->childrenCategories;
            foreach ($childCategories as $childCategory) {
                $childProducts = $childCategory->products()->where('featured', 1)->limit($limit - $items->count())->get();
                $items = $items->merge($childProducts);

                if ($items->count() >= $limit) {
                    break;
                }
            }
        }

        return $items;
    }

    // Метод для получения услуг для продукта
    private function getServicesForProduct($item)
    {
        return $item->category
            ? $item->category->services->map(function ($service) {
                return [
                    'id' => $service->id,
                    'name' => $service->name,
                    'name_tag' => $service->name_tag,
                    'slug' => $service->slug,
                    'order' => $service->order,
                    'text' => $service->text,
                ];
            })
            : collect([]);
    }

    // Метод для получения всех продуктов, связанных с элементом и его потомками
    private function getProductsLine($item)
    {
        $items_a = $this->getChildrenProductsRecursive($item);
        $items_b = $this->getChildrenProductsRecursive($item->surrogate);

        return $items_a->merge($items_b);
    }

    // Рекурсивный метод для получения дочерних продуктов
    private function getChildrenProductsRecursive($item)
    {
        if ($item === null || $item->childrenProducts === null) {
            return collect(); // Возвращаем пустую коллекцию, если нет дочерних продуктов
        }

        return $item->childrenProducts->map(function ($child) {
            $child->childrenProducts = $this->getChildrenProductsRecursive($child);
            return $child;
        });
    }

    // Метод для получения часто задаваемых вопросов из категории
    private function getFaqFromCategory($category)
    {
        if ($category && $category->faq) {
            return $category->faq;
        }

        if ($category && $category->parentCategory) {
            return $this->getFaqFromCategory($category->parentCategory);
        }

        return null;
    }




    
}
