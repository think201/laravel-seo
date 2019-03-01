@include('page::includes.head')
@include('page::includes.header')
<section class="content-section bg-light" id="create-seo-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mx-auto">
				<div class="text-center">
					<h5>Laravel SEO has been integrated in the following pages</h5>
				</div>
				<table class="table table-hover table-bordered mt-5">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Page URL</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($pages as $key => $page)
						<tr>
							<th scope="row">{{$key + 1}}</th>
							<td>{{$page->url}}</td>
							<td>
								<form action="{{route('delete',[$page->id])}}" method="POST">
									<a href="{{route('seo.page.edit',[$page->id])}}" class="btn btn-light btn-sm">
										<i class="material-icons" style="font-size: 16px;">
										edit
										</i>
									</a>
									<button type="submit" class="btn btn-light btn-sm">
									<i class="material-icons" style="font-size: 16px;">
									delete
									</i>
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
@include('page::includes.footer')
@include('page::includes.foot')