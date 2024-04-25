<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//
use Illuminate\Support\Facades\Blade;
//
use Illuminate\Routing\Router;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;

// use Illuminate\Support\Facades\App;
// use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot(Router $router)
    // public function boot()
    {
        // Blade::if('admin', function() {
        //     return auth()->check() && auth()->user()->admin;
        // });
        //
        // URL::forceScheme('https');
        // if (App::environment(['staging', 'production'])) {
        //     URL::forceScheme('https');
        // }


        Blade::directive('svg', function($expression) {
            $name = str_replace("'", '', $expression);
            return '<svg><use xlink:href="#svg-'. $name .'"></use></svg>';
        });
        Blade::directive('price', function($expression) {
            return "<?php echo number_format($expression, 2, '.', ' '); ?>";
        });

        //
        Blade::directive('tooltip', function($expression) {
            $text = str_replace("'", '', $expression);
            return '<div class="Tooltip" data-tooltip="'. $text .'">
                <svg viewBox="0 0 19 19"><path d="M9.5 2a7.5 7.5 0 1 1 0 15 7.5 7.5 0 0 1 0-15m0-1a8.5 8.5 0 1 0 0 17 8.5 8.5 0 0 0 0-17z M9 11.7v-.3c0-.5 0-.9.2-1.2a2.7 2.7 0 0 1 .4-.7l.9-.8c.3-.4.6-.6.7-.9l.2-.6c0-.5-.2-.9-.5-1.2a1.8 1.8 0 0 0-1.3-.5c-.5 0-.9.1-1.2.4-.3.4-.6.8-.7 1.5l-1.1-.2a3 3 0 0 1 1-2 3 3 0 0 1 2-.7c.9 0 1.6.3 2.2.8s.8 1 .8 1.8c0 .4-.1.8-.3 1.1l-1.1 1.2-.7.8c-.2.1-.2.3-.3.5v1H9zM9 14v-1.3h1.2V14H9z"></path></svg>
            </div>';
        });

        //
        Carbon::setLocale('ru_Ru');
        //
        Paginator::defaultView('vendor.pagination.Kyutinen');
        // Paginator::defaultSimpleView('vendor.pagination.view-name');
        //
		$this->removeIndexPhpFromUrl();
    }

    ////
    protected function removeIndexPhpFromUrl()
    {
        if (Str::contains(request()->getRequestUri(), '/index.php/')) {
            $url = str_replace('index.php/', '', request()->getRequestUri());
            if (strlen($url) > 0) {
                header("Location: $url", true, 301);
                exit;
            }
        }
    }
}
