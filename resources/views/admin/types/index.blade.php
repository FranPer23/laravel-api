@extends('layouts.admin')
@section('content')
    <div class="container mt-3">
        <ul class="list-group">
            @foreach ($types as $type)
                <li class="list-group-item">{{ $type->name }}</li>
            @endforeach


        </ul>
    </div>
@endsection
