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
      
              <a href='/products/reze_zatvaraci' id='reze_zatvaraci' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'> 
                REZE I ZATVARAČ 
              </a>

              <a href='/products/sarke' id='sarke' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'>ŠARKE</a>

              <a href='/products/ugaoni_vezaci' id='ugaoni_vezaci' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'>
                UGAONI VEZAČI 
              </a>

              <a href='/products/ravni_vezaci' id='ravni_vezaci' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'>
                RAVNI VEZČI 
              </a>

              <a href='/products/prod_zice' id='prod_zice' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'>
                PROIZVODI OD ŽICE
              </a>
              
              <a href='/products/nosaci' id='nosaci' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'>NOSAČI </a>

              <a href='/products/pl_masa' id='pl_masa' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'>
                PROD. OD PLASTIČNIH MASA 
              </a>

              <a href='/products/usluge' id='usluge' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'>
                USLUGE
              </a>

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
          </div>
        </div>

        <div class="card-body row" style=' min-height:500px'>

          @foreach($products as $product)
            <div id='{{$product->id}}' class='card productHighlight ' style='width:220px; padding:0px; margin:10px; height: 232px;'>
              <img src="{{$product->slika}}" alt='{{$product->naziv}}' class="imageCenter" >
              
              <p class='prodLink' > {{$product->naziv}} </p>
            </div>
          @endforeach

     
        
        </div>

        <div style='margin-left:20px'>
            {{$products->links('pagination::bootstrap-4')}}
        </div>
        
      </div>
    </div>



  </div>
@endsection