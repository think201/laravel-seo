<?php
namespace Think201\LaravelSEO\Engine\Classes;
use Think201\LaravelSEO\Engine\Models\RedlofSeoMetadata;

class SeoHandler {

	public static function getMetaTags() {

		$metadata = RedlofSeoMetadata::where('url', url()->current())
			->first();

		if (empty($metadata)) {

			return self::getDefault();

		}

		return self::processMetaTags($metadata);

	}

	public static function getDefault() {

		return \Config::get('seo');

	}

	public static function processMetaTags($metadata) {

		return $metadata->toArray();

	}

	public static function checkForRedirection() {

		//TODO - check for page redirection.

		return true;

	}

	public static function getDevTags($data, $meta_tags) {

		if (empty($meta_tags['meta_title'])) {
			if (!empty($data->meta_title)) {
				$meta_tags['meta_title'] = $data->meta_title;
			}
		}

		if (empty($meta_tags['meta_description'])) {
			if (!empty($data->meta_description)) {
				$meta_tags['meta_description'] = $data->meta_description;
			}
		}

		if (empty($meta_tags['meta_image'])) {
			if (!empty($data->meta_image)) {
				$meta_tags['meta_image'] = $data->meta_image;
			}
		}

		if (empty($meta_tags['og_title'])) {
			if (!empty($data->og_title)) {
				$meta_tags['og_title'] = $data->og_title;
			}
		}

		if (empty($meta_tags['og_description'])) {
			if (!empty($data->og_description)) {
				$meta_tags['og_description'] = $data->og_description;
			}
		}

		if (empty($meta_tags['twitter_title'])) {
			if (!empty($data->twitter_title)) {
				$meta_tags['twitter_title'] = $data->twitter_title;
			}
		}

		if (empty($meta_tags['twitter_description'])) {
			if (!empty($data->twitter_description)) {
				$meta_tags['twitter_description'] = $data->twitter_description;
			}
		}

		return $meta_tags;

	}
}