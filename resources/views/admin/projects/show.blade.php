@extends('layouts.admin')

@section('content')
    <h2>Questo testo si trova in show.blade.php. Questo è il testo generato dal faker:{{ $project->title }}</h2>
@endsection
