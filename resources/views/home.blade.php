@extends('layouts.main_layout')
@section('content')

<div class="class text-center">
    @foreach ($pessoas_linguas as $pessoa => $linguas)

    <h1>{{ $pessoa }}</h1>
    
    @foreach ($linguas as $lingua)
    <p>{{ $lingua }}</p>
    @endforeach

    <hr> @endforeach </div>

@endsection