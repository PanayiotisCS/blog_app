@extends('layouts.app')
@section('content')
<section class="layout-container-fluid">
    <div class="container-overlap bg-gradient-primary"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6">
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
                    <div class="cardbox reader-block">
                        <div class="cardbox-heading">
                            <!-- START dropdown-->
                            @if ($post->user->id == auth()->user()->id)
                            <div class="float-right dropdown">
                                <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown"><em class="ion-android-more-horizontal"></em></button>
                                <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" href="{{ route('posts.edit',['post' => $post]) }}">Edit Post</a>
                                    <input type="hidden" name="post" value="{{ $post->id }}">
                                    <button class="delete-post dropdown-item">Delete Post</button>
                                </div>
                            </div>
                            @endif
                            <!-- END dropdown-->
                            <div class="media m-0">
                                {{-- <div class="d-flex mr-3"><a href="#"><img class="rounded-circle thumb48" src="img/user/06.jpg" alt="User"></a></div> --}}
                                <div class="media-body p-2">
                                <p class="m-0 text-bold">{{ $post->user->name }}</p><small class="text-muted"><em class="ion-earth text-muted mr-2"></em><span>{{ $post->created_at->diffForHumans() }}</span></small>
                                </div>
                            </div>
                            <div class="cardbox-body">
                                <div class="card-text"><a href="{{ route('posts.show',['id' => $post->id]); }}"><b>{{ $post->title }}</b></a></div>
                                <div class="card-text">{{ $post->body }}</div>
                            </div>
                            @if ($post->image_path != null)
                                <img class="rounded h-50 w-50 mx-auto d-block" src="{{ asset($post->image_path) }}" alt="MaterialImg">
                            @endif    
                        </div>
                        <div class="card-footer flex">
                            <p class="text-bold">{{ $post->likes->count() }} Likes</p>
                            <p class="text-bold flex-1 ml-2">{{ $post->comments->count() }} Comments</p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                <?php endforeach; ?>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>
</section>
@push('scripts')
<script>
$('document').ready(function(){
    $(".delete-post").click(function(event){
        event.preventDefault();     
        var token = $('meta[name=_token]').val();
        var this_post = $('input[name=post]').val();

        swal.fire({
            title: 'Are you sure you want to delete this post?',
            text: 'if you delete this post, it will be gone for ever.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        })
        .then((result) => {
            console.log(result);
            if (result.isConfirmed){
                $.ajax({ 
                    url: "/posts/"+this_post,
                    type: "DELETE",
                    data: {
                        post: this_post,
                        _token: token 
                    },
                    success: function(response){
                        
                        if(response.message)
                        {
                            toastr.options.timeOut  = 500;
                            toastr.options.onHidden = function(){ window.location.reload();}
                            toastr.success(response.message);
                        }
                    },
                    error: function(){
                        toastr.error('Something went wrong');
                    }
                });
            }
        });
    });
});
</script>    
@endpush
@endsection


