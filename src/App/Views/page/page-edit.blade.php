@include('SEOView::page.includes.head')
@include('SEOView::page.includes.header')
<section class="content-section bg-light" id="create-seo-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mx-auto">
				<form action="{{route('laravel-seo.post',[$page->id])}}" method="POST">
					{{ csrf_field() }}
					<input type="hidden" name="_type" value="edit-seo-page">
					<input type="hidden" name="page_id" value="{{$page->id}}">
					<div class="form-group">
						<label>
							Page Url:
						</label>
						<div class="input-group">
							<input validator="required" valid-method="blur" value="{{$page->url}}" type="text"  name="url" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>
							Meta Title:
						</label>
						<input validator="required" valid-method="blur" value="{{$page->meta_title}}" type="text"  name="meta_title" class="form-control">
					</div>
					<div class="form-group">
						<label>
							Meta Description:
						</label>
						<textarea validator="required" valid-method="blur" type="text"  name="meta_description" class="form-control">{{$page->meta_description}}</textarea>
					</div>
					<div class="form-group">
						<label>
							Og Title:
						</label>
						<input validator="required" valid-method="blur" value="{{$page->og_title}}" type="text"  name="og_title" class="form-control">
					</div>
					<div class="form-group">
						<label>
							Og Description:
						</label>
						<textarea validator="required" valid-method="blur" type="text"  name="og_description"  class="form-control">{{$page->og_description}}</textarea>
					</div>
					<div class="form-group">
						<label>
							Og Type:
						</label>
						<input validator="required" valid-method="blur" value="{{$page->og_type}}" type="text"  name="og_type" class="form-control">
					</div>
					<div class="form-group">
						<label>
							Twitter Title:
						</label>
						<input validator="required" valid-method="blur" type="text"  value="{{$page->twitter_title}}" name="twitter_title" class="form-control">
					</div>
					<div class="form-group">
						<label>
							Twitter Description:
						</label>
						<textarea validator="required" valid-method="blur" type="text"   name="twitter_description"  class="form-control">{{$page->twitter_description}}</textarea>
					</div>
					<div class="form-group">
						<label>
							Twitter Type:
						</label>
						<input validator="required" valid-method="blur" type="text"  value="{{$page->twitter_card}}" name="twitter_card" class="form-control">
					</div>
					<button class="btn btn-dark js-scroll-trigger" type="submit">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
</section>
@include('SEOView::page.includes.foot')