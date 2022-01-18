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
        // $tasks = Task::all();
        //정렬순서 변경.
        $tasks = Task::orderBy('created_at','desc')->get();
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
        //index.blade.php와 layout.blade.php사용을하며 url/tasks에서 부름.
        return view('tasks.index');
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

    public function edit(Task $task){
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    public function update(Task $task)
    {
        //라라벨은 리퀘스트를 매개변수 대신 아래와 같이 만들 수 있음.
        $task->update([
            'title' => request('title'),
            'body' => request('body')
        ]);
        return redirect('/tasks/'.$task->id);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/tasks');
    }
}
