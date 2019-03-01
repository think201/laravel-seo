<?php

$PageViewController = 'Think201\SEO\App\Controllers\Page\PageViewController@';

$PageController = 'Think201\SEO\App\Controllers\Page\PageController@';

//View Routes

Route::get('seo', ['as' => 'seo', 'uses' => $PageViewController . 'getLandingPage']);

Route::get('seo/pages', ['as' => 'seo.pages', 'uses' => $PageViewController . 'getSeoPage']);

Route::get('seo/pages/edit/{page_id}', ['as' => 'seo.page.edit', 'uses' => $PageViewController . 'getSeoPageEdit']);

//API Routes

Route::group(array('prefix' => 'api'), function () use ($PageController) {

	Route::post('create-seo-page', $PageController . 'postCreateSeoPage')->name('create');

	Route::post('delete-seo-page/{page_id}', $PageController . 'postDeleteSeoPage')->name('delete');

	Route::post('edit-seo-page/{page_id}', $PageController . 'postEditSeoPage')->name('edit');

});