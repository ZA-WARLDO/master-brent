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

<div class="container">
    <table class="table mx-auto border border-black mt-3">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Project Count</th>
                <th scope="col">Commission Fee</th>
                <th scope="col">Availability</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->profile ? $user->profile->project_count : null}}</td>
                <td>{{$user->profile ? $user->profile->fee : null}} pesos</td>
                @if ($user->profile && $user->profile->availability == "Available")
                <td class="avl-color">{{$user->profile->availability}}</td>
                @else
                <td class="navl-color">{{$user->profile ? $user->profile->availability : null}}</td>
                @endif
            </tr>
            @endforeach

        </tbody>
    </table>
    <div class="text-end">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
</div>
</div>

@endsection