@extends('layout.app')

@section('content')
    <div class="container">
        <h2 class="text-center">Edit Comic: {{ $comic->id }}</h2>
        <div class="row justify-content-center">
            <div class="col-7 mb-4">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="title">title</label>
                        <input class="form-control" type="text" id="title" name="title" value="{{ $comic->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb">IMG</label>
                        <input class="form-control" type="text" id="thumb" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date">series</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}">
                    </div>

                    <div class="mb-3">
                        <label for="type">type</label>
                        <input type="text" class="form-control" id="type" name="type"
                            value="{{ $comic->type }}">
                    </div>

                    <div class="mb-3">
                        <label for="description">description</label>
                        <textarea class="form-control" name="description" id="description" rows="10">{{ $comic->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">push</button>
                </form>
            </div>
        </div>

    </div>
@endsection
