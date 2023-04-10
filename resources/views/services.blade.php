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
    <table class="table mx-4">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Project Count</th>
        <th scope="col">Availability</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Alex Babineaux</td>
        <td>11</td>
        <td class="avl-color">Available</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Lexa Kitten</td>
        <td>7</td>
        <td class="navl-color">Not Available</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Brandy Roar</td>
        <td>4</td>
        <td class="avl-color">Available</td>
        </tr>
    </tbody>
    </table>
</div>
@endsection
