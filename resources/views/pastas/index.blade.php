@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Le nostre paste</h1>
        <section class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pastas as $pasta)
                        <tr>
                            <td>{{ $pasta->id }}</td>
                            <td>{{ $pasta->title }}</td>
                            <td>{{ $pasta->type }}</td>
                            <td>
                                <a href="{{ route('pastas.show', $pasta) }}" class="btn btn-success">SHOW</a>
                            </td>
                            <td>EDIT</td>
                            <td>DELETE</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </section>
        <section class="container">
            {{ $pastas->links() }}
        </section>
    </div>
@endsection
