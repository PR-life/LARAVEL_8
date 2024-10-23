<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class BreadcrumbComposer
{
    public function compose(View $view)
    {
        $breadcrumbs = [];

        if (isset($view->item)) {
            $item = $view->item;

            if ($item instanceof \App\Models\Category) {
                $this->handleCategory($breadcrumbs, $item);
            } elseif ($item instanceof \App\Models\Product) {
                $this->handleProduct($breadcrumbs, $item);
            } elseif ($item instanceof \App\Models\_child\Service) {
                $this->handleService($breadcrumbs, $item);
            } elseif ($item instanceof \App\Models\Paper) {
                $this->handlePaper($breadcrumbs, $item);
            }
            
        }

        $view->with('breadcrumbs', $breadcrumbs);
    }

    private function handleCategory(array &$breadcrumbs, $category)
    {
        if ($category->slug == 'catalog') {
            $breadcrumbs[] = ['name' => 'Каталог', 'url' => '/catalog', 'slug' => 'catalog'];
        } elseif ($category->parentCategory) {
            $this->addParentCategories($breadcrumbs, $category->parentCategory);
            $breadcrumbs[] = [
                'name' => $category->name,
                'url' => $category->canonical ?? "/catalog/{$category->slug}",
                'slug' => $category->slug
            ];
        }
    }

    private function handleProduct(array &$breadcrumbs, $product)
    {
        if ($product->category) {
            if ($product->category->parentCategory) {
                $this->addParentCategories($breadcrumbs, $product->category->parentCategory);
            }
            $breadcrumbs[] = [
                'name' => $product->category->bread_name ?? $product->category->name,
                'url' => $product->category->canonical ?? "/catalog/{$product->category->slug}",
                'slug' => $product->category->slug
            ];
        }

        if ($product->parent) {
            if ($product->parent->category && $product->parent->category->parentCategory) {
                $this->addParentCategories($breadcrumbs, $product->parent->category->parentCategory);
            }
            if ($product->parent->category) {
                $breadcrumbs[] = [
                    'name' => $product->parent->category->bread_name ?? $product->parent->category->name,
                    'url' => $product->parent->category->canonical ?? "/catalog/{$product->parent->category->slug}",
                    'slug' => $product->parent->category->slug
                ];
            }
            $breadcrumbs[] = [
                'name' => $product->parent->name,
                'url' => route('asgrupp.ctlg.show', $product->parent),
                'slug' => $product->parent->slug
            ];
        }
    }

    private function handlePaper(array &$breadcrumbs, $paper)
    {

        if ($paper->category) {
            if ($paper->category->parentCategory) {
                $this->addParentCategories($breadcrumbs, $paper->category->parentCategory);
            }
            $breadcrumbs[] = [
                'name' => $paper->category->bread_name ?? $paper->category->name,
                'url' => $paper->category->canonical ?? "/blog/{$paper->category->slug}",
                'slug' => $paper->category->slug
            ];
        }

        $breadcrumbs[] = [
            'name' => $paper->name,
            'url' =>  $paper->canonical ?? route('asgrupp.blog.show', $paper->slug),
            'slug' => $paper->slug
        ];
    }

    private function handleService(array &$breadcrumbs, $service)
    {
        // Логика для формирования хлебных крошек для услуг
        $breadcrumbs[] = ['name' => 'Услуги', 'url' => '/uslugi', 'slug' => 'uslugi'];
        $breadcrumbs[] = [
            'name' => $service->title,
            'url' => route('asgrupp.uslugi.show', $service->slug),
            'slug' => $service->slug
        ];
    }

    private function addParentCategories(array &$breadcrumbs, $category)
    {
        // Проверяем, что категория существует перед обращением к ее свойствам
        if (!$category) {
            return;
        }

        if ($category->parentCategory) {
            $this->addParentCategories($breadcrumbs, $category->parentCategory);
        }

        $breadcrumbs[] = [
            'name' => $category->name,
            'url' => $category->canonical ?? "/catalog/{$category->slug}",
            'slug' => $category->slug
        ];
    }
}
