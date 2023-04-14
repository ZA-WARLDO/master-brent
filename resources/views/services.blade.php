@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="dropdown mgn-ser">
    <button class="btn btn-dark-purple dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
       Service
    </button>
    <ul class="dropdown-menu ">
        <li><a class="dropdown-item" href="#">Photographer</a></li>
        <li><a class="dropdown-item" href="#">Studio Photoshoot</a></li>
    </ul>
    </div>
   
    <div class="container">
    <table class="table mx-auto border border-black mt-3">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Project Count</th>
        <th scope="col">Commission Fee</th>
        <th scope="col">Availability</th>
        </tr>
    </thead>
    @for($i = 1; $i < 9; $i++)
    <tbody>
        <tr>
        <th scope="row">{{$i}}</th>
        <td>Alex Babineaux</td>
        <td>11</td>
        <td>800 pesos</td>
        <td class="avl-color">Available</td>
        </tr>
    </tbody>
    @endfor
    </table>
    <div class="text-end ">
    <button class="btn btn-dark-purple float-end ms-4 mt-md-3" type="button" href="#"> Prev </button>
    <button class="btn btn-dark-purple float-end mt-md-3" type="button" href="#"> Next </button>
    </div>
</div>

@endsection
