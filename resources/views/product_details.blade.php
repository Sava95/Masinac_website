@extends('layouts.layout')

@section('content')
<div class="container" style='padding-top:20px'>

    <div class='card' style='width:80%'>
        <div class="card-body">
            <h2 style='margin-left:20px'> {{$name}} </h2>

            <div class='row'>
                <div class="col-4">
                    <img style="width:250px; height:250px" src="/images/Plain_rim.jpg" > 
                </div>

                <div class="col-8">
                    <p style='margin-bottom:0px'> Šifra proizvoda: 3398063 </p>
                    <p style='margin-bottom:0px'> Model: 2100 </p>
                    <p style='margin-bottom:0px'> Robna marka: DABEL </p>
                    <p style='margin-bottom:0px'> Materijal: Legura cinka </p>
                    <p style='margin-bottom:0px'> Boja: Hromirana </p>
                    <p style='margin-bottom:0px'> Jedinica mere: KD </p>
                    <p style='margin-bottom:0px'> Pakovanje: Trgovačko kačenje </p>
                    <p style='margin-bottom:0px'> Upotreba: drvo </p>
                    <p style='margin-bottom:0px'> Marketing: sa prihvatnikom </p>
                </div>
            </div>     
        </div>
    </div>


</div>
@endsection