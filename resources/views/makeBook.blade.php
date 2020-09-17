@extends('layouts.app')
@section('title')
    Form
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('posted')}}" >

                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{old("name")}}" >
                </div>
                <div class="form-group">
                    <label for="ISBN">ISBN</label>
                    <input type="text" maxlength="10" class="form-control" name="ISBN" id="ISBN" >
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" id="price" >
                </div>
                 <div class="form-group">
                    <label for="pages">Pages</label>
                    <input type="number" class="form-control" name="pages" id="pages" >
                </div>
                <div class="form-group">
                    <label for="published_at">Publish Time</label>
                    <input type="date" class="form-control" name="published_at" id="published_at" >
                </div>
                @include('errors')


                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection
