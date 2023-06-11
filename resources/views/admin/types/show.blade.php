@extends('layouts.admin')

@section('content')
    <h2>Tipologia: {{ $type->name }}</h2>
    <ul>
        @forelse ($type->project as $project)
            <li>
                <a href="{{ route('admin.projects.show', $project->slug) }}">
                    {{ $project->title }}
                </a>
            </li>
        @empty
            <li>Nessun project presente</li>
        @endforelse
    </ul>
@endsection
