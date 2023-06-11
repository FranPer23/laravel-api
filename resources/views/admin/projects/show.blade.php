@extends('layouts.admin')

@section('content')
    @include('partials.errors')
    <div class="container">
        <div class="card text-center mt-3">
            <div class="card-header">
                Progetto selezionato
            </div>
            <div class="card-body">
                <h3 class="card-title">{{ $project->title }}</h3>
                <h6 class="card-subtitle mb-2 text-muted"> {{ $project->slug }}</h6>
                @if ($project->type)
                    <p class="card-text">{{ $project->type->name }}</p>
                @else
                    <p class="card-text">nessuna categoria selezionata</p>
                @endif
                @if ($project->technology->isNotEmpty())
                    <p class="card-text">{{ $project->technology->name }}</p>
                @else
                    <p class="card-text">nessuna tecnologia presente</p>
                @endif

            </div>
        </div>


    </div>
@endsection
