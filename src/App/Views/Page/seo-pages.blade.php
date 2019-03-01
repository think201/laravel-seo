<section class="content-section bg-light" id="create-seo-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="text-center">
          <h2>Start by adding SEO to your pages.</h2>
          <p class="lead mb-5">A simple tool from Think201</p>
        </div>
        <form action="{{route('create')}}" method="POST">
          <div class="form-group">
            <label>
              Page Url:
            </label>
            <div class="input-group">
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">{{env('APP_URL')}}</span>
              </div>
              <input validator="required" valid-method="blur" type="text"  name="url" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label>
              Meta Title:
            </label>
            <input validator="required" valid-method="blur" type="text"  name="meta_title" class="form-control">
          </div>
          <div class="form-group">
            <label>
              Meta Description:
            </label>
            <textarea validator="required" valid-method="blur" type="text"  name="meta_description" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>
              Og Title:
            </label>
            <input validator="required" valid-method="blur" type="text"  name="og_title" class="form-control">
          </div>
          <div class="form-group">
            <label>
              Og Description:
            </label>
            <textarea validator="required" valid-method="blur" type="text"  name="og_description"  class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>
              FB Pixel Code:
            </label>
            <input validator="required" valid-method="blur" type="text" name="fbpixel_track" class="form-control">
          </div>
          <div class="form-group">
            <label>
              Og Type:
            </label>
            <input validator="required" valid-method="blur" type="text"  name="og_type" class="form-control">
          </div>
          <div class="form-group">
            <label>
              Redirect To:
            </label>
            <input validator="required" valid-method="blur" type="text"  name="redirect_to"  class="form-control">
          </div>
          <button class="btn btn-dark js-scroll-trigger" type="submit">Create Page</button>
        </form>
      </div>
    </div>
  </div>
</section>