@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="container my-3">
    <div class="row app-fnt">
        <div class="col-md-2">
    <button class="btn btn-aqua" type="button" href="#">Add a schedule</button>
        </div>
        <div class="col-md-2">
    <button class="btn btn-aqua" type="button" href="#">Edit a schedule</button>
        </div>
        <div class="col-md-2">
    <button class="btn btn-red" type="button" href="#">Delete a schedule</button>
        </div>
    </div>
</div>

<div class="container my-4 ">
<table class="table table-bordered border-black">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Client/Agent Name</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Event</th>
      <th scope="col">Time Start</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>Thornton</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
<div class="text-end ">
    <button class="btn btn-dark-purple float-end ms-4 mt-md-3" type="button" href="#"> Prev </button>
    <button class="btn btn-dark-purple float-end mt-md-3" type="button" href="#"> Next </button>
    </div>
</div>

</div>
@endsection