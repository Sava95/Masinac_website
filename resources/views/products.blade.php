@extends('layouts.layout')

@section('content')
  <div class='container' style='padding-top:20px'> 
    <h1> {{ __('ui.products') }}   </h1> 
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
            {{ __('ui.prod_list') }}  
          </div>

          <div id="goal-navigation" class="list-group d-flex justify-content-between">
      
              <a href='/products/reze_zatvaraci' id='reze_zatvaraci' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'> 
                {{ __('ui.reze_zatvaraci') }} 
              </a>

              <a href='/products/sarke' id='sarke' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'>  {{ __('ui.sarke') }}  </a>

              <a href='/products/ugaoni_vezaci' id='ugaoni_vezaci' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'>
              {{ __('ui.ugaoni_vezaci') }} 
              </a>

              <a href='/products/ravni_vezaci' id='ravni_vezaci' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'>
              {{ __('ui.ravni_vezaci') }}
              </a>

              <a href='/products/prod_zice' id='prod_zice' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'>
              {{ __('ui.prod_zice') }} 
              </a>
              
              <a href='/products/nosaci' id='nosaci' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'> {{ __('ui.nosaci') }}  </a>

              <a href='/products/pl_masa' id='pl_masa' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'>
              {{ __('ui.pl_masa') }} 
              </a>

              <a href='/products/usluge' id='usluge' class="list-group-item list-group-item-action prodListItem" style='color:black; border:0px'>
              {{ __('ui.usluge') }} 
              </a>

          </div>
      </div>
    </div>

  <!-- List of Products -->
    <div class="col-md-8" style='margin-left:22rem'>
      <div class="card">
        <div class="card-header">
          <div class="row">
            <p style='display:flex; align-items: center; margin:0px 20px 0px 10px'> {{ __('ui.search_prod') }}  </p>
            <input id='search_product' type='text' class='form-control' style='width:450px; margin-right: 240px' placeholder='Search'> 
            </input>
          </div>
        </div>

        <div class="card-body row" style=' min-height:500px'>
          @isset($products)
            @foreach($products as $product)
              <div id='{{$product->id}}' class='card productHighlight ' style='width:220px; padding:0px; margin:10px; height: 232px;'>
                <img src="{{$product->slika}}" alt='{{$product->naziv}}' class="imageCenter" >
                
                <p class='prodLink' > {{$product->naziv}} </p>
              </div>
            @endforeach
            <div style='margin-left:20px'>
                {{$products->links('pagination::bootstrap-4')}}
            </div>

          @else 
          <div style='margin-left:10px'>
            <h3> Usluge </h3>

            <p> Pored usluga asortimanske proizvodnje firma Masinac kako bi zadovoljila svoje klijente pruza sledece usluge :</p>

            <ul> 
              <li> Izrade alata za savijanje, probijanje I prosecanje lima  </li>
              <li> Stancovanje delova od lima na ekscentar presama do 60 tona, savijanje na hidraulicnim presama, mogucnost zavarivanja I punktovanja istih. </li>
              <li> Secenja lima na trake </li> 
              <li> Izrata delova od zice po tehnickom crtezu kao I valjanje navoja </li> 
              <li> Izrade zahtevnih delova na masini “BIHLER” za veliko serijske I masovne proizvodnje </li>
            </ul>


            <div class='row' style='margin-left:0px'>
              <p style='padding-right:10px'> Tehničke crteže I sva Vaša pitanja postavljajte na e-mail: </p>
              <a href='#'> masinacusluge@gmail.com </a> 
            </div> 

          </div> 
          @endisset
        </div>


        
      </div>
    </div>



  </div>
@endsection