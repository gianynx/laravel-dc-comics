@extends('layouts.app')

@section('page_title')
    Comics
@endsection

@section('content')
    <section class="container">
        <div class="row pt-5 pb-5">
            @foreach ($comics as $comic)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4 mb-4">
                    <div class="card card_container">
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
@endsection
