<?php

namespace Think201\SEO\Engine\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Profile
 * @package App
 */
class SeoPage extends Model {

	use SoftDeletes;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'seo_pages';

	/**
	 * The attributes that are not mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['url', 'meta_title', 'meta_description', 'og_title', 'og_description', 'og_image', 'redirect_to', 'og_type', 'fbpixel_track'];
	protected $dates = ['deleted_at'];

	/**
	 * For soft deletes
	 *
	 * @var array
	 */

	public function getOgImageAttribute($value) {

		if (isset($this->attributes['og_image'])) {
			return getFilePublicUrl($value);
		}
	}

	public function getUrlAttribute($value) {

		if (isset($this->attributes['url']) && empty($this->attributes['url'])) {
			return '';
		}

		if ($this->attributes['url'] == 'null') {
			return '';
		}

		return $this->attributes['url'];
	}

	public function getMetaTitleAttribute($value) {

		if (isset($this->attributes['meta_title']) && empty($this->attributes['meta_title'])) {
			return '';
		}

		if ($this->attributes['meta_title'] == 'null') {
			return '';
		}

		return $this->attributes['meta_title'];
	}

	public function getMetaDescriptionAttribute($value) {

		if (isset($this->attributes['meta_description']) && empty($this->attributes['meta_description'])) {
			return '';
		}

		if ($this->attributes['meta_description'] == 'null') {
			return '';
		}

		return $this->attributes['meta_description'];
	}

	public function getOgTitleAttribute($value) {

		if (isset($this->attributes['og_title']) && empty($this->attributes['og_title'])) {
			return '';
		}

		if ($this->attributes['og_title'] == 'null') {
			return '';
		}

		return $this->attributes['og_title'];
	}

	public function getOgDescriptionAttribute($value) {

		if (isset($this->attributes['og_description']) && empty($this->attributes['og_description'])) {
			return '';
		}

		if ($this->attributes['og_description'] == 'null') {
			return '';
		}

		return $this->attributes['og_description'];
	}

	public function getRedirectToAttribute($value) {

		if (isset($this->attributes['redirect_to']) && empty($this->attributes['redirect_to'])) {
			return '';
		}

		if ($this->attributes['redirect_to'] == 'null') {
			return '';
		}

		return $this->attributes['redirect_to'];
	}

	public function getOgTypeAttribute($value) {

		if (isset($this->attributes['og_type']) && empty($this->attributes['og_type'])) {
			return '';
		}

		if ($this->attributes['og_type'] == 'null') {
			return '';
		}

		return $this->attributes['og_type'];
	}

	public function getFbpixelTrackAttribute($value) {

		if (isset($this->attributes['fbpixel_track']) && empty($this->attributes['fbpixel_track'])) {
			return '';
		}

		if ($this->attributes['fbpixel_track'] == 'null') {
			return '';
		}

		return $this->attributes['fbpixel_track'];
	}

}
