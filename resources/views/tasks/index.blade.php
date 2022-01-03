@extends('layout')

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
@endsection

