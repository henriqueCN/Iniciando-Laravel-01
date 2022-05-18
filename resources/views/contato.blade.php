@extends('layouts.main')

@section('title', 'Contato')

@section('content')
    
    @foreach ($lista as $item)
        <p>O nome é {{$item}} e o índice é {{$loop->index}}</p>
    @endforeach
    
@endsection