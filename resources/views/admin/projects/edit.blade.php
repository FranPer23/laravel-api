@extends('layouts.admin')

@section('content')
    @include('partials.errors')
    <h2>Modifica progetto {{ $project->title }}</h2>
    <form method="POST" action="{{ route('admin.projects.update', $project->slug) }}">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" placeholder="Titolo" id="title" name="title"
                    value="{{ old('title', $project->title) }}">
            </div>
            <div>
                <label for="type">Tipologia</label>
                <select class="form-select" id="type" name="category_id" aria-label="Default select example">
                    <option value=""></option>
                    @foreach ($types as $type)
                        <option @selected($type->id == old('type_id', $project->type?->id)) value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach


                </select>
            </div>
            <div class="col">
                <label for="number">Numero</label>
                <input type="text" class="form-control" placeholder="Numero" id="number" name="number"
                    value="{{ old('number', $project->number) }}">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
@endsection
