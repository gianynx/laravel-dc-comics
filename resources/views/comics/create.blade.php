@extends('comics.create')

@section('page_title')
    Form
@endsection

@section('content')
    <section class="container">
        <h1>Insert new product</h1>
        <form>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp">
                <div id="titleHelp" class="form-text">Insert a title!</div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="10">Insert a description!</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelp">
                <div id="thumbHelp" class="form-text">Insert a thumb URL!</div>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelp">
                <div id="priceHelp" class="form-text">Insert a price!</div>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelp">
                <div id="sale_dateHelp" class="form-text">Insert a sale date!</div>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelp">
                <div id="typeHelp" class="form-text">Insert a type!</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </section>
@endsection
