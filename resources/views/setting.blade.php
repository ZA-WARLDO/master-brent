@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="bg-setting">
        <div class="row">
        <div class="container setting-mgn">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <h5 class="card-title "><a class="fs-3 no-und" href="/portfolio/profile">Profile</a></h5>
                            <p class="card-text">Update your profile information.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <h5 class="card-title"><a class="fs-3 no-und" href="#">Portfolio</a></h5>
                            <p class="card-text">Manage your portfolio items.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <h5 class="card-title"><a class="fs-3 no-und" href="#">Delete Account</a></h5>
                            <p class="card-text">Permanently delete your account.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body p-4">
                        </div>
                </div>
            </div>
        </div>
</div>
    </div>
@endsection
