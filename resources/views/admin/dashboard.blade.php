@extends('layouts.app')
@section('content')
  <section class="section-container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12">
          <div class="welcome">
            <h1>Hello, {{Auth::user()->name}}</h1>
            <p>Welcome back to your blog site.</p>
          </div>
          <div class="my-4">
          </div>
          <div class="h-scroll">
            <div class="row">
              <div class="col-8 col-md-4">
                <div class="cardbox">
                  <div class="cardbox-body">
                    <div class="clearfix mb-2">
                      <div class="float-left"><small>Total users</small></div>
                    </div>
                    <div class="h3" data-counter="275">{{ $totalUsers }}</div>
                  </div>
                </div>
              </div>
              <div class="col-8 col-md-4">
                <div class="cardbox">
                  <div class="cardbox-body">
                    <div class="clearfix mb-2">
                      <div class="float-left"><small>Total Posts</small></div>
                    </div>
                    <div class="h3" data-counter="8345">{{ $totalPosts }}</div>
                  </div>
                </div>
              </div>
              <div class="col-8 col-md-4">
                <div class="cardbox">
                  <div class="cardbox-body">
                    <div class="clearfix mb-2">
                      <div class="float-left"><small>Total Comments</small></div>
                    </div>
                    <div class="h3" data-counter="559">{{ $totalComments }}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cardbox">
            <div class="cardbox-heading">
                <div class="cardbox-title">Post Analytics</div>
              </div>
            <!-- START table-responsive-->
            <div class="cardbox-body clearfix">
              <div class="table-responsive">
                <table class="table table-stripped my-4" id="datatable1">
                  <thead>
                    <tr>
                      <th>Post Title</th>
                      <th class="text-center">Author</th>
                      <th class="text-center sort-numeric">No. Likes</th>
                      <th class="sort-numeric">No. Comments</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                    <tr>
                      <td>
                        <a href="{{ route('posts.show',['id' => $post->id]); }}" class="m-0">{{$post->title}}</p>
                      </td>
                      <td class="va-middle text-center">
                        {{-- <img class="wd-xxs2 rounded-circle shadow-z2" src="{{asset('img/user/02.jpg')}}" alt="Team lead"><span>{{$post->user->name}}</span></td> --}}
                        {{$post->user->name}}
                      <td class="va-middle text-center">{{ $post->likes->count()}}</td>
                      <td class="va-middle text-center">{{ $post->comments->count()}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END table-responsive-->
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
