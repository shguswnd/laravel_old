<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        //테스트 모든 모델을 불러옴.
        $tasks = Task::all();
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
        //index.blade.php와 layout.blade.php사용을하며 url/tasks에서 부름.
    }

    public function create()
    {
        return view('tasks.create');
    }
    
    public function store(Request $request)
    {  
        // DB값을 넣을꺼임.
        //태스트를 생성해주고 타이블 바디를 생성해준다.
        //리퀘스트에 값들을 받아옴.
        $task = Task::create([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]);

        return redirect('/tasks/'.$task->id);
    }
    public function show(Task $task)
    {

        return view('tasks.show', [
            'task' => $task
        ]);
    }
}
