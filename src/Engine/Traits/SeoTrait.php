<?php
namespace Think201\LaravelSEO\Engine\Traits;

trait SeoTrait {

	public $meta_title, $meta_description, $og_title, $og_description, $og_image, $twitter_title, $twitter_description;

	public function setTitle($meta_title) {

		$this->meta_title = $meta_title;

		return $this;
	}

	public function setDescription($meta_description) {

		$this->meta_description = $meta_description;

		return $this;
	}

	public function setOgTitle($og_title) {

		$this->og_title = $og_title;

		return $this;
	}

	public function setOgDescription($og_description) {

		$this->og_description = $og_description;

		return $this;
	}

	public function setOgImage($og_image) {

		$this->og_image = $og_image;

		return $this;
	}

	public function setTwitterTitle($twitter_title) {

		$this->twitter_title = $twitter_title;

		return $this;
	}

	public function setTwitterDescription($twitter_description) {

		$this->twitter_description = $twitter_description;

		return $this;
	}

}