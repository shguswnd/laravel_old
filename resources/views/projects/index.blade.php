@extends('layout1')

@section('content')
    <!-- project index -->
    <h1>Project List</h1>
    @foreach($projects as $project)
    Title: {{$project->title}}<br>
    Description : {{$project->description}}
    @endforeach
@endsection