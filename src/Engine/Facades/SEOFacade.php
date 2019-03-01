<?php
namespace Think201\SEO\Engine\Facades;

use Illuminate\Support\Facades\Facade;

class SEOFacade extends Facade {

	protected static function getFacadeAccessor() {

		return 'SEO';

	}

}