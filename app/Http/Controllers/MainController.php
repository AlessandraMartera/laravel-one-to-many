<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class MainController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view("home", compact('projects'));
    }

    public function show($id){
        $project = Project::findOrFail($id);
        return view("dashboard",compact('project'));
    }
}
