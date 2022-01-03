@extends('layout')

@section('title', 'Task detail')


@section('content')
<div class="px-12">
    <h1 class="font-bold border-red-300">Tasks</h1>
        {{$task}}
        Title: {{$task->title}} <small class="float-right">Create at
            {{$task->created_at}}</small><br>
        Body
        <div class="border">{{ $task->body }}</div>
    </div>
@endsection

