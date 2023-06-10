@extends('layouts.admin')

@section('content')
    <h3>{{ $project->title }}</h3>

    <div> {{ $project->slug }}</div>

    @if ($project->type)
        <div>
            {{ $project->type->name }}
        </div>
    @else
        <h3>nessuna categoria selezionata</h3>
    @endif
@endsection
