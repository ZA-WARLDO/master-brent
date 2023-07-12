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
          <div class="col"><strong>1227</strong></div>
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
      <div class="progress-bar" style="width: 75%"><b>2250/3000</b></div>
    </div>
   
  </div>

  <div style="display: flex; justify-content: center; align-items: center;  gap: 3rem">
    <!-- Button trigger modal -->
<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-radius: 7px; background-image: linear-gradient(to right, #C939E6, #9081DB); color: white; width: 150px; height: 35px; border: none;">
  <b>ADD FOOD</b>
</button>

<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight: 900; color: #24225C;">Log Food Here</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row d-flex">
                <div class="col-md"><input class="form-control" type="text" placeholder="Enter Food Here" aria-label="default input example"></div>
                <div class="col-md "><input class="form-control" type="text" placeholder="Calories" aria-label="default input example"></div>
              </div>
              <div class="row my-2">
                <div class="col-12">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Time of Day</option>
                    <option value="1">Breakfast</option>
                    <option value="2">Lunch</option>
                    <option value="3">Dinner</option>
                  </select></div> 
              </div>
          </div>
          <div class="d-flex align-item-center justify-content-center">
            <button type="button" class="btn " data-bs-dismiss="modal" style="width: 1000px; border-radius: 0px; background-image: linear-gradient(to right, #C939E6, #9081DB); color: white; font-weight: 900px;">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#summary"style="border-radius: 7px; background-image: linear-gradient(to right, #C939E6, #9081DB); color: white; width: 150px; height: 35px; border: none;">
  <b>SUMMARY</b>
</button>

<!-- Modal -->
<div class="modal fade" id="summary" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel" style="font-size: 50; color: #24225C;"><b>Summary</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="row">
        <div class="col" style=" color: #24225C; font-size: 30px;"><b>Breakfast</b></div>
        <div class="col" style=" color: #24225C; font-size: 30px;"><b>623</b></div>
      </div>
      <div class="row">
        <div class="col">Dog Meat</div>
        <div class="col">123</div>
      </div>
      <div class="row mb-3">
        <div class="col">HamBurger</div>
        <div class="col">500</div>
      </div>
       <div class="row" style=" color: #24225C; font-size: 30px; ">
        <div class="col"><b>Lunch</b></div>
        <div class="col"><b>400</b></div>
      </div>
       <div class="row mb-3">
        <div class="col">Ramen</div>
        <div class="col">400</div>
       </div>
       <div class="row" style=" color: #24225C; font-size: 30px; ">
        <div class="col"><b>Dinner</b></div>
        <div class="col"><b>1227</b></div>
      </div>
       <div class="row">
        <div class="col">Chicken & Rice</div>
        <div class="col">177</div>
      </div>
      <div class="row">
        <div class="col">Coke Soda</div>
        <div class="col">500</div>
      </div>
      <div class="row">
        <div class="col">Hershey</div>
        <div class="col">550</div>
      </div>
      <div class="row my-3" style=" color: #24225C; font-size: 30px; ">
        <div class="col"><b>Total  Calories</b></div>
        <div class="col"><b>2250</b></div>
      </div>
      </div>
      
    </div>
  </div>
</div>
  </div>
  
</div>



@endsection