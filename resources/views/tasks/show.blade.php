@extends('layout')

@section('title', 'Task detail')


@section('content')
<div class="px-12 mt-5">
    <div class="flex">
    <h1 class="font-bold border-red-300 flex-1">Tasks</h1>
    <div class="flex-initial">
    <a href="/tasks/{{ $task->id }}/edit">
        <button class="flex-initial bg-gray-200 px-2 py-2">Edit</button>
    </a>
    <form method="POST" action="/tasks/{{$task->id}}">
    @method('DELETE')    
    @csrf
        <button class="flex-initial bg-gray-200 px-2 py-2">Delete</button>
    </form>


    

    </div>
</div>
    
        {{$task}}
        Title: {{$task->title}} <small class="float-right">Create at
            {{$task->created_at}}</small><br>
        Body
        <div class="border">{{ $task->body }}</div>
    </div>
@endsection

