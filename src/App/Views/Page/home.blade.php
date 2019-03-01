@include('page::includes.head')
@include('page::includes.header')

<!-- Header -->
<header class="masthead d-flex">
  <div class="container text-center my-auto">
    <h1 class="mb-1">Laravel SEO</h1>
    <h3 class="mb-5">
    <em>A Laravel SEO Package by Think201</em>
    </h3>
    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#create-seo-page">Explore more</a>
  </div>
  <div class="overlay"></div>
</header>
<!-- Header -->

<!-- Seo Pages -->
@include('page::seo-pages')
<!-- Seo Pages -->

@include('page::includes.footer')
@include('page::includes.foot')