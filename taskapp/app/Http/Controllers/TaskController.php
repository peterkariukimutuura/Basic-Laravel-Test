<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index() {
        return view('tasks.index');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|unique:tasks',
            'description' => 'required',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
            'completed' => 'required',
        ]);

        $request->user()->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'completed' => $request->completed,
        ]);

        return back();
    }

    public function show () {
        $tasks = Task::get ();

        return view('tasks.show', [
            'tasks' => $tasks
        ]);
    }

    public function destroy (Task $task) {
        
        $task->delete();

        return back();
    }
}
