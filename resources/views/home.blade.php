@extends('layouts.layout')

@section('content')
<div class="container-fluid" style='padding-left: 0px;padding-right: 0px;'>
  <!-- Header -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" >
      <ol class="carousel-indicators" style="height: 14px;margin-bottom:50px">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-item active">
        <header class="jumbotron" style="padding-top: 30px; height: 550px; background-color: #618685">
          <h1 class="display-3 text-dark" style="margin-bottom: 1px"> Welcome to Masinac! </h1>
          <p class="lead text-dark"> The biggest online shopping website in the World! Everything you need all in one place. Over 8 million articals for you to choose from! What are you waiting for?!</p>

        </header>
      </div>

      <div class="carousel-item">
        <header class="jumbotron" style='height:550px; background-color: #92a8d1 '>
          <h1 class="display-4"> Second slide </h1>

        </header>
      </div>

      <div class="carousel-item">
        <header class="jumbotron" style='height:550px; background-color: #fefbd8'>
          <h1 class="display-4"> Third slide</h1>

        </header>
      </div>

    <a class="carousel-control-prev" style="height: 300px" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" style="margin-top:130px" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Grupe proizvoda -->
  <div style='margin-left: 15%; margin-top:50px; margin-right:15%; margin-bottom: 70px; font-size:16px;'>
    <h3 class='d-flex justify-content-center'> Masinac - grupe proizvoda </h3>
    <p class='d-flex justify-content-center' > Višegodišnje iskustvo u proizvodnji, originalna tehnička rešenja, prepoznatljiv moderan dizajn i primena savremenih proizvodnih metoda ostvarenih sopstvenim ljudskim i materijalnim resursima, omogućili su kvalitetnu bazu za raznovrstan asortiman proizvoda visokih performansi. </p>
  </div>

  <div class='container'>
    <!-- First Row -->
    <div class="row">
      <div class="col-md-4">
        <div class="card flex-md-row mb-4 shadow-sm h-md-250 tab-card">
          <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://via.placeholder.com/120x170" >
          <div class="card-body d-flex flex-column align-items-start">
                
                <strong class="d-inline-block mb-2 text-primary"> PVC delovi </strong>
                
                <p class="card-text mb-auto" style='font-size: 14px'>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card flex-md-row mb-4 shadow-sm h-md-250 tab-card">
          <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://via.placeholder.com/120x170" >
          <div class="card-body d-flex flex-column align-items-start">
                
                <strong class="d-inline-block mb-2 text-primary"> Vezači </strong>
                
                <p class="card-text mb-auto" style='font-size: 14px'>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card flex-md-row mb-4 shadow-sm h-md-250 tab-card">
          <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://via.placeholder.com/120x170" >
          <div class="card-body d-flex flex-column align-items-start">
                
                <strong class="d-inline-block mb-2 text-primary"> Šarke </strong>
                
                <p class="card-text mb-auto" style='font-size: 14px'>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
      </div>
    </div>
        

    <!-- Second Row -->
    <div class="row">
      <div class="col-md-4">
        <div class="card flex-md-row mb-4 shadow-sm h-md-250 tab-card">
          <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://via.placeholder.com/120x170" >
          <div class="card-body d-flex flex-column align-items-start">
                
                <strong class="d-inline-block mb-2 text-primary"> Reze </strong>
                
                <p class="card-text mb-auto" style='font-size: 14px'>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card flex-md-row mb-4 shadow-sm h-md-250 tab-card">
          <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://via.placeholder.com/120x170" >
          <div class="card-body d-flex flex-column align-items-start">
                
                <strong class="d-inline-block mb-2 text-primary"> Žičani proizvodi </strong>
                
                <p class="card-text mb-auto" style='font-size: 14px'>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card flex-md-row mb-4 shadow-sm h-md-250 tab-card">
          <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://via.placeholder.com/120x170" >
          <div class="card-body d-flex flex-column align-items-start">
                
                <strong class="d-inline-block mb-2 text-primary"> Funkcionalni sklopovi </strong>
                
                <p class="card-text mb-auto" style='font-size: 14px'>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
      </div>
    </div>
  
  </div>

  <!-- Galerija -->
  <div style='margin-left: 15%; margin-top:50px; margin-right:15%; margin-bottom: 40px; font-size:16px;'>
      <h3 class='d-flex justify-content-center'> Featured Products </h3>
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
