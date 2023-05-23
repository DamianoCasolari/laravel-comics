@extends('layout.app')
@section('page-title', 'Tutti i prodotti - La Molisana')
@section('content')


    <div class="my_jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
    </div>

    <div class="main_content container-lg">
        <div class="tag">current series</div>

        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 py-4">

        </div>
    </div>

@endsection
