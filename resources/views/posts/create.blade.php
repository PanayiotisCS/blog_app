@extends('layouts.app')
@section('content')
<section class="section-container">
  <div class="container-overlap bg-gradient-primary"></div>
  <div class="container-fluid">
    <div class="cardbox">
      <div class="cardbox-heading">
        <div class="cardbox-title">Ready to post something new ?</div>
      </div>
      <div class="cardbox-body">
        <div class="form-group">
          <a href={{ route('posts.index')}} class="btn btn-primary" type="button"><em class="ion-arrow-left-a"></em> Back</a>
        </div>
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <fieldset>
            <div class="form-group row">
              <label class="col-lg-2 col-form-label">Title</label>
              <div class="col-lg-10">
                <input class="form-control" type="text" name="title" required>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group row">
              <label class="col-lg-2 col-form-label">details</label>
              <div class="col-lg-10">
                <textarea class="form-control" rows="3" name="body" required></textarea>
              </div>
            </div>
          </fieldset>
            <div class="form-group row">
              <label class="col-lg-2 col-form-label">Upload photo</label>
              <div class="col-lg-10">
                <p class="mt-3">File</p>
                <div class="custom-file">
                  <input class="custom-file-input" id="customFile" type="file" name="image" accept="image/*">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
          </fieldset>
          <div class="form-group row">
            <div class="col-auto">
              <button class="btn btn-lg btn-primary" type="submit">POST</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection