@extends('layouts.admin')
@section('content')
    <h2>Questo testo si trova in create</h2>
    <h3>quindi qua creo un nuovo progetto</h3>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="title">Titolo progetto</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome progetto"
                    value="{{ old('title') }}>
                

            </div>
            <div class="col">
                <label for="number">Numero</label>
                <input type="text" class="form-control" id="number" name="number" placeholder="Numero progetto"
                    {{ old('number') }}>


            </div>
        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
@endsection
