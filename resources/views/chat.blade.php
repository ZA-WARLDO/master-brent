@extends('layouts.app')

@section('content')
<div class="container-fluid my-2">
  <div class="row">
    <!-- Chat List -->
    <div class="col-md-3 chat-list bg-light border-right">
      <h4 class="mb-4">Chat List</h4>
      <ul class="list-unstyled">
        <li class="media">
          <img src="{{asset('img/Girlie.png')}}" class="profile-pic-size mr-3 rounded-circle" alt="Profile Picture">
          <div class="media-body">
            <h5 class="mt-0 mb-1">Vinyck Syndrome</h5>
            <p>Last message sent</p>
          </div>
        </li>
        <li class="media">
          <img src="{{asset('img/Girlie.png')}}" class="profile-pic-size mr-3 rounded-circle" alt="Profile Picture">
          <div class="media-body">
            <h5 class="mt-0 mb-1">Alex Babineaux</h5>
            <p>You: yeah!</p>
          </div>
        </li>
        <!-- More chat list items here -->
      </ul>
    </div>
    <!-- Chat Box -->
    <div class="col-md-9 chat-box">
      <div class="card h-100">
        <div class="card-header">
          <h5 class="mb-0">Chat with Alex</h5>
        </div>
        <div class="card-body">
          <!-- Chat messages here -->
          <p> Hello!</p>
          <p> Hello!</p>
          <p class="float-end"> Hello!</p>
          <p> Hello!</p>
          <p> Hello!</p>
          <p class="float-end"> Hello!</p>
        
        </div>
        <div class="card-footer">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Type a message...">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection