
@extends('layouts.app')

@section('page.main')

    <!-- section -->

    <section>

        <div class="btn-top">
            <button>
                <h3 class="font-size-20">CURRENT SERIES</h3>
            </button>
        </div>

        <div class="locandine">
    
            @foreach ($comics as $index => $item)
            <div class="text-align">
                <a href="{{ url('/comic/'.$index)}}">
                    <img class="img-locandina" src="{{ $item['thumb'] }}" alt="Immagine">
                    <h3>{{ $item['title'] }}</h3>
                </a>
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