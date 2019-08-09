<?php

namespace Think201\LaravelSEO\App\Controllers\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Think201\LaravelSEO\Engine\Models\RedlofSeoMetadata;

class PageController extends Controller {

	public function postRequest(Request $request) {

		if (empty($request->_type)) {

			return redirect()->route('seo');

		}

		if ($request->_type == 'create-seo-page') {

			return $this->postCreateSeoPage($request);

		}

		if ($request->_type == 'edit-seo-page') {

			return $this->postEditSeoPage($request, $request->page_id);

		}

		if ($request->_type == 'delete-seo-page') {

			return $this->postDeleteSeoPage($request->page_id);

		}

		return redirect()->route('seo');

	}

	public function postCreateSeoPage(Request $request) {

		if (!empty($request->url)) {
			$request->merge(['url' => $request->root() . '/' . $request->url]);
		} else {
			$request->merge(['url' => $request->root()]);
		}

		RedlofSeoMetadata::create($request->all());

		return redirect()->route('laravel-seo.get', ['type' => 'seo-pages']);
	}

	public function postDeleteSeoPage($page_id) {

		RedlofSeoMetadata::where('id', $page_id)->forceDelete();

		return redirect()->route('laravel-seo.get', ['type' => 'seo-pages']);
	}

	public function postEditSeoPage(Request $request, $page_id) {

		$values = array(
			'url' => $request->url,
			'meta_title' => $request->meta_title,
			'meta_description' => $request->meta_description,
			'meta_keyword' => $request->meta_keyword,
			'og_title' => $request->og_title,
			'og_description' => $request->og_description,
			'og_type' => $request->og_type,
			'twitter_title' => $request->twitter_title,
			'twitter_description' => $request->twitter_description,
			'twitter_card' => $request->twitter_card,
		);

		RedlofSeoMetadata::where('id', $page_id)
			->update($values);

		return redirect()->route('laravel-seo.get', ['type' => 'seo-pages']);

	}

}