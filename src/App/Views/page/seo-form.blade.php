<section class="content-section my-5" id="create-seo-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-12">
        <h2>Start by adding SEO to your pages.</h2>
        <p class="mb-4">A simple tool from Think201. Everything you need to get high search engine rankings.</p>
        <form action="{{route('laravel-seo.post')}}" method="POST">
          {{ csrf_field() }}
          <input type="hidden" name="_type" value="create-seo-page">
          <div class="form-group">
            <label>
              Page Url (For homepage leave it blank)
            </label>
            <div class="input-group">
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">{{Request::root()}}</span>
              </div>
              <input validator="required" valid-method="blur" type="text"  name="url" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label>
              Meta Title
            </label>
            <input validator="required" valid-method="blur" type="text"  name="meta_title" class="form-control">
          </div>
          <div class="form-group">
            <label>
              Meta Description
            </label>
            <textarea rows="5" cols="50" validator="required" valid-method="blur" type="text"  name="meta_description" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>
              Og Title
            </label>
            <input validator="required" valid-method="blur" type="text"  name="og_title" class="form-control">
          </div>
          <div class="form-group">
            <label>
              Og Description
            </label>
            <textarea rows="5" cols="50" validator="required" valid-method="blur" type="text"  name="og_description"  class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>
              Og Type
            </label>
            <input validator="required" valid-method="blur" type="text"  name="og_type" class="form-control">
          </div>
          <div class="form-group">
            <label>
              Twitter Title
            </label>
            <input validator="required" valid-method="blur" type="text"  name="twitter_title" class="form-control">
          </div>
          <div class="form-group">
            <label>
              Twitter Description
            </label>
            <textarea rows="5" cols="50" validator="required" valid-method="blur" type="text"  name="twitter_description"  class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>
              Twitter Type
            </label>
            <input validator="required" valid-method="blur" type="text"  name="twitter_card" class="form-control">
          </div>
          <button class="btn btn-theme" type="submit">Create Page</button>
        </form>
      </div>
    </div>
  </div>
</section>