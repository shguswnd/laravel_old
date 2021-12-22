@extends('layout1')

@section('title')
welcome
@endsection


@section('content')
welcome
<ul>
    @foreach($books as $book)
        <li>{{$book}} </li>
    @endforeach
</ul>
@endsection