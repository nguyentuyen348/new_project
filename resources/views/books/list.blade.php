@extends('layouts.master')
@section('title','list books')
@section('content')
    <div>
        <p><a class="btn btn-success btn-lg" href="{{route('books.create')}}">add book</a></p>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">image</th>
            <th scope="col">author</th>
            <th scope="col">category</th>
            <th scope="col">price</th>
            <th scope="col">description</th>
            <th scope="col">action</th>
        </tr>
        </thead>

        @foreach($books as $book)
        <tbody>
        <tr>
            <th scope="row">{{$book->id}}</th>
            <th > {{$book->name}}</th>
            <th ><img src="{{'storage'.$book->image}}" alt="{{'storage'.$book->image}}" style="width: 100px;height: 100px"> </th>
            <th > {{$book->author}}</th>
            <th > {{$book->category}}</th>
            <th > {{$book->price}}</th>
            <th > {{$book->description}}</th>
            <th > <a href="{{route('books.edit',$book)}}" class="btn-warning">edit</a> </th>
            <th > <a href="{{route('books.destroy',$book)}}" class="btn-danger">delete</a> </th>
        </tr>
        </tbody>
        @endforeach
    </table>

    </div>
@endsection
