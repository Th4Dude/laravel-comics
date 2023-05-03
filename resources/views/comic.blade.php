@extends('layouts.app')

@section('page.main')

<div class="container-blue"></div>

<div class="container-locandine">
    <img class="img-locandina-01" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    <h1>{{$comic['title']}}</h1>
    <p>{{$comic['description']}}</p>
</div>


@endsection


