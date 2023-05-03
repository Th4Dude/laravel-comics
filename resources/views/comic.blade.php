@extends('layouts.app')

@section('page.main')

<div class="container-blue"></div>

<div class="d-flex justify-content-center">

    <div class="container-locandine">
        <img class="img-locandina-01" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        
        <h1 class="py-3">{{$comic['title']}}</h1>
        <nav class="navbar bg-body-tertiary bg-success">
            <div class="container-fluid">
                <h1 class="fs-5">US PRICE : {{$comic['price']}}</h1>
            </div>
          </nav>
        <p class="py-3"><em>{{$comic['description']}}</em></p>
    </div>

    <div class="container-advertisement px-3 py-3">
        <h6 class="d-flex justify-content-end  py-3" >ADVERTISEMENT</h6>
        <img class="" src="{{ Vite::asset('resources/img/cioccio.jpg') }}" alt="" srcset="">
    </div>

</div>

<div class="d-flex justify-content-center main_container_info">

    <div class="container-left px-3">
        <h1 class="py-2">TALENT</h1>
        <h4 class="py-2">ART BY :</h4>
        <h4 class="py-2">WRITTEN BY :</h4>
       

    </div>

    <div class="container-right px-3 ">
       <h1 class="py-2">SPECS</h1>
       <h4 class="py-2">SERIES : {{$comic['type']}}</h4>
       <h4 class="py-2">PRICE : {{$comic['price']}}</h4>
       <h4 class="py-2">ON SALE DATE : {{$comic['sale_date']}}</h4>
    </div>

</div>







@endsection


