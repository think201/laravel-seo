@include('SEOView::page.includes.head')
@include('SEOView::page.includes.layout')
@include('SEOView::page.includes.header')
<section class="content-section my-5" id="create-seo-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-12">
				<h3>Laravel SEO has been integrated in the following pages:</h3>
				<table class="table table-hover table-bordered mt-5">
					<thead>
						<tr>
							<th>#</th>
							<th>Page URL</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($pages as $key => $page)
						<tr>
							<td>{{$key + 1}}</td>
							<td>{{$page->url}}</td>
							<td>
								<form action="{{route('laravel-seo.post')}}" method="POST">
									<a href="{{route('laravel-seo.get',['type'=>'edit-page','id'=>$page->id])}}" class="btn btn-edit btn-sm">
										<i class="fas fa-edit"></i>
										edit
									</a>
									{{ csrf_field() }}
									<input type="hidden" name="_type" value="delete-seo-page">
									<input type="hidden" name="page_id" value="{{$page->id}}">
									<button type="submit" class="btn btn-delete btn-sm">
									<i class="fas fa-trash-alt"></i>
									delete
									</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
@include('SEOView::page.includes.foot')