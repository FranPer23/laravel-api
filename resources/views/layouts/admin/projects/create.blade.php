@extends('layouts.admin')
@section('content')
    <h2>Questo testo si trova in create</h2>
    <h3>quindi qua creo un nuovo progetto</h3>
    <form>
        <div class="row">
            <div class="col">
                <label for="title">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome progetto">
                </label>

            </div>
            <div class="col">
                <label for="number">
                    <input type="text" class="form-control" id="number" name="number" placeholder="Numero progetto">
                </label>

            </div>
        </div>
    </form>
@endsection
