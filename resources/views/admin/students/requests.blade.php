@extends("layouts.admin")

@section("content")
<div class="">
@foreach ($students as $student)
    <h1>{{ $student->name }}</h1>
    <p>{{ $student->formation->name }}</p>
@endforeach
    
</div>
@endsection