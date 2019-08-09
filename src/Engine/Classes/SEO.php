<?php
namespace Think201\LaravelSEO\Engine\Classes;
use Think201\LaravelSEO\Engine\Interfaces\SeoTags;
use Think201\LaravelSEO\Engine\Traits\SeoTrait;

class SEO implements SeoTags {

	use SeoTrait;

	public function display() {

		//Validate configuration

		SeoValidation::validateConfiguration();

		// Check if Redirect is there, we do that for you
		SeoHandler::checkForRedirection();

		// Get the meta tags
		$meta_tags = SeoHandler::getMetaTags();

		// Check for meta tags added by developer
		$meta_tags = SeoHandler::getDevTags($this, $meta_tags);

		self::print($meta_tags);

	}

	public static function print($meta_tags) {

		$view = \View::make('SEOView::meta-includes.meta-data', ['data' => $meta_tags]);

		$contents = $view->render();

		echo $contents;

		return;

	}

}