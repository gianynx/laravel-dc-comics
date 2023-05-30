@extends('layouts.app')

@section('page_title')
    {{ $comic['series'] }}
@endsection

@section('content')
    <section class="card_container">
        <div class="row pt-5 pb-5">
            <div class="col-12 mt-4 mb-4">
                <div class="card text-center mx-auto w-50">
                    <div class="card-body">
                        <div class="card-image">
                            <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <div class="card-title text-center pt-3">
                            <h1 class="text-uppercase fw-bold">{{ $comic['series'] }}</h1>
                            <h3>{{ $comic['title'] }}</h3>
                            <p>{{ $comic['description'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center py-3 mt-3">
                <a href="{{ route('comics.edit', ['comic' => $comic]) }}"
                    class="btn btn-primary rounded-0 text-white fw-bold text-uppercase px-5">
                    edit this comic
                </a>
            </div>
        </div>
    </section>
@endsection
