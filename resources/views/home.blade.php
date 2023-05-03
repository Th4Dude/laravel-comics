
@extends('layouts.app')

@section('page.main')


    <!-- background-img -->

    <div class="background"></div>
    
    <!-- background-img -->
    
    <!-- section -->

    <section>

        <div class="btn-top">
            <button>
                <h3 class="font-size-20">CURRENT SERIES</h3>
            </button>
        </div>

        <div class="locandine">
    
            @foreach ($comics as $item)
            <div class="text-align">
            <img src="{{ $item['thumb'] }}" alt="Immagine">
            <h3>{{ $item['title'] }}</h3>
            </div>
            @endforeach
    
        </div>

        <div class="btn-bottom">

            <button>
                <h3 class="font-size-20">LOAD MORE</h3>
            </button>

        </div>

    </section>

    <!-- section -->


@endsection