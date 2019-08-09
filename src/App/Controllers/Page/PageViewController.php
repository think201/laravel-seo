<?php

namespace Think201\LaravelSEO\App\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Think201\LaravelSEO\Engine\Models\RedlofSeoMetadata;

class PageViewController extends Controller {

	public function getRequest(Request $request) {

		if (empty($request->type) || $request->type == 'home') {

			return $this->getLandingPage();

		}

		if ($request->type == 'seo-pages') {

			return $this->getSeoPage();

		}

		if ($request->type == 'edit-page') {

			return $this->getSeoPageEdit($request->id);

		}

		return $this->getErrorPage();

	}

	public function getLandingPage() {

		return view('SEOView::page.home');
	}

	public function getSeoPage() {

		$data = [];

		$data['pages'] = RedlofSeoMetadata::get();

		return view('SEOView::page.page-lists', $data);
	}

	public function getSeoPageEdit($page_id) {

		$data = [];

		$data['page'] = RedlofSeoMetadata::find($page_id);

		return view('SEOView::page.page-edit', $data);

	}

	public function getErrorPage() {

		return view('SEOView::page.error');
	}

}