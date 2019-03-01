<?php
namespace Think201\SEO;

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

		//Register routes

		$this->loadRoutesFrom(__DIR__ . '/App/Routes/routes.php');

		//Register views

		$this->loadViewsFrom(__DIR__ . '/App/Views/Page', 'page');

	}

	public function register() {

		// Register controllers.

		$this->app->make('Think201\SEO\App\Controllers\Page\PageViewController');
		$this->app->make('Think201\SEO\App\Controllers\Page\PageController');

	}

}