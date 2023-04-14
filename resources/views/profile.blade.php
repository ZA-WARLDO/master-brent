@extends('layouts.app')

@section('content')
<div class="container-fluid m-auto ">
    <h2 class="text-center fs-1 my-3 fnt-style p-2 ltr-spng fw-bold">Profile</h2>
    <hr class="opac">
    <div class="container my-3 profile-font">
        <div class="row">
            <div class="col-md-4 my-2">
            <img src="{{asset('img/Alex.png')}}" class="profile-size mx-3" alt="profile.jpg">
            </div>
            <div class="col-md-8 ms-auto auth-mgn">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-md-0 fw-bold">Name Surname</h1>
                    <p class="mt-md-0 text-blue fs-5">User Type</p>
                </div>
                <div class="col-md-6">
                <i class=" fs-3 bi bi-pencil-square"></i>
                </div>
            </div>
            <div class="fw-regular mt-md-2">
                <p>Address: </p>
                <p>Email: </p>
                <p>Contact Number: </p>
                <p>Years Experience: </p>

            <!--Button for Chat -->
            <div class="row mt-md-4">
                <div class="col-md-3">
                    <button class="btn btn-dark-purple "><a class="text-decoration-none text-white" href="/chat"><i class=" p-1 my-2 bi bi-envelope-fill"></i> Send a message </a></buton>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-avail fw-bold">Available</buton>
                </div>
            </div>
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

</div>
@endsection