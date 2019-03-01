<?php

namespace Think201\SEO\App\Controllers\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Think201\SEO\Engine\Models\SeoPage;

class PageController extends Controller {

	public function postCreateSeoPage(Request $request) {

		SeoPage::create($request->all());

		return redirect()->route('seo.pages');

	}

	public function postDeleteSeoPage($page_id) {

		SeoPage::where('id', $page_id)->delete();

		return redirect()->route('seo.pages');

	}

	public function postEditSeoPage(Request $request, $page_id) {

		SeoPage::where('id', $page_id)
			->update($request->all());

		return redirect()->route('seo.pages');

	}

}