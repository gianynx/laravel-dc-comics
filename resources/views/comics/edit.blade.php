@extends('layouts.app')

@section('page_title')
    Form
@endsection

@section('content')
    <section class="container pt-5 pb-5">
        <h1 class="pb-4">Edit this comic: {{ $comic['series'] }}</h1>
        <form action="{{ route('comics.update', ['comic' => $id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp"
                    value="{{ $comic['title'] }}" required>
                <div id="titleHelp" class="form-text">Insert a title!</div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <div>
                    <textarea name="description" id="description" cols="60" rows="10" placeholder="Insert a description!"
                        value="{{ $comic['description'] }}" required>
                    </textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb URL</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelp"
                    value="{{ $comic['thumb'] }}" required>
                <div id="thumbHelp" class="form-text">Insert a thumb URL!</div>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelp"
                    value="{{ $comic['price'] }}" required>
                <div id="priceHelp" class="form-text">Insert a price!</div>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelp"
                    value="{{ $comic['series'] }}" required>
                <div id="seriesHelp" class="form-text">Insert a series!</div>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelp"
                    value="{{ $comic['sale_date'] }}" required>
                <div id="sale_dateHelp" class="form-text">Insert a sale date!</div>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelp"
                    value="{{ $comic['type'] }}" required>
                <div id="typeHelp" class="form-text">Insert a type!</div>
            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>
        </form>
    </section>
@endsection
