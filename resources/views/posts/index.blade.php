@extends('layouts.app')
{{-- @extends('layouts.navigation') --}}

@section('content')

<body>
    
    <section class="layout-container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="container-overlap bg-gradient-primary"></div>
        <div class="container-sm">
            <div class="row">
                <div class="col">
                    <?php foreach ($posts as $post) : ?>
                        <div class="card">
                            <div class="card-body">
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
                                    <p class="m-0 text-bold">{{ $post->user->name }}</p><small class="text-muted"><em class="ion-earth text-muted mr-2"></em><span>2 hours</span></small>
                                    </div>
                                </div>
                                <div class="card-textr">{{ $post->body }}</div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-flat btn-primary" type="button"><em class="ion-thumbsup icon-lg"></em></button>
                                <button class="btn btn-flat btn-primary" type="button"><em class="ion-happy-outline icon-lg"></em></button>
                                <button class="btn btn-flat btn-primary" type="button"><em class="ion-chatbubbles icon-lg"></em></button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection