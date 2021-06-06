@extends('layouts.layout')

@section('content')

@isset($locale)
  <p> {{$locale}} </p> 
@endisset

<div id='arrow_div'> 
  <img id='arrow_up_circle' src='/images/arrow-up-circle.svg' alt='Arrow up' style='position:fixed; margin: 450px 1350px;'>
</div>

<div class="container-fluid" style='padding-left: 0px;padding-right: 0px;'>
  <!-- Header -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style='margin-top:-5px'>
    <div class="carousel-inner" >
      <ol class="carousel-indicators" style="height: 14px; margin-bottom:50px; z-index: 1">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-item active">
        <header class="jumbotron" style="padding-top: 30px; height: 550px; background-color: #618685; margin-bottom:0px; border-radius:0px ">
          <h1 class="display-3 text-dark" style="margin-bottom: 1px"> Welcome to Masinac! </h1>
          <p class="lead text-dark"> The biggest online shopping website in the World! Everything you need all in one place. Over 8 million articals for you to choose from! What are you waiting for?!</p>

        </header>
      </div>

      <div class="carousel-item">
        <header class="jumbotron" style='height:550px; background-color: #92a8d1; margin-bottom: 0px; border-radius:0px '>
          <h1 class="display-4"> Second slide </h1>

        </header>
      </div>

      <div class="carousel-item">
        <header class="jumbotron" style='height:550px; background-color: #fefbd8; margin-bottom: 0px;  border-radius:0px'>
          <h1 class="display-4"> Third slide</h1>

        </header>
      </div>

    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Grupe proizvoda -->
  <div class='slogan d-flex justify-content-center align-items-center'>
    <p style='margin:0px; font-size: 20px'> SVET MOGUĆNOSTI </p>
  </div>

  <div class='container'>
    <div style='margin-left: 15%; margin-top:50px; margin-right:15%; margin-bottom: 40px; font-size:16px;'>
        <h3 class='d-flex justify-content-center'> Naši proizvodi </h3>
    </div>

    <div class='row'>
      @foreach($product_groups as $product_group)
        <div id='{{ $product_group->grupe_prod_id }} ' class="card tab-card" style="width: 16rem; margin: 10px " >
          <img class="card-img-top" src="{{ $product_group->slika }}" alt="Card image cap">

          <div class="card-body">
            <h5 class="card-title" style='font-size:16px'> {{ $product_group->naziv  }}  </h5>
            <p class="card-text"> {{ str_limit($product_group->opis, 80) }} </p>

          </div>
        </div>
      @endforeach
    </div>
  </div>

  <!-- Galerija -->
  <div style='margin-left: 15%; margin-top:50px; margin-right:15%; margin-bottom: 40px; font-size:16px;'>
        <h3 class='d-flex justify-content-center'> Istaknuti proizvodi </h3>
    </div>

  <div class='container d-flex justify-content-between'>
    <div>
      <a href="images\Plain_rim.jpg" data-lightbox="roadtrip" data-title="My caption"> 
        <img style="width:260px; height:260px" src="/images/Plain_rim.jpg" > 
      </a>
      <a class='linkToparagraph' href='#'> Product name </a>
    </div>

    <div>
      <a href="images\Plain_rim.jpg" data-lightbox="roadtrip" data-title="My caption"> 
        <img style="width:260px; height:260px" src="/images/Plain_rim.jpg" > 
      </a>
      <a class='linkToparagraph' href='#'> Product name </a>
    </div>

    <div>
      <a href="images\Plain_rim.jpg" data-lightbox="roadtrip" data-title="My caption"> 
        <img style="width:260px; height:260px" src="/images/Plain_rim.jpg" > 
      </a>
      <a class='linkToparagraph' href='#'> Product name </a>
    </div>

    <div>
      <a href="images\Plain_rim.jpg" data-lightbox="roadtrip" data-title="My caption"> 
        <img style="width:260px; height:260px" src="/images/Plain_rim.jpg" > 
      </a>
      <a class='linkToparagraph' href='#'> Product name </a>
    </div>

  
  </div>

</div>
@endsection
