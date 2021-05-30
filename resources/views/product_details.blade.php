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

                <div class="col-7">
                    <p>  {{$description}} </p>    
                </div>
                <div style='width:90%; margin:5%;'> 
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Oznaka</th>
                                <th scope="col">Širina</th>
                                <th scope="col">Duzina</th>
                                <th scope="col">Debljina</th>
                                <th scope="col">Debljina Lima</th>
                                <th scope="col">Zastita </th>
                                <th scope="col">Težina </th>
                                <th scope="col">Br. komada </th>
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