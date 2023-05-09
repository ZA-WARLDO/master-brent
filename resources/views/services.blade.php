@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <<div class="dropdown mgn-ser">
        <button id="service-dropdown" class="btn btn-dark-purple dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Service
        </button>
        <ul class="dropdown-menu">
            <li @if(!$user_type || $user_type==='Photographer' ) class="active" @endif><a class="dropdown-item" href="{{ route('services.index', ['user_type' => 'Photographer']) }}">Photographer</a></li>
            <li @if($user_type==='Studio Owner' ) class="active" @endif><a class="dropdown-item" href="{{ route('services.index', ['user_type' => 'Studio Owner']) }}">Studio Photoshoot</a></li>
        </ul>
</div>
</div>

<div class="container mt-4">
    <div class="row">
    @foreach($users as $user)
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class=" text-center card-title">{{ $user->name }}</h5>
                <p class="card-text"><strong>Project Count:</strong> {{ $user->profile ? $user->profile->project_count : null }}</p>
                <p class="card-text"><strong>Commission Fee:</strong> {{ $user->profile ? $user->profile->fee : null }} pesos</p>
                @if ($user->profile && $user->profile->availability == "Available")
                <p class="card-text"><strong class="avl-color">{{ $user->profile->availability }}</strong></p>
                @else
                <p class="card-text"><strong class="navl-color"> {{ $user->profile ? $user->profile->availability : null }}</strong></p>
                @endif
                <button class="btn btn-aqua">See Profile</button>
            </div>
        </div>
    </div>
    @endforeach
</div>

    <div class="text-end">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
</div>
</div>

@endsection