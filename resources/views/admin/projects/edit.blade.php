@extends('layouts.admin')

@section('content')
    @include('partials.errors')
    <h2>Modifica progetto {{ $project->title }}</h2>
    <form method="POST" action="{{ route('admin.projects.update', $project->slug) }}">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col">
                <label for="title"><strong>Titolo</strong></label>
                <input type="text" class="form-control" placeholder="Titolo" id="title" name="title"
                    value="{{ old('title', $project->title) }}">
            </div>
            <div>
                <label for="type"><strong>Tipologia</strong></label>
                <select class="form-select" id="type" name="category_id" aria-label="Default select example">
                    <option value=""></option>
                    @foreach ($types as $type)
                        <option @selected($type->id == old('type_id', $project->type?->id)) value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach


                </select>
            </div>
            <div class="col">
                <label for="number"><strong>Numero</strong></label>
                <input type="text" class="form-control" placeholder="Numero" id="number" name="number"
                    value="{{ old('number', $project->number) }}">
            </div>
            <div>
                <div class="form-group mt-3">
                    <label for="technologies"><strong>Technologies</strong></label>
                    @foreach ($technologies as $technology)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="technologies[]"
                                id="technology{{ $technology->id }}" value="{{ $technology->id }}"
                                {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                            <label class="form-check-label"
                                for="technology{{ $technology->id }}">{{ $technology->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
@endsection
