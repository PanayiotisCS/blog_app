@extends('layouts.app')
@section('content')
<section class="layout-container-fluid">
    <div class="container-overlap bg-gradient-info text-center">
        @if ($profile->profile_path != null)
            <div class="mb-3"><img class="wd-sm rounded-circle img-thumbnail mx-auto d-block" src="{{ asset($profile->profile_path) }}" alt="user"></div>
        @endif
        <div class="text-white">
            <div class="h3">{{ $profile->user->name }}</div>
        </div>
    </div>
    <div class="container container-md">
        <div class="cardbox">            
            <div class="cardbox-heading mb-0">
                <h5>Edit Your Personal Information</h5>
                <a href="{{ route('profile.show',['profile' => $profile->id])}}" class="btn btn-primary mt-1" type="button"><em class="ion-arrow-left-a"></em> Back</a>
            </div>  
            <div class="cardbox-body">
                <form method="POST" action="{{ route('profile.update',['profile'=>$profile]) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PATCH')
                    <table class="table table-striped mb-0">
                        <tbody>
                            
                            <td><em class="ion-android-home icon-fw mr-3"></em>Address</td>
                            <td>
                                <input class="form-control" type="text" name="address" value="{{old('address',$profile->address)}}">
                            </td>
                            </tr>
                            <tr>
                            <td><em class="ion-email icon-fw mr-3"></em>Email</td>
                            <td>
                                <input class="form-control" type="text" name="email" value="{{old('email',$profile->user->email)}}" required>
                            </td>
                            </tr>
                            <tr>
                            <td><em class="ion-ios-telephone icon-fw mr-3"></em>Contact phone</td>
                            <td>
                                <input class="form-control" type="text" name="phone" value="{{old('phone',$profile->phone)}}">
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    <fieldset>
                        <div class="form-group">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Upload profile picture</label>
                                <div class="col-lg-8">
                                    <div class="flex">
                                        <div class="col-7">
                                            <input class="custom-file-input" id="customFile" type="file" name="profile_path" accept="image/*">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            {!!$errors->first('image','<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection