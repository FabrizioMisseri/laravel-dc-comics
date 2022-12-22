@extends('layout.app')

@section('content')
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-7 mb-5">
                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="title">title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>

                        <div class="mb-2">
                            <label for="thumb">img</label>
                            <input type="text" class="form-control" id="thumb" name="thumb">
                        </div>

                        <div class="mb-2">
                            <label for="series">series</label>
                            <input type="text" class="form-control" id="series" name="series">
                        </div>

                        <div class="mb-2">
                            <label for="sale_date">sale date</label>
                            <input type="text" class="form-control" id="sale_date" name="sale_date">
                        </div>

                        <div class="mb-2">
                            <label for="type">type</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>

                        <div class="mb-2">
                            <label for="description">description</label>
                            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                        </div>

                        <button class="btn btn-success" type="submit">push</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
