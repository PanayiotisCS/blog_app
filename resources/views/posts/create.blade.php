@extends('layouts.app')
@section('content')
<section class="section-container">
  <div class="container-overlap bg-gradient-primary"></div>
  <div class="container-fluid">
    <div class="cardbox">
      <div class="card-title">
        <h2 class="text-dark">Create new post</h2>
      </div>
      <div class="cardbox-body">
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <fieldset>
            <div class="form-group row">
              <label class="col-lg-2 col-form-label">Title</label>
              <div class="col-lg-10">
                <input class="form-control" type="text" name="title" required><span class="form-text text-muted">Title of each post are unique.</span>
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
                  <input class="custom-file-input" id="customFile" type="file">
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