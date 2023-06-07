@extends('layouts.admin')

@section('content')
    <h2>Modifica progetto {{ $project->title }}</h2>
    <form action="{{ route('admin.projets.update', $project->slug) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" placeholder="Titolo" id="title" name="title">
            </div>
            <div class="col">
                <label for="number">Numero</label>
                <input type="text" class="form-control" placeholder="Numero" id="number" name="number">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
@endsection
