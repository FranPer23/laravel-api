@extends('layouts.admin')

@section('content')
    <h2>Aggiorna progetto {{ $project->title }}</h2>
    <form action="{{ route('') }}" method="POST">
        @csrf

        <div class="form-row">
            <div class="col">
                <label for="title"></label>
                <input type="text" class="form-control" placeholder="First name" id="title" name="title">
            </div>
            <div class="col">
                <label for="numbers"></label>
                <input type="text" class="form-control" placeholder="Last name" id="number" name="number">
            </div>
        </div>

    </form>
@endsection
