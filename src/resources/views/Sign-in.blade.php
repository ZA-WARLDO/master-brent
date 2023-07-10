@extends('layouts.app')


@section('content')



<div class="parent">
<form class="p-5 rounded shadow" style=" border-color: #DADDF1; border-style: solid; border-width: 1px">
    <h1 style="font-family: Inter">Sign In</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control purple-bg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control purple-bg" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="mb-3 form-check">
    <div class="row">
        <div class="col">
            <input type="checkbox" class="form-check-input " id="exampleCheck1" style="background-color: red">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <div class="col">
            <a href="/">Forgot Password?</a>
        </div>
    </div>
  </div>
  <div class="text-center">
    <button type="submit" class="btn " style="color: white; font-weight: bold; padding: 7px 125px; background-image: linear-gradient(to right, #C939E6, #9081DB);">Sign In</button>
  </div>
  
  <div class="row mt-3 text-center">
    <div class="col">
        <p>Dont have a account? <a href="/"><span style="font-weight: bold; color: black;">Sign up</span></a></p>
    </div>
  </div>
  
</form>
</div>
@endsection