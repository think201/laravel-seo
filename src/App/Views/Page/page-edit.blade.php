@include('page::includes.head')
@include('page::includes.header')
<section class="content-section bg-light" id="create-seo-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mx-auto">
				<form action="{{route('edit',[$page->id])}}" method="POST">
					<div class="form-group">
						<label>
							Page Url:
						</label>
						<div class="input-group">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">{{env('APP_URL')}}</span>
							</div>
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
							FB Pixel Code:
						</label>
						<input validator="required" valid-method="blur" value="{{$page->fbpixel_track}}" type="text" name="fbpixel_track" class="form-control">
					</div>
					<div class="form-group">
						<label>
							Og Type:
						</label>
						<input validator="required" valid-method="blur" value="{{$page->og_type}}" type="text"  name="og_type" class="form-control">
					</div>
					<div class="form-group">
						<label>
							Redirect To:
						</label>
						<input validator="required" valid-method="blur" value="{{$page->redirect_to}}" type="text"  name="redirect_to"  class="form-control">
					</div>
					<button class="btn btn-dark js-scroll-trigger" type="submit">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
</section>
@include('page::includes.footer')
@include('page::includes.foot')