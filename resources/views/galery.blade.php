@extends('layouts.layout')

@section('content')
  <div class='container' style='padding-top:20px'> 
    <h1> Galery </h1> 
    <hr>

    <h4> Slike </h4> 

    <div id="slike" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="images\Plain_rim.jpg" style='margin-right:10px' data-lightbox="roadtrip" data-title="My caption" > 
            <img style="width:250px; height:250px" src="/images/Plain_rim.jpg" > 
          </a>
          <a href="images\Plain_rim.jpg" style='margin-right:10px'data-lightbox="roadtrip" data-title="My caption"> 
            <img style="width:250px; height:250px" src="https://via.placeholder.com/150">
          </a>
          <a href="images\Plain_rim.jpg" style='margin-right:10px' data-lightbox="roadtrip" data-title="My caption"> 
            <img style="width:250px; height:250px" src="/images/Plain_rim.jpg" > 
          </a>
          <a href="images\Plain_rim.jpg" data-lightbox="roadtrip" data-title="My caption"> 
            <img style="width:250px; height:250px" src="/images/Plain_rim.jpg" > 
          </a>
      </div>

      <div class="carousel-item">
          <a href="images\Plain_rim.jpg" style='margin-right:10px' data-lightbox="roadtrip" data-title="My caption" > 
            <img style="width:250px; height:250px" src="/images/Plain_rim.jpg" > 
          </a>
          <a href="images\Plain_rim.jpg" style='margin-right:10px'data-lightbox="roadtrip" data-title="My caption"> 
            <img style="width:250px; height:250px" src="https://via.placeholder.com/150">
          </a>
          <a href="images\Plain_rim.jpg" style='margin-right:10px' data-lightbox="roadtrip" data-title="My caption"> 
            <img style="width:250px; height:250px" src="https://via.placeholder.com/150">
          </a>
          <a href="images\Plain_rim.jpg" data-lightbox="roadtrip" data-title="My caption"> 
            <img style="width:250px; height:250px" src="/images/Plain_rim.jpg" > 
          </a>
      </div>

      <div class="carousel-item">
          <a href="images\Plain_rim.jpg" style='margin-right:10px' data-lightbox="roadtrip" data-title="My caption" > 
            <img style="width:250px; height:250px" src="/images/Plain_rim.jpg" > 
          </a>
          <a href="images\Plain_rim.jpg" style='margin-right:10px'data-lightbox="roadtrip" data-title="My caption"> 
            <img style="width:250px; height:250px" src="https://via.placeholder.com/150">
          </a>
          <a href="images\Plain_rim.jpg" style='margin-right:10px' data-lightbox="roadtrip" data-title="My caption"> 
            <img style="width:250px; height:250px" src="https://via.placeholder.com/150">
          </a>
          <a href="images\Plain_rim.jpg" data-lightbox="roadtrip" data-title="My caption"> 
            <img style="width:250px; height:250px" src="https://via.placeholder.com/150">
          </a>
      </div>
    </div>
      <a class="carousel-control-prev"  style='left:-126px' href="#slike" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      
      <a class="carousel-control-next" style='left:1000px' href="#slike" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    



  </div> 

  <style>
    .carousel-item{
        transition: -webkit-transform .6s ease;
        transition: transform .6s ease;
        transition: transform .6s ease,-webkit-transform .6s ease;
    } 
</style>
@endsection