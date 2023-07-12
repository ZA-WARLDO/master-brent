@extends('layouts.app')



@section('content')
<div class="align-item-center">
<div class="row p-5">
    <div class="col" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
    <h1 style="font-family: Open Sans;  font-size: 70px; font-weight: 900; color: #24225C;">CALORIE <br>TRACKER</h1>
    <p>learn about your calories</p>
    </div>
<div class="col">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Breakfast
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="row">
              <div class="col"><strong>Food</strong></div>
              <div class="col"><strong>Calories</strong></div>
              <div class="row">
                <hr>
              </div>
          </div>
          <div class="row">
              <div class="col">Dog meat</div>
              <div class="col">123</div>
          </div>
          <div class="row">
              <div class="col">HamBurger</div>
              <div class="col">500
              </div>
          </div>
          <div class="row">
            <div class="col"><i><b>Total</b></i></div>
            <div class="col"><i><b>623</b></i></div>
          </div>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Lunch
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="row">
          <div class="col"><strong>Food</strong></div>
          <div class="col"><strong>Calories</strong></div>
          <hr>
        </div>
        <div class="row">
          <div class="col">Ramen</div>
          <div class="col">400</div>
        </div>
        <div class="row">
          <div class="col"><strong>Total</strong></div>
          <div class="col"><strong>400</strong></div>
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Dinner
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <div class="row">
        <div class="col"><strong>Food</strong></div>
        <div class="col"><strong>Calories</strong></div>
        <hr>
        <div class="row">
          <div class="col">Chicken and Rice</div>
          <div class="col">177</div>
        </div>
        <div class="row">
          <div class="col">Coke Soda</div>
          <div class="col">500</div>
        </div>
        <div class="row">
          <div class="col">Hershey Chocolate</div>
          <div class="col">550</div>
        </div>
        <div class="row">
          <div class="col"><strong>Total</strong></div>
          <div class="col"><strong>1800</strong></div>
        </div>
       </div>
      </div>
    </div>
  </div>
    </div>
  </div>
    <div class="row text-center mt-5 mb-3">
        <div class="col">
            <p style="margin-bottom: 0;"><i>Calories Consumed</i></p>
            <p><strong>2250</strong></p>
        </div>
        <div class="col">
            <p style="margin-bottom: 0;"><i>Calories Left</i></p>
            <p><strong>750</strong></p>
        </div>
    </div>
    <div class="progress" style="padding: 0" role="progressbar" aria-label="Example with label" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
      <div class="progress-bar" style="width: 75%">2250/3000</div>
    </div>
   
  </div>

  <div style="display: flex; justify-content: center; align-items: center;  gap: 3rem">
    <a href="" style="display: inline-block; color: white; padding: 10px 25px; border-radius: 20px; background-image: linear-gradient(to right, #C939E6, #9081DB); text-decoration: none; font-weight: bold;">ADD FOOD</a>
    <a href="" style="display: inline-block; color: white; padding: 10px 25px; border-radius: 20px; background-image: linear-gradient(to right, #C939E6, #9081DB); text-decoration: none; font-weight: bold;">SUMMARY</a>
  </div>
</div>



@endsection