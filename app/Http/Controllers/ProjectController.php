<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // return view('projects.index');
        $projects = \App\Models\Project::all();
        //프로젝트에 있는거를 전부 보내줘
        return view('projects.index',[
            'projects' => $projects
        ]);
    }
}
