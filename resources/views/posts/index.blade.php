@extends('layouts.app')
{{-- @extends('layouts.navigation') --}}

@section('content')

<body>
    <?php foreach ($posts as $post) : ?>
    <div class="cardbox">
        <div class="cardbox-heading">
            {{-- <!-- START dropdown-->
            <div class="float-right dropdown">
                <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown"><em class="ion-android-more-horizontal"></em></button>
                <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">Hide post</a><a class="dropdown-item" href="#">Stop following</a>
                <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Report</a>
                </div>
            </div> --}}
            <!-- END dropdown-->
            <div class="media m-0">
                {{-- <div class="d-flex mr-3"><a href="#"><img class="rounded-circle thumb48" src="img/user/06.jpg" alt="User"></a></div> --}}
                <div class="media-body p-2">
                <p class="m-0 text-bold">Stephen Palmer</p><small class="text-muted"><em class="ion-earth text-muted mr-2"></em><span>2 hours</span></small>
                </div>
            </div>
            <div class="p">Ut egestas consequat faucibus. Donec id lectus tortor. Maecenas at porta purus. Etiam feugiat risus massa. Vivamus fermentum libero vel felis aliquet interdum. </div>
            </div>
            <div class="cardbox-footer">
            <button class="btn btn-flat btn-primary" type="button"><em class="ion-thumbsup icon-lg"></em></button>
            <button class="btn btn-flat btn-primary" type="button"><em class="ion-happy-outline icon-lg"></em></button>
            <button class="btn btn-flat btn-primary" type="button"><em class="ion-chatbubbles icon-lg"></em></button>
            </div>
        </div>
        {{-- <div class="justify-between h-16">
            <div class="item-center">
                <h1>
                    <a href="/posts/{{$post->title;}}">
                        {{$post->title;}}
                    </a>
                </h1>
                <div>
                </div>

                <div>
                    {{ $post->body;}}
                </div>
            </div>
        </div> --}}
    <?php endforeach; ?>
</body>
@endsection