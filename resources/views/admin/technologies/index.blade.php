@extends('layouts.admin')
@section('content')
    <div class="container mt-3">
        <ul class="list-group">
            @foreach ($technologies as $technology)
                <li class="list-group-item">{{ $technology->name }}</li>
            @endforeach

        </ul>
    </div>
@endsection
