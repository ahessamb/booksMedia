@extends('layouts.app')

@section('title')
    Books index
@endsection
@section('content')
    @foreach($books as $book)
        {{$book->name}} : {{$book->ISBN}} {{$book->pages}} {{$book->price}} {{$book->published_at}}
        <br>
    @endforeach
    <h2>
        <link   href="{{}}">
    </h2>
@endsection

