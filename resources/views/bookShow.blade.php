
@extends('layouts.app')

@section('title')
    Book : {{$book->id}}
@endsection
@section('content')
<h3>
    {{$book->name}} : {{$book->ISBN}} {{$book->pages}} {{$book->price}} {{$book->published_at}}
</h3>
@endsection
