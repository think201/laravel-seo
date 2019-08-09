<?php
namespace Think201\LaravelSEO;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class SEOServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */

	/**
	 * Register the application services.
	 *
	 * @return void
	 */

	public function boot() {

		//Register migrations

		$this->loadMigrationsFrom(__DIR__ . '/Engine/Database/Migrations');

		//Register views

		$this->loadViewsFrom(__DIR__ . '/App/Views', 'SEOView');

		//Load config

		$this->setupConfig($this->app);

	}

	public function register() {

		//Register class

		$this->app->singleton(SEO::class, function () {
			return new Engine\Classes\SEO();
		});

		$this->app->alias(Engine\Classes\SEO::class, 'seo');

		// Register controllers.

		$this->app->make('Think201\LaravelSEO\App\Controllers\Page\PageViewController');

		$this->app->make('Think201\LaravelSEO\App\Controllers\Page\PageController');

	}

	protected function setupConfig(Container $app) {

		$source = realpath($raw = __DIR__ . '/../config/seo.php') ?: $raw;

		$this->publishes([$source => config_path('seo.php')]);

		$this->mergeConfigFrom($source, 'seo');
	}
}