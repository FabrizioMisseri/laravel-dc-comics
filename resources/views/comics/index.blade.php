@extends('layout/app')

@section('content')
    <div class="text-center">
        <h2 class="my_title-index rounded-4">
            ALL COMICS
        </h2>
    </div>
    <div>
        <div class="container mt-4">
            <div class="text-end mb-4">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Crea un nuovo comic</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">title</th>
                        <th scope="col">series</th>
                        <th scope="col">sale_date</th>
                        <th scope="col">type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->title }}</th>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>

                            <td>
                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success">
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
