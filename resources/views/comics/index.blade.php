@extends('layouts.app')

@section('page_title')
    Comics
@endsection

@section('content')
    <section class="mt-3">
        <div id="jumbotron"></div>
    </section>
    <section class="container">
        <div class="row pt-5 pb-5">
            @foreach ($comics as $comic)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4 mb-4">
                    <div class="card card_container mx-2">
                        <div class="card-body">
                            <div class="card-image">
                                <a href="{{ route('comics.show', ['comic' => $comic]) }}">
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                </a>
                            </div>
                            <div class="card-title text-uppercase fw-bold text-center pt-2">
                                <a href="{{ route('comics.show', ['comic' => $comic]) }}" class="text-decoration-none">
                                    {{ $comic['series'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-center py-3 mt-5">
                <a href="{{ route('comics.create') }}"
                    class="btn btn-primary rounded-0 text-white fw-bold text-uppercase px-5">
                    create a new comic
                </a>
            </div>
        </div>
    </section>

    <footer class="pt-5">
        <div class="container text-center pt-5 fs-1">
            <a class="text-white" href="#"><i class="fa-brands fa-facebook"></i></a>
            <a class="text-white" href="#"><i class="fa-brands fa-instagram"></i></a>
            <a class="text-white" href="#"><i class="fa-brands fa-facebook-messenger"></i></a>
            <a class="text-white" href="#"><i class="fa-brands fa-telegram"></i></a>
            <a class="text-white" href="#"><i class="fa-brands fa-spotify"></i></a>
        </div>
    </footer>
@endsection
