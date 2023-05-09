@extends('layouts.app')

@section('content')
<div class="container-fluid m-auto ">
    <h2 class="text-center fs-1 my-3 fnt-style p-2 ltr-spng fw-bold">Profile</h2>
    <hr class="opac">
    <div class="container my-3 profile-font">
        <div class="row offset-md-1">
            <div class="col-md-4 my-2">
            <img src="{{ asset('/img/' . $user->avatar) }}" class="profile-size mx-3" alt="profile.jpg">
            </div>
            <div class="col-md-8 ms-auto auth-mgn">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-md-0 fw-bold">{{$user->name}}</h1>
                    <p class="mt-md-0 text-blue fs-5">{{$user->user_type}}</p>
                </div>
                
            </div>
            <div class="fw-regular mt-md-2">
                <p>Address: <b>{{$user->address}} </b></p>
                <p>Email: <b class="email-clr">{{$user->email}}</b></p>
                <p>Contact Number: <b> {{$user->contact}} </b></p>
                @if($user->user_type!='Customer')
                <p>Years Experience: <b> {{$user->year_experience}}</b> </p>
                <!--Button for Availability -->
                @if($profile->availability=="Available")
            <div class="row mt-md-4">
                <div class="col-md-4">
                    <button class="btn btn-avail fw-bold px-5 mt-2">{{$profile->availability}}</buton>
                </div>
            </div>
               @else
               <div class="row mt-md-4">
                <div class="col-md-4">
                    <button class="btn btn-red fw-bold px-5 mt-2">{{$profile->availability}}</buton>
                </div>
            </div>
            @endif
               
            </div>       
    </div>
    </div>
    <hr class="opac">
    <h2 class="text-center fs-1 my-4 fnt-style p-2 ltr-spng fw-bold">Portfolio</h2>

    <!-- Carousel Part -->
    <div class="container ">
    <div id="carouselExampleControls" class="carousel slide carousel-dark carousel-fade"> 
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mx-auto border-0 ">
                        <img src="{{asset('img/Girlie.png')}}" class="carousel-size mx-auto" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card mx-auto border-0">
                        <img src="{{asset('img/Alex.png')}}" class="carousel-size mx-auto" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mx-auto border-0">
                        <img src="{{asset('img/Girlie.png')}}" class="carousel-size mx-auto" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mx-auto border-0">
                        <img src="{{asset('img/Girlie.png')}}" class="carousel-size mx-auto" alt="...">
                    </div>
                </div>
            </div>
        </div>
        </div> 
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden ">Next</span>
    </button>
    </div>
</div>
                @else
                <p></br></p>
                @endif
</div>
@endsection