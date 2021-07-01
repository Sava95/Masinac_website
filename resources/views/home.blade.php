@extends('layouts.layout')

@section('content')

@isset($locale)
  <p> {{$locale}} </p> 
@endisset

<div id='arrow_div'> 
  <img id='arrow_up_circle' width='50px' height='50px' src='/images/arrow-up-circle.png' alt='Arrow up' style='position:fixed; margin: 450px 1380px;'>
</div>

<div id='video_div' class="container-fluid">
  <video loop autoplay muted >
    <source width='100%' src='../videos/Masinac Spot.mp4' type='video/mp4'>
    <source src="movie.ogg" type="video/ogg">
  </video>

</div>

<!-- Grupe proizvoda -->
<div class='slogan d-flex align-items-center'>
  <p style='margin:0px; margin-left: 200px; font-size: 40px; color:white; font-weight: 700'>
    <img src='../images/Masinac---Logo---White.png' alt='Logo'>  
    <i> {{ __('ui.world_of_possibilities') }} </i> 
  </p>
</div>

<div class='container'>
  <div style='margin: 60px 0px'>
      <h3 class='nasi_proizvodi'> {{ __('ui.our_prod') }} </h3>
      <p style='margin-top: 15px; font-size: 20px'> {{ __('ui.our_prod_moto') }} </p>
  </div>

  <div class='row'>
    @foreach($product_groups as $product_group)
      <div id='{{ $product_group->grupe_prod_id }} ' class="card tab-card" style="width: 16rem; margin: 10px " >
        <img class="card-img-top" src="{{ $product_group->slika }}" alt="Card image cap">

        <?php $locale = App::getLocale(); 
          if ($locale == 'rs') {
              $naziv = $product_group->naziv;
              $opis =  str_limit($product_group->opis, 80);
          } else {
            $naziv = $product_group->naziv_eng;
            $opis =  str_limit($product_group->opis_eng, 80);
          }
        ?> 

        <div class="card-body">
          <h5 class="card-title" style='font-size:16px'> {{ $naziv }}  </h5>
          <p class="card-text"> {{ $opis }} </p>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
