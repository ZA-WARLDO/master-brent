@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- Left column -->
        <div class="col-md-3 bg-light border border-black">
            <!-- Avatar -->
            <div class="text-center mt-3">
                <img src="{{ asset('/img/' . $user->avatar) }}" alt="User Avatar" class="rounded-circle" width="150" height="150">
            </div>

            <!-- Profile navigation -->
            <ul class="nav flex-column nav-pills mt-4">
                <li class="nav-item">
                    <a class="nav-link active" href="#profile-form" data-bs-toggle="tab">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio-form" data-bs-toggle="tab">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#delete-form" data-bs-toggle="tab">Delete Account</a>
                </li>
            </ul>
        </div>

        <!-- Right column -->
        <div class="col-md-9">
            <!-- Tab content -->
            <div class="tab-content bg-setting  border border-black">
                <!-- Profile form -->
                <div class="tab-pane fade show active mt-5" id="profile-form">
                    <h2 class="mt-3 ms-3 profile-font pt-2"></h2>
                    <form method="POST" action="">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$user->address}}" required autocomplete="new-address">

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Contact Number -->
                        <div class="row mb-3">
                            <label for="contact" class="col-md-4 col-form-label text-md-end">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{$user->contact}}" required autocomplete="new-contact">

                                @error('contact')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- User Type -->
                        <div class="row mb-3">
                            <label for="user_type" class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <select id="user_type" class="form-control @error('user_type') is-invalid @enderror" name="user_type" value="" required autocomplete="new-user_type">
                                        <option value="" selected disabled>{{$user->user_type}}</option>
                                        <option value="Customer">Customer</option>
                                        <option value="Studio Owner">Studio Owner</option>
                                        <option value="Photographer">Photographer</option>
                                    </select>
                                </div>

                                @error('user_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!--Password-->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                <small class="form-text text-muted text-black">Leave it blank if you don't want to change the password.</small>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Confirm password field -->
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Submit button -->
                        <div class="row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>



                <!-- Portfolio form -->
                <div class="tab-pane fade" id="portfolio-form">
                    <form method="POST" action="{{ route('editprofile') }}">
                        @csrf
                        @method('PUT')
                        <!-- Form fields go here -->
                    </form>
                </div>

                <!-- Delete account form -->
                <div class="tab-pane fade" id="delete-form">
                    <h2 class="mt-3">Delete Account</h2>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete Account</button>

                    <!-- Delete confirmation modal -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="POST" action="">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Confirm Account Deletion</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 class="text-center mt-5">Are you sure you want to delete your account?</h2>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection