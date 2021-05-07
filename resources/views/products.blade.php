@extends('layouts.layout')

@section('content')
  <div class='container' style='padding-top:20px'> 
    <h1> Products </h1> 
    <hr>
  </div> 

  <div class="containter-fluid" style='padding-top:20px'>
  <!-- Navigation Sidebar -->
    <div class="col-md-2 " style="margin-left:5rem" data-simplebar>
      <div class="card" style="width: 15rem; position:absolute">
          <div class="card-header bg-steel" style="font-weight: 600">
            Product List:
          </div>

          <div id="goal-navigation" class="list-group d-flex justify-content-between">
      
              <li id='1' class="list-group-item list-group-item-action prodListItem" style='color:black'> REZE I ZATVARAČ </li>

              <li id='2' class="list-group-item list-group-item-action prodListItem" style='color:black'>ŠARKE</li>

              <li id='3' class="list-group-item list-group-item-action prodListItem" style='color:black'>UGAONI VEZAČI </li>

              <li id='4' class="list-group-item list-group-item-action prodListItem" style='color:black'>RAVNI VEZČI </li>

              <li id='5' class="list-group-item list-group-item-action prodListItem" style='color:black'>PROIZVODI OD ŽICE</li>
              
              <li id='6' class="list-group-item list-group-item-action prodListItem" style='color:black'>NOSAČI </li>

          </div>
      </div>
    </div>

  <!-- List of Products -->
    <div class="col-md-8" style='margin-left:22rem'>
      <div class="card">
        <div class="card-header">
          <div class="row">
            <p style='display:flex; align-items: center; margin:0px 20px 0px 10px'> Search product by name: </p>
            <input id='search_product' type='text' class='form-control' style='width:450px; margin-right: 240px' placeholder='Search'> 
          </input>
            <button id='showAll' type="button" class="btn btn-primary"> Show All </button>
          </div>
        </div>

        <div class="card-body row">
          <div id='1' class='card productHighlight prodClass_1' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_1' class='prodLink' href='#' > Name of Product 1</p>
          </div>

          <div id='2' class='card productHighlight prodClass_2' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_2' class='prodLink' href='#' > Name of Product 2</p>
          </div>

          <div id='3' class='card productHighlight prodClass_3' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 3</p>
          </div>

          <div id='4' class='card productHighlight prodClass_4' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 4</p>
          </div>

          <div id='5' class='card productHighlight prodClass_5' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 5</p>
          </div>

          <div id='6' class='card productHighlight prodClass_6' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 6</p>
          </div>

          <div id='2' class='card productHighlight prodClass_2' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 2</p>
          </div>

          <div id='2' class='card productHighlight prodClass_2' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 2</p>
          </div>

          <div id='4' class='card productHighlight prodClass_4' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 4</p>
          </div>
         
        </div>
        
      </div>
    </div>



  </div>
@endsection