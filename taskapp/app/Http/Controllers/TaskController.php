<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'due_date' => 'required|date|after_or_equal:today',
            'completed' => 'required|boolean',
        ]);

        $request->user()->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'completed' => $request->completed,
        ]);

        $request->save();

        return back();
    }
}
