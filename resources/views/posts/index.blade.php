@extends('layouts.app')
@section('content')
{{-- <section class="layout-container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> --}}
<section class="layout-container-fluid">
    <div class="container-overlap bg-gradient-primary"></div>
    <div class="container-fluid">
        <div class="row">
            {{-- <div class="col-1">
            </div> --}}
            <div class="col-12">
                <div class="cardbox">
                    <div class="cardbox-body">
                        <form class="mt-3" action="">
                            <div class="form-group">
                                <label>What's on your mind?</label>
                                <div>
                                    <a href={{ route('posts.create')}} class="btn btn-primary" type="button"><em class="ion-plus"></em> POST</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php foreach ($posts as $post) : ?>
                    <div class="cardbox">
                        <div class="card-body">
                            <!-- START dropdown-->
                            <div class="float-right dropdown">
                                <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown"><em class="ion-android-more-horizontal"></em></button>
                                <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">Hide post</a><a class="dropdown-item" href="#">Stop following</a>
                                <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Report</a>
                                </div>
                            </div>
                            <!-- END dropdown-->
                            <div class="media m-0">
                                {{-- <div class="d-flex mr-3"><a href="#"><img class="rounded-circle thumb48" src="img/user/06.jpg" alt="User"></a></div> --}}
                                <div class="media-body p-2">
                                <p class="m-0 text-bold">{{ $post->user->name }}</p><small class="text-muted"><em class="ion-earth text-muted mr-2"></em><span>{{ $post->created_at->diffInDays(); }}</span></small>
                                </div>
                            </div>
                            <div class="card-text"><a href="{{ route('posts.show',['post' => $post->id]); }}"><b>{{ $post->title }}</b></a></div>
                            <div class="card-text">{{ $post->body }}</div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-flat btn-primary" type="button"><em class="ion-thumbsup icon-lg"></em></button>
                            <button class="btn btn-flat btn-primary comment" data-id="{{ $post->id }}" type="button"><em class="ion-chatbubbles icon-lg"></em></button>
                            <p class="text-bold">{{ 0 }} Likes</p>
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
</script> --}}

{{-- <script>
    const app = new Vue({
        el: ".comments"
        data: {
            comments:[],
        },
        mounted(){
            axios.get("{{route('comment.add')}}")
                .then(response => {
                    this.comments = response.data;
                })
                .cath(response => {
                    console.log(response);
            })
        }
    });
</script> --}}
@endsection


