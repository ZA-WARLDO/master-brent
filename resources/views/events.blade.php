@extends('layouts.app')

@section('content')
<div class="container-fluid mt-3">
    <div class="dropdown mgn-ser">
    <button class="btn btn-dark-purple dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
       Events
    </button>
    <ul class="dropdown-menu ">
        <li><a class="dropdown-item" href="#">Birthdays</a></li>
        <li><a class="dropdown-item" href="#">Weddings</a></li>
        <li><a class="dropdown-item" href="#">Graduation</a></li>
        <li><a class="dropdown-item" href="#">Funeral</a></li>
    </ul>
    </div>
   
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
