@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-3 bg-light">
                <!-- Avatar -->
                <div class="text-center mt-3">
                    <img src="avatar.jpg" alt="User Avatar" class="rounded-circle" width="150" height="150">
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
                <div class="tab-content">
                    <!-- Profile form -->
                    <div class="tab-pane fade show active" id="profile-form">
                        <h2 class="mt-3">Edit Profile</h2>
                        <form method="POST" action="{{ route('editprofile') }}">
                            @csrf
                            @method('PUT')
                            <!-- Form fields go here -->
                        </form>
                    </div>

                    <!-- Portfolio form -->
                    <div class="tab-pane fade" id="portfolio-form">
                        <h2 class="mt-3">Edit Portfolio</h2>
                        <form method="POST" action="{{ route('editprofile') }}">
                            @csrf
                            @method('PUT')
                            <!-- Form fields go here -->
                        </form>
                    </div>

                    <!-- Delete account form -->
                    <div class="tab-pane fade" id="delete-form">
                        <h2 class="mt-3">Delete Account</h2>
                        <form method="POST" action="">
                            @csrf
                            @method('DELETE')
                            <!-- Form fields go here -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection