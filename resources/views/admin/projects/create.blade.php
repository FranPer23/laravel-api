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
            {{-- <div>
                <label for="technology">Tech</label>
                <select class="form-select" id="technology" name="technology_id" aria-label="Default select example">
                    <option value=""></option>
                    @foreach ($technologies as $technology)
                        <option @selected(old('technology_id') == $technology->id) value="{{ $technology->id }}">{{ $technology->name }}</option>
                    @endforeach


                </select>
            </div> --}}


        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
@endsection
