@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Nuovo tipo di pasta</h1>
        <div class="row col-8 offset-2 pt-5">
            <form action="{{ route('pastas.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="title" class="form-label">Nome prodotto</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea  id="description" name="description" class="form-control" rows="6"></textarea>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">tipo</label>
                    <select  id="type" name="type" class="form-control">
                        <option value="lunga">lunga</option>
                        <option value="corta">corta</option>
                        <option value="lunghissima">lunghissima</option>
                        <option value="cortissima">cortissima</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="text" id="image" name="image" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="weight" class="form-label">Peso</label>
                    <input type="text" id="weight" name="weight" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="cooking_time" class="form-label">Tempo di cottura</label>
                    <input type="text" id="cooking_time" name="cooking_time" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary ">Reset</button>

            </form>

        </div>
    </div>
@endsection
