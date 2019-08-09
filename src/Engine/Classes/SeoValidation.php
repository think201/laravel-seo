<?php
namespace Think201\LaravelSEO\Engine\Classes;

class SeoValidation {

	public static function validateConfiguration() {

		if (self::checkTableExistence()) {
			return true;
		}

		self::showAlert('Please run the SEO migrations. Run "php artisan migrate" from your command line.');
	}

	public static function showAlert($message) {

		echo "<script>alert('" . $message . "')</script>";

		return true;
	}

	public static function checkTableExistence() {

		if (\Schema::hasTable('redlof_seo_metadata')) {
			return true;
		}

		return false;
	}
}