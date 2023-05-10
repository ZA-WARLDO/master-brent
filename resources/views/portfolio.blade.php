@extends('layouts.app')

@section('content')
<div class="container-fluid p-5">
        <div class="col-4 mx-auto p-4  border border-success border-2">
            <h4 class="text-uppercase text-center">Edit Profile</h4>
            <form method="POST" action="/portfolio/update/{{$user->id}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="user_name">User Name</label>
                            <input class="form-control @error('user_name') is-invalid @enderror" required id="user_name" name="user_name" type="text" placeholder="Edit your name" value="{{ $user->name }}">
                            @error('user_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="fee">Comission Fee</label>
                            <input class="form-control @error('fee') is-invalid @enderror" required id="fee" name="fee" type="text"  value="{{ $profile->fee }}">
                            @error('fee')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.row-->
                <div class="form-group">
                    <label for="avatar">Upload Image</label>
                    <div class="row">
                        <div class="col-sm-6 ">
                            <img id="preview-image-before-upload" src="{{asset('/img/'.$user->avatar)}}" alt="preview image" style="height: 200px; width: 200px; object-fit: cover;" class=" mb-2">
                            <input class=" form-control @error('avatar') is-invalid @enderror " type="file" name="avatar" value="" id="avatar">
                            @error('avatar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class=" mt-5">
                    <button class="btn btn-dark-purple ">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection