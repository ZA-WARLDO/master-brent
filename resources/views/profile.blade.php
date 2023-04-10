@extends('layouts.app')

@section('content')
<div class="container-fluid m-auto">
    <h2 class="text-center fs-1 my-3 fnt-style p-2 ltr-spng fw-bold">Profile</h2>
    <hr class="opac">
    <div class="container my-3">
        <div class="row">
            <div class="col-sm-4 my-2">
            <img src="{{asset('img/Alex.png')}}" class="profile-size mx-3" alt="profile.jpg">
            </div>
            <div class="col-sm-8 ms-auto auth-mgn">
            @for($i = 1; $i<=6; $i++)
                <p class="fs-5"> This is id #{{$i}} </p>
            @endfor 
            <!--Button for Chat -->
            <div class="row">
                <div class="col-md-3">
                    <button class="btn btn-dark-purple"><a class="href="#"> Send a message </a></buton>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-avail ">Available</buton>
                </div>
            </div>
            </div>       
    </div>
    </div>
    <hr class="opac">
    <h2 class="text-center fs-1 my-3 fnt-style p-2 ltr-spng fw-bold">Portfolio</h2>

    <!-- Carousel Part -->
    <div class="container ">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-12 brd-trans">
                    <div class="card mx-auto ">
                        <img src="{{asset('img/Girlie.png')}}" class="carousel-size mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Girlie's Birthday</h5>
                            <p class="card-text">Life is full of beautiful scenery, just take a pause and capture them.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mx-auto">
                        <img src="{{asset('img/Girlie.png')}}" class="carousel-size mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Image 2</h5>
                            <p class="card-text">This is a description of image 2.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mx-auto">
                        <img src="{{asset('img/Girlie.png')}}" class="carousel-size mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Image 3</h5>
                            <p class="card-text">This is a description of image 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mx-auto">
                        <img src="{{asset('img/Girlie.png')}}" class="carousel-size mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Image 4</h5>
                            <p class="card-text">This is a description of image</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div> 
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-black" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
        <span class="visually-hidden ">Next</span>
    </button>
    </div>
</div>

</div>
@endsection