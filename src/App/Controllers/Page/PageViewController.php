<?php

namespace Think201\SEO\App\Controllers\Page;

use App\Http\Controllers\Controller;
use Think201\SEO\Engine\Models\SeoPage;

class PageViewController extends Controller {

	public function getLandingPage() {

		return view('page::home');
	}

	public function getSeoPage() {

		$data = [];

		$data['pages'] = SeoPage::get();

		return view('page::page-lists', $data);
	}

	public function getSeoPageEdit($page_id) {

		$data = [];

		$data['page'] = SeoPage::find($page_id);

		return view('page::page-edit', $data);

	}

}