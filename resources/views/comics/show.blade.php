@extends('layout.app')

@section('content')
    <section>
        <div class="container">
            <h2>Comic {{ $comic->id }}</h2>
            <div class="mt-4">
                <img class="w-25" src="{{ $comic->thumb }}" alt="">
            </div>
            <dl>
                <dt>Title</dt>
                <dd>{{ $comic->title }}</dd>
                <dt>Series</dt>
                <dd>{{ $comic->series }}</dd>
                <dt>Sale date</dt>
                <dd>{{ $comic->sale_date }}</dd>
                <dt>Type</dt>
                <dd>{{ $comic->type }}</dd>
            </dl>
            <p> {{ $comic->description }} </p>
        </div>
    </section>
@endsection
