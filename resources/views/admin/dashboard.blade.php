@extends('layouts.admin')

@section('content')
    <h1>Ciao {{ Auth::user()->name }} questa è la tua Dashboard</h1>
@endsection
