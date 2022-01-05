<?php

namespace App\Http\Controllers;

use App\task;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TaskController extends Controller
{
    public function index(Request $request){
        $tasks = task::all();
        return view('index',["tasks" => $tasks]);
    }

    public function create(Request $request){
        
        $task = new task;
        $task->uuid = Str::uuid();
        $task->comment = $request->comment; 
        $task->save();
        return redirect('task/index');
    }
}
