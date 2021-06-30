@extends('layouts.layout')

@section('content')
<div class="container" style='padding-top:20px'>

    <div class='card' style='width:80%'>
        <div class="card-body">
            <h2 style='margin-left:20px'> {{$product->naziv}} </h2>

            <div class='row' style='margin-top:20px'>
                <div class="col-5 d-flex">
                    <img style="width:340px; height:250px;  border-radius:2%" src="{{$image}}" > 
                </div>

                
            <?php $locale = App::getLocale(); 
                if ($locale == 'rs') {
                    $opis = $description;
                    $oznaka = 'Oznaka';
                    $sirina = 'Širina';
                    $duzina = 'Dužina';
                    $debljina = 'Debljina'; 
                    $debljina_lima = 'Debljina Lima';
                    $zastita = 'Zaštita';
                    $tezina = 'Težina';
                    $br_kom = 'Br. komada';
                } else {
                    $opis = $description_eng;
                    $oznaka = 'Label';
                    $sirina = 'Width';
                    $duzina = 'Lenght';
                    $debljina = 'Thickness'; 
                    $debljina_lima = 'Thickness metal';
                    $zastita = 'Protection';
                    $tezina = 'Weight';
                    $br_kom = 'Num. of pieces';
                }
            ?> 

                <div class="col-7">
                    <p>  {{$opis}} </p>    
                </div>
                <div style='width:90%; margin:5%;'> 
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col"> {{$oznaka}} </th>
                                <th scope="col"> {{$sirina}} </th>
                                <th scope="col"> {{$duzina}} </th>
                                <th scope="col"> {{$debljina}} </th>
                                <th scope="col"> {{$debljina_lima}} </th>
                                <th scope="col"> {{$zastita}} </th>
                                <th scope="col"> {{$tezina}} </th>
                                <th scope="col"> {{$br_kom}} </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($details as $detail)
                            <tr>
                                <th scope="row">{{$detail->id}}</th>
                                <td> {{$detail->oznaka}}  </td>
                                <td> {{$detail->sirina}} </td>
                                <td> {{$detail->duzina}} </td>
                                <td> {{$detail->debljina}} </td>
                                <td> {{$detail->deblina_lima}} </td>
                                <td> {{$detail->zastita}} </td>
                                <td> {{$detail->tezina}} </td>
                                <td> {{$detail->br_komada}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>  
            </div>     
        </div>
    </div>


</div>
@endsection