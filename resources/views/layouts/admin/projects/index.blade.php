@extends('layouts.admin')
@section('content')
    <h1>Questo testo si trova in index.blade.php</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Numero</th>
                    {{-- <th scope="col">Slug</th> --}}

                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->title }}</th>
                        <td>{{ $project->number }}</td>
                        {{-- <td>{{ }}</td> --}}

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
