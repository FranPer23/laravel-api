@extends('layouts.admin')

@section('content')
    <h2>Questo testo si trova in show.blade.php. </h2>
    <h3>{{ $project->title }}</h3>
    <div> {{ $project->slug }}</div>
    <div> <strong>{{ $project->number }}</strong></div>
@endsection
