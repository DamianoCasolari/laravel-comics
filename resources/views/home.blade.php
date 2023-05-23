@extends('layout.app')
@section('page-title', 'Tutti i prodotti - La Molisana')
@section('content')


    <div class="my_jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">

    </div>

    <div class="main_content container-lg">
        <div class="tag">current series</div>

        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 py-4">
            @foreach (config('db') as $item)
                <a href="#" class="comic col py-4 px-3">
                    <div class="img_container">
                        <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                    </div>
                    <div class="text my-2 ms-1 fs-4"> {{ $item['title'] }}</div>
                </a>
            @endforeach




        </div>
    </div>

@endsection
