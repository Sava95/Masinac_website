@extends('layouts.layout')

@section('content')
  <div class='container' style='padding-top:20px'> 
    <h1> Products </h1> 
    <hr>
  </div> 
  
  @isset ($prod_group)
    <input id='prod_group' type='hidden' value='{{$prod_group}}' />
  @endisset
  
  <div class="containter-fluid" style='padding-top:20px; min-height: 500px;'>
  <!-- Navigation Sidebar -->
    <div class="col-md-2 " style="margin-left:5rem" data-simplebar>
      <div class="card" style="width: 15.7rem; position:absolute">
          <div class="card-header bg-steel" style="font-weight: 600">
            Product List:
          </div>

          <div id="goal-navigation" class="list-group d-flex justify-content-between">
      
              <li id='reze_zatvaraci' class="list-group-item list-group-item-action prodListItem" style='color:black'> REZE I ZATVARAČ </li>

              <li id='sarke' class="list-group-item list-group-item-action prodListItem" style='color:black'>ŠARKE</li>

              <li id='ugaoni_vezaci' class="list-group-item list-group-item-action prodListItem" style='color:black'>UGAONI VEZAČI </li>

              <li id='ravni_vezaci' class="list-group-item list-group-item-action prodListItem" style='color:black'>RAVNI VEZČI </li>

              <li id='prod_zice' class="list-group-item list-group-item-action prodListItem" style='color:black'>PROIZVODI OD ŽICE</li>
              
              <li id='nosaci' class="list-group-item list-group-item-action prodListItem" style='color:black'>NOSAČI </li>

              <li id='pl_masa' class="list-group-item list-group-item-action prodListItem" style='color:black'>PROD. OD PLASTIČNIH MASA </li>

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
          <div id='1' class='card productHighlight prodClass_reze_zatvaraci' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_1' class='prodLink' href='#' > Name of Product 1</p>
          </div>

          <div id='2' class='card productHighlight prodClass_sarke' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_2' class='prodLink' href='#' > Name of Product 2</p>
          </div>

          <div id='3' class='card productHighlight prodClass_ugaoni_vezaci' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 3</p>
          </div>

          <div id='4' class='card productHighlight prodClass_ravni_vezaci' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 4</p>
          </div>

          <div id='5' class='card productHighlight prodClass_prod_zice' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 5</p>
          </div>

          <div id='6' class='card productHighlight prodClass_nosaci' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 6</p>
          </div>

          <div id='2' class='card productHighlight prodClass_sarke' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 2</p>
          </div>

          <div id='2' class='card productHighlight prodClass_sarke' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 2</p>
          </div>

          <div id='4' class='card productHighlight prodClass_ravni_vezaci' style='width:220px; padding:0px; margin:10px'>
            <img src="/images/Plain_rim.jpg" class="imageCenter" >
            <p id='prod_name_3' class='prodLink' href='#' > Name of Product 4</p>
          </div>
         
        </div>
        
      </div>
    </div>



  </div>
@endsection