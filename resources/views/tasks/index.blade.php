@extends('layout')

<<<<<<< HEAD
<!-- 한줄오만들어도됨. -->
@section('title', 'Create Task')


@section('content')
<div class="px-64">
    <h1 class="font-bold">Create Task</h1>
    <ul>
        @foreach($tasks as $task)
            <a href="/tasks/{{$task->id}}">
            <li class="border m-3 p-3">TItle : {{$task->title}} 
            <small class="float-right"> Create at : </small> {{$task->created_at}}</li>
            </a>
        @endforeach
    </ul>
</div>
=======
@section('title')
    Tasks
@endsection

@section('content')
    <h1 class="font-bold border-red-300">Tasks List</h1>
    <h1 class="border-red-700">Tasks List</h1>

    <form action="/tasks" method ="POST">
        <label class="block" id ="red-700" for="title">Title</label>
        <input class="border" id ="red-700" type="text" name="title" id="title"><br>
        
        <label class="block" for="body">Body</label>
        <textarea class="border-red-700" name="body" id="body" cols="30" rows="10"></textarea><br>
        <button class="bg-red-100">Submit</button>
    </form>

>>>>>>> f61b16ef925d7fa9354eb7affd64aa2f350ec37b
@endsection

