<?php
namespace Think201\LaravelSEO\Engine\Interfaces;

interface SeoTags {

	/**
	 * Set the title.
	 *
	 * @param string $title
	 *
	 * @return SeoTags
	 */

	public function setTitle($title);

	/**
	 * Set the description.
	 *
	 * @param string $description
	 *
	 * @return SeoTags
	 */

	public function setDescription($description);

	/**
	 * Set the og title.
	 *
	 * @param string $og_title
	 *
	 * @return SeoTags
	 */

	public function setOgTitle($og_title);

	/**
	 * Set the og description.
	 *
	 * @param string $og_description
	 *
	 * @return SeoTags
	 */

	public function setOgDescription($og_description);

	/**
	 * Set the og image.
	 *
	 * @param string $og_image
	 *
	 * @return SeoTags
	 */

	public function setOgImage($og_image);

	/**
	 * Set the twitter title.
	 *
	 * @param string $twitter_title
	 *
	 * @return SeoTags
	 */

	public function setTwitterTitle($twitter_title);

	/**
	 * Set the twitter_description.
	 *
	 * @param string $twitter_description
	 *
	 * @return SeoTags
	 */

	public function setTwitterDescription($twitter_description);

}