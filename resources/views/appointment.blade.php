@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="container my-3">
    <div class="row app-fnt">
      <div class="col-md-2">
        <button class="btn btn-aqua add-button" type="button" href="#">Add a schedule</button>
      </div>
      <div class="col-md-1 appnt-mgn-lf appnt-mgn-rt">
        <button class="btn btn-aqua" type="button" href="#">Edit</button>
      </div>
      <div class="col-md-1">
        <button class="btn btn-red appnt-mgn-lf" type="button" href="#">Delete</button>
      </div>
    </div>
  </div>

  <div class="container my-4 ">
    <table class="table table-bordered border-black">
      <thead>
        <tr class="table-brd-clr text-white text-center">
          <th scope="col">Client/Agent Name</th>
          <th scope="col">Start Date</th>
          <th scope="col">End Date</th>
          <th scope="col">Event</th>
          <th scope="col">Time Start</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($appointments as $appointment)
        <tr>
          <td>{{$appointment->cus_name}}</td>
          <td>{{$appointment->start_date}}</td>
          <td>{{$appointment->end_date}}</td>
          <td>{{$appointment->event}}</td>
          <td>{{$appointment->start_time}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="text-end ">
      <button class="btn btn-dark-purple float-end ms-4 mt-md-3" type="button" href="#"> Next </button>
      <button class="btn btn-dark-purple float-end mt-md-3" type="button" href="#"> Prev </button>
    </div>
  </div>
  <x-appointment-form></x-appointment-form>
</div>

<script>
  const addButton = document.querySelector('.add-button');
  const createApp = document.querySelector('.create-appointment');
  const body = document.querySelector('body');
  const cancelButton = createApp.querySelector('button[data-dismiss="modal"]');

  addButton.addEventListener('click', () => {
    createApp.hidden = !createApp.hidden;
    body.classList.toggle('no-scroll');
  });

  cancelButton.addEventListener('click', () => {
    createApp.hidden = true;
    body.classList.remove('no-scroll');
  });
</script>

@endsection