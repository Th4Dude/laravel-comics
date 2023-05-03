@extends('layouts.app')

@section('page.main')

<div class="container-blue"></div>

<div class="d-flex justify-content-center">

    <div class="container-locandine">
        <img class="img-locandina-01" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        
        <h1 class="py-3">{{$comic['title']}}</h1>
        <nav class="navbar bg-body-tertiary bg-success">
            <div class="container-fluid">
                <h1 class="fs-5">US PRICE :{{$comic['price']}}</h1>
            </div>
          </nav>
        <p class="py-3">{{$comic['description']}}</p>
    </div>

    <div class="container-advertisement">
        <h6>ADVERTISEMENT</h6>
        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="" srcset="">
    </div>

</div>




@endsection


