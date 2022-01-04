@extends('layout')

@section('title')
    Tasks
@endsection

@section('content')
<div class="px-12">
    <h1 class="font-bold border-red-300">Edit List</h1>
    <h1 class="border-red-700">Tasks List</h1>

    <form action="/tasks/{{$task->id}}" method ="POST">
        @method('PUT')
        @csrf
        <label class="block" id ="red-700" for="title">Title</label>
        <input class="border w-full" id ="red-700" type="text" name="title" id="title"
        value="{{$task->title}}"><br>
                    
        <label class="block" for="body">Body</label>
        <textarea class="border-red-700 w-full" name="body" id="body" cols="30" rows="10">{{$task->body}}</textarea><br>
        <button class="bg-red-100 text-white px-4 py-3 float-left">Submit</button>
    </form>
    </div>
<!-- 한줄오만들어도됨. -->
@section('title', 'Create Task')


@section('content')
    <h1 class="font-bold">Create Task</h1>
@endsection

