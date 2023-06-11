@extends('layouts.admin')
@section('content')
    <h2>Creo un nuovo progetto</h2>

    @include('partials.errors')
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="title">Titolo progetto</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome progetto">
            </div>
            <div>
                <label for="type">Tipologia</label>
                <select class="form-select" id="type" name="category_id" aria-label="Default select example">
                    <option value=""></option>
                    @foreach ($types as $type)
                        <option @selected(old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach


                </select>
            </div>


            <div class="col">
                <label for="number">Numero</label>
                <input type="text" class="form-control" id="number" name="number" placeholder="Numero progetto">

            </div>
            <div class="form-group">
                <label for="technologies">Technologies</label>
                @foreach ($technologies as $technology)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="technologies[]"
                            id="technology{{ $technology->id }}" value="{{ $technology->id }}"
                            {{ in_array($technology->id, $project->technologies->pluck('id')->toArray()) ? 'checked' : '' }}>
                        <label class="form-check-label"
                            for="technology{{ $technology->id }}">{{ $technology->name }}</label>
                    </div>
                @endforeach
            </div>


        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
@endsection
