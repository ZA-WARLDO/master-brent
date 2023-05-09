@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="bg-setting">
        <div class="container">
        <div class="mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Profile</a></h5>
                            <p class="card-text">Update your profile information.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Portfolio</a></h5>
                            <p class="card-text">Manage your portfolio items.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Delete Account</a></h5>
                            <p class="card-text">Permanently delete your account.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    </div>
</div>
@endsection
