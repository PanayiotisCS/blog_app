@extends('layouts.app')
@section('content')
<section class="layout-container-fluid">
    <div class="container-overlap bg-gradient-info text-center">
        @if ($data['profile']->profile_path != null)
            <div class="mb-3"><img class="wd-sm rounded-circle img-thumbnail mx-auto d-block" src="{{ asset($data['profile']->profile_path) }}" alt="user"></div>
        @endif
        <div class="text-white">
            <div class="h3">{{ $data['profile']->user->name }}</div>
        </div>
    </div>
    <div class="container container-md">
        <div class="cardbox">
            @if ($data['profile']->user->id == auth()->id())
                <div class="cardbox-heading">
                <table class="table mb-0">
                    <thead>
                        <th>Personal Information</th>
                        <th width=50><a href="{{ route('profile.edit',['profile' => $data['profile']]) }}" class="btn btn-primary float right"><em class="ion-edit text-white" data-toggle="tooltip" data-title="Edit"></em></a></th>
                        <input type="hidden" name="profile" value={{ $data['profile']->id }}>
                        <th width=50><button class="delete_prof btn btn-danger float right"><em class="ion-trash-a text-white" data-toggle="tooltip" data-title="Delete"></em></button></th>
                    </thead>
                </table>
            </div>
            @else
            <h5 class="cardbox-heading mb-0">Personal Information</h5>
            @endif
            <div class="cardbox-body">
                <table class="table table-striped mb-0">
                <tbody>
                    <tr>
                    <td><em class="ion-ios-body icon-fw mr-3"></em>Member since</td>
                    <td><span class="is-editable text-inherit">{{ $data['profile']->user->created_at->format('d/m/Y') }}</span></td>
                    </tr>
                    <td><em class="ion-android-home icon-fw mr-3"></em>Address</td>
                    <td>
                        @if ($data['profile']->address == null)
                        -
                        @else
                        <span class="is-editable text-inherit">{{ $data['profile']->address }}</span>
                        @endif
                    </td>
                    </tr>
                    <tr>
                    <td><em class="ion-email icon-fw mr-3"></em>Email</td>
                    <td>
                        <span class="is-editable text-inherit">{{ $data['profile']->user->email}}</span>
                    </td>
                    </tr>
                    <tr>
                    <td><em class="ion-ios-telephone icon-fw mr-3"></em>Contact phone</td>
                    <td>
                        @if ($data['profile']->phone == null)
                        -    
                        @else    
                        <span class="is-editable text-inherit">13-123-46578</span>
                        @endif
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        <div class="cardbox">
        @if ($data['posts']->isEmpty())
        <h5 class="cardbox-heading">No posts yet.</h5>
        @else
            @foreach ($data['posts'] as $post)
            <h5 class="cardbox-heading">Posts</h5>
            <div class="cardbox-body pb-0">
                <p class="float-left mr-3"><a href="{{ route('posts.show',['id' => $post->id]); }}"><em class="ion-record text-info">{{ $post->title }}</em></a></p>
                <div class="oh">
                    <div class="clearfix">
                        <div class="float-left text-muted"><em class="ion-android-time mr-2"></em><span>{{$post->created_at->diffForHumans(); }}</span></div>
                    </div>
                </div>
            </div>            
            @endforeach    
        @endif
        </div>
    </div>
</section>
@push('scripts')
<script type="text/javascript">
    $(".delete_prof").click(function(event){
            event.preventDefault();     
            var token = $('meta[name=_token]').val();
            var this_prof = $('input[name=profile]').val();

            swal.fire({
                title: 'Are you sure you want to delete your profile?',
                text: 'if you delete your profile, it will be gone for ever.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            })
            .then((result) => {
                if (result.isConfirmed){
                    $.ajax({ 
                        url: "/profile/"+this_prof,
                        type: "DELETE",
                        data: {
                            post: this_prof,
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
                            console.log(response.error);
                        }
                    });
                }
            });
        });
</script>
@endpush
@endsection