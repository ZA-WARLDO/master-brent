@extends('layouts.app')

@section('content')
<div class="container lgn-mgn ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bor ">
                <div class="card-header bg-white text-center txt-color fw-bold bor2">{{ __('USER LOGIN') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"><i class="bi bi-person-circle mx-3 fs-4"></i></label>

                            <div class="col-md-6 ">
                                <input id="email" placeholder="Email" type="email" class=" form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><i class="bi bi-key mx-3 fs-4 fw-bold"></i></label>

                            <div class="col-md-6 ">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link fg-m" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn loginbutton lgn-p">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <div class="offset-md-4 my-2">
                                <div class="row">
                                    <div class="col-md-8">
                            <p class="mb-0">Don't have an account?                    
                            <a class="nav-link" href="{{ route('register') }}"><button type="button" class="btn signbutton fw-bold btn-sm rounded">{{ __('Sign Up') }}</button></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
