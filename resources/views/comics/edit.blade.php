@extends('layouts.app')

@section('page_title')
    Form
@endsection

@section('content')
    <section class="container pt-5 pb-5">
        <h1 class="pb-4">Edit this comic: {{ $comic['series'] }}</h1>
        <form action="{{ route('comics.update', ['comic' => $comic]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelp" value="{{ $comic['title'] }}">
                <div id="titleHelp" class="form-text">Insert a title!</div>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <div>
                    <textarea name="description" id="description" cols="170" rows="7" placeholder="Insert a description!"
                        value="{{ $comic['description'] }}">
                    </textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb URL</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" aria-describedby="thumbHelp" value="{{ $comic['thumb'] }}">
                <div id="thumbHelp" class="form-text">Insert a thumb URL!</div>
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="priceHelp" value="{{ $comic['price'] }}">
                <div id="priceHelp" class="form-text">Insert a price!</div>
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="seriesHelp" value="{{ $comic['series'] }}">
                <div id="seriesHelp" class="form-text">Insert a series!</div>
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelp"
                    value="{{ $comic['sale_date'] }}" required>
                <div id="sale_dateHelp" class="form-text">Insert a sale date!</div>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="typeHelp" value="{{ $comic['type'] }}">
                <div id="typeHelp" class="form-text">Insert a type!</div>
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>
        </form>
    </section>
@endsection
