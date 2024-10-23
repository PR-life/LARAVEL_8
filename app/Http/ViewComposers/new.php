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
                'url' => "/catalog/{$category->slug}",
                'slug' => $category->slug
            ];
        }
    }

    private function handleProduct(array &$breadcrumbs, $product)
    {
        if ($product->category) {
            $this->addParentCategories($breadcrumbs, $product->category->parentCategory);
            $breadcrumbs[] = [
                'name' => $product->category->bread_name ?? $product->category->name,
                'url' => "/catalog/{$product->category->slug}",
                'slug' => $product->category->slug
            ];
        }

        if ($product->parent) {
            $this->addParentCategories($breadcrumbs, $product->parent->category->parentCategory);
            $breadcrumbs[] = [
                'name' => $product->parent->category->bread_name ?? $product->parent->category->name,
                'url' => "/catalog/{$product->parent->category->slug}",
                'slug' => $product->parent->category->slug
            ];
            $breadcrumbs[] = [
                'name' => $product->parent->name,
                'url' => route('asgrupp.ctlg.show', $product->parent),
                'slug' => $product->parent->slug
            ];
        }
    }

    private function addParentCategories(array &$breadcrumbs, $category)
    {
        if ($category->parentCategory) {
            $this->addParentCategories($breadcrumbs, $category->parentCategory);
        }

        $breadcrumbs[] = [
            'name' => $category->name,
            'url' => "/catalog/{$category->slug}",
            'slug' => $category->slug
        ];
    }
}
