<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Task;
=======
>>>>>>> f61b16ef925d7fa9354eb7affd64aa2f350ec37b

class TaskController extends Controller
{
    //
    public function index()
    {
<<<<<<< HEAD
        //테스트 모든 모델을 불러옴.
        $tasks = Task::all();
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
        //index.blade.php와 layout.blade.php사용을하며 url/tasks에서 부름.
=======
        return view('tasks.index');
>>>>>>> f61b16ef925d7fa9354eb7affd64aa2f350ec37b
    }

    public function create()
    {
        return view('tasks.create');
    }
<<<<<<< HEAD
    
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
=======

    // public function {

    // }
>>>>>>> f61b16ef925d7fa9354eb7affd64aa2f350ec37b
}
