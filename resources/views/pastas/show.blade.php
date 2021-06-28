@extends('layouts.main')

@section('content')
    <section class="container">

        <div>
            <h1>{{ $pasta->title }}</h1>
        </div>

        <div class="my-3">
            <span class="badge bg-primary">{{ $pasta->type }}</span>
            {{ $pasta->cooking_time }}
        </div>

        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ $pasta->image }}" alt="{{ $pasta->title }}">
            </div>
            <div class="col-md-6">
                <p>{!! $pasta->description !!}</p>
                <p class="mt-3">
                    <a href="{{ route('pastas.index') }}"><< back</a>
                </p>
            </div>
        </div>

    </section>


@endsection
