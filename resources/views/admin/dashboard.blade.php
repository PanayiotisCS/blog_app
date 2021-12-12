@extends('layouts.app')
@section('content')
  <section class="section-container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-9">
          <div class="welcome">
            <h1>Hello, {{Auth::user()->name}}</h1>
            <p>Welcome back to your blog site.</p>
          </div>
          <div class="my-4">
            <button class="btn btn-oval btn-primary btn-gradient mr-2">14 Messages</button>
            <button class="btn btn-secondary btn-oval" type="button"><em class="ion-forward text-success mr-2 icon-lg"></em><span>View requests</span></button>
          </div>
          <div class="h-scroll">
            <div class="row">
              <div class="col-8 col-md-4">
                <div class="cardbox">
                  <div class="cardbox-body">
                    <div class="clearfix mb-2">
                      <div class="float-right"><small><em class="ml-2 ion-arrow-up-b"></em></small></div>
                      <div class="float-left"><small>Total users</small></div>
                    </div>
                    <div class="h3" data-counter="275">{{ $totalUsers }}</div>
                    <div class="text-center mt-3">
                      <div class="sparkline" id="sparkline1" data-bar-color="#42a5f5"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-8 col-md-4">
                <div class="cardbox">
                  <div class="cardbox-body">
                    <div class="clearfix mb-2">
                      <div class="float-right"><small><em class="ml-2 ion-arrow-down-b"></em></small></div>
                      <div class="float-left"><small>Total Posts</small></div>
                    </div>
                    <div class="h3" data-counter="8345">{{ $totalPosts }}</div>
                    <div class="text-center mt-3">
                      <div class="sparkline" id="sparkline2" data-bar-color="#42a5f5"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-8 col-md-4">
                <div class="cardbox">
                  <div class="cardbox-body">
                    <div class="clearfix mb-2">
                      <div class="float-right"><small><em class="ml-2 ion-arrow-up-b"></em></small></div>
                      <div class="float-left"><small>Total Comments</small></div>
                    </div>
                    <div class="h3" data-counter="559">{{ $totalComments }}</div>
                    <div class="text-center mt-3">
                      <div class="sparkline" id="sparkline3" data-bar-color="#42a5f5"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-title">
            <h2 class="text-dark">Posts analytics</h2>
          </div>
          <div class="cardbox">
            <!-- START table-responsive-->
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Post Title</th>
                    <th class="text-center">Author</th>
                    <th class="text-center">No. Likes</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                  <tr>
                    <td>
                      <p class="m-0">{{$post->title}}</p>
                    </td>
                    <td class="va-middle text-center">
                      <img class="wd-xxs2 rounded-circle shadow-z2" src="{{asset('img/user/02.jpg')}}" alt="Team lead" data-toggle="tooltip" data-title="Marion Woods"></td>
                    <td class="va-middle text-center">25/50</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- END table-responsive-->
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
