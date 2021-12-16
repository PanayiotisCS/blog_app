@extends('layouts.app')
@section('content')
{{-- <section class="layout-container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> --}}
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
                                <a href={{ route('posts.index')}} class="btn btn-primary" type="button"><em class="ion-arrow-left-a"></em> Back</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cardbox">
                    <div class="cardbox-heading">
                        <!-- START dropdown-->
                        @if ($data['post']->user->id == auth()->user()->id)
                            <div class="float-right dropdown">
                                <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown"><em class="ion-android-more-horizontal"></em></button>
                                <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" href="{{ route('posts.edit',['post' => $data['post']]) }}">Edit Post</a>
                                    <input type="hidden" name="post" value="{{ $data['post']->id }}">
                                    <button class="delete-post dropdown-item">Delete Post</button>
                                </div>
                            </div>
                        @endif
                        <!-- END dropdown-->
                        <div class="media m-0">
                            <div class="d-flex mr-3">
                                @if ($data['post']->user->profile->profile_path != null)
                                    <a href="{{ route('profile.show',['profile'=>$data['post']->user->profile->id])}}"><img class="rounded-circle thumb48" src="{{ asset($data['post']->user->profile->profile_path) }}" alt="User"></a>        
                                @endif
                            </div>
                            <div class="media-body p-2">
                                <a class="m-0 text-bold" href="{{ route('profile.show',['profile'=>$data['post']->user->profile->id])}}">{{ $data['post']->user->name }}</a><br><small class="text-muted"><em class="ion-earth text-muted mr-2"></em><span>{{ $data['post']->created_at->diffForHumans(); }}</span></small>
                            </div>
                        </div>
                        <div class="cardbox-body">
                            <div class="card-text"><b>{{ $data['post']->title }}</b></div>
                            <div class="card-text">{{ $data['post']->body }}</div>
                        </div>
                        @if ($data['post']->image_path != null)
                            <img class="rounded h-50 w-50 mx-auto d-block" src="{{ asset($data['post']->image_path) }}" alt="MaterialImg">
                        @endif
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-flat btn-primary like" type="button"><em class="ion-thumbsup icon-lg"></em></button>
                        <input type="hidden" name="uid" value="{{ auth()->user()->id }}">
                        <button class="btn btn-flat btn-primary comment" data-id="{{ $data['post']->id }}" type="button"><em class="ion-chatbubbles icon-lg"></em></button>
                        <p class="text-bold like-counter">{{ $data['totaLikes'] }} Likes</p>
                    </div>
                    <?php foreach ($data['comments'] as $comment) : ?>
                        <div class="d-flex media m-1 mr-auto">
                            <div class="card-text py-2 px-2"> <span><b>{{ $comment->user->name }}</b></span>
                                <div class="card-text">
                                {{ $comment->body }} 
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    {{ $data['comments']->links()}}
                    <div class="comments bg-light p-2 comment-section-{{ $data['post']->id }}" data-text="{{ $data['post']->id }}" hidden="true">
                        <div class="d-felx flex-row align-items-start">
                            <input type="hidden" name="post_id" value="{{ $data['post']->id }}"/>
                            <textarea class="form-control ml-1 shadow-none textarea" name="comment"></textarea>
                            <div class="mt-2 text-right">
                                <button class="post-comment btn btn-primary btn-sm shadow-none">Post comment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</section>
@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        //Toggle comment section
        var flag = false;
        $(".comment").click(function(){
            var id = $(this).data("id");
            if($('div.comment-section-'+id).is('[hidden]')){
                $('div.comment-section-'+id).removeAttr('hidden');
            }else{
                $('div.comment-section-'+id).attr('hidden','');
            }
        })

        $(".post-comment").click(function(event){
            event.preventDefault();
            var id = $('input[name="post_id"]').val();
            
            var commentBody = $('.textarea').val();
            console.log(commentBody);
            var token = $('meta[name=_token]').val();
            $.ajax({ 
                url: "{{route('comment.add') }}",
                type: "POST",
                data: {
                    post_id: id,
                    body: commentBody,
                    _token: token 
                },
                success: function(response){
                    toastr.options.timeOut  = 500;
                    toastr.options.onHidden = function(){ window.location.reload();}
                    toastr.success(response.message);
                },
                error: function(response){
                    toastr.error('error', response.error);
                }
            });
        });

        $(".like").click(function(event){
            event.preventDefault();
            var id = $('input[name="post_id"]').val();
            var uid = $('input[name="uid"').val();       
            console.log(uid);
            var token = $('meta[name=_token]').val();
            $.ajax({ 
                url: "{{route('like.add') }}",
                type: "POST",
                data: {
                    post_id: id,
                    user_id: uid,
                    _token: token 
                },
                success: function(response){
                    if(response.message)
                    {
                        toastr.options.timeOut  = 500;
                        toastr.options.onHidden = function(){ window.location.reload();}
                        toastr.success(response.message);
                    }else{
                        toastr.error(response.error);
                    }
                    
                },
                error: function(response){
                    toastr.error(response.error);
                }
            });
        });

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
                        error: function(response){
                            toastr.error('Something went wrong');
                            console.log(response);
                        }
                    });
                }
            });
        });
    });
</script>
@endpush
@endsection


