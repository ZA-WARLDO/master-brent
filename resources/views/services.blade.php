@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="dropdown mgn-ser">
        <button id="service-dropdown" class="btn btn-dark-purple dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Service
        </button>
        <ul class="dropdown-menu">
            <li @if(!$user_type || $user_type==='Photographer' ) class="active" @endif><a class="dropdown-item" href="{{ route('services.index', ['user_type' => 'Photographer']) }}">Photographer</a></li>
            <li @if($user_type==='Studio Owner' ) class="active" @endif><a class="dropdown-item" href="{{ route('services.index', ['user_type' => 'Studio Owner']) }}">Studio Photoshoot</a></li>
        </ul>
    </div>


    <div class="container mt-4">
        <div class="row">
            @foreach($users as $user)
            <div class="col-md-4 mb-4">
                <div class="card bg-green shadow-lg">
                    <div class="ms-2 card-body ltr-spng">
                        <img class="text-center avatar-ser" src="{{ asset('/img/' . $user->avatar) }}">
                        <h5 class="mt-2 card-title"><strong>{{ $user->name }}</strong></h5>
                        Project Count: <strong>{{ $user->profile ? $user->profile->project_count : null }}</strong><br />
                        Commission Fee: <strong>P{{ $user->profile ? $user->profile->fee : null }}</strong>
                        @if ($user->profile && $user->profile->availability == "Available")
                        <p class="card-text"><strong class="avl-color">{{ $user->profile->availability }}</strong></p>
                        @else
                        <p class="card-text"><strong class="navl-color"> {{ $user->profile ? $user->profile->availability : null }}</strong></p>
                        @endif
                        <a href="{{ route('profile.show', ['user' => $user->id]) }}"><button class="btn btn-aqua" >See Profile</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

@endsection