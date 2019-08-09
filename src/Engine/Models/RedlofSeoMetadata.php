<?php

namespace Think201\LaravelSEO\Engine\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Profile
 * @package App
 */
class RedlofSeoMetadata extends Model {

	use SoftDeletes;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'redlof_seo_metadata';

	/**
	 * The attributes that are not mass assignable.
	 *
	 * @var array
	 */

	protected $guarded = ['id'];

	protected $fillable = ['url', 'meta_title', 'meta_description', 'meta_keyword', 'og_title', 'og_description', 'og_image', 'og_type', 'twitter_title', 'twitter_description', 'twitter_image', 'twitter_card', 'robot_follow', 'canonical_url', 'is_indexed', 'status'];

	protected $dates = ['deleted_at'];

	/**
	 * For soft deletes
	 *
	 * @var array
	 */

}
