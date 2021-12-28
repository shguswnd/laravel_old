@extends('layout')

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

@endsection

