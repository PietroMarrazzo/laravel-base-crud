@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Class {{ $classrooms->id }} ({{ $classrooms->name }}) details</h1>
    </div>
    
    <div class="container">
        <p>{{ $classrooms->description }}</p>
    </div>
@endsection