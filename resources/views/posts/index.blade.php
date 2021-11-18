@extends('layouts.app')
{{-- @extends('layouts.navigation') --}}

@section('content')

<body>
    <section class="layout-container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="container-overlap bg-gradient-primary"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-9">
                    <?php foreach ($posts as $post) : ?>
                        <div class="cardbox">
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
                                    <p class="m-0 text-bold">{{ $post->user->name }}</p><small class="text-muted"><em class="ion-earth text-muted mr-2"></em><span>{{ $post->created_at->diffInDays(); }}</span></small>
                                    </div>
                                </div>
                                <div class="card-text"><b>{{ $post->title }}</b></div>
                                <div class="card-text">{{ $post->body }}</div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-flat btn-primary" type="button"><em class="ion-thumbsup icon-lg"></em></button>
                                <button class="btn btn-flat btn-primary" type="button"><em class="ion-happy-outline icon-lg"></em></button>
                                <button class="btn btn-flat btn-primary comment" data-id="{{ $post->id }}" type="button"><em class="ion-chatbubbles icon-lg"></em></button>
                            </div>
                            <?php foreach ($post->comments as $comment) : ?>
                                <div class="d-flex media m-2 mr-auto">
                                    <div class="card-text py-2 px-2"> <span><b>{{ $comment->user->name }}</b></span>
                                        <div class="card-text">
                                        {{ $comment->body }} 
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="bg-light p-2 comment-section-{{ $post->id }}" data-text="{{ $post->id }}" hidden="true">
                                <div class="d-felx flex-row align-items-start"><textarea class="form-control ml-1 shadow-none textarea"></textarea></div>
                                <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none">Post comment</button></div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        var flag = false;
        $(".comment").click(function(){
            var id = $(this).data("id");
            if($('div.comment-section-'+id).is('[hidden]')){
                $('div.comment-section-'+id).removeAttr('hidden');
            }else{
                $('div.comment-section-'+id).attr('hidden','');
            }
        })
    });
</script>
@endsection


