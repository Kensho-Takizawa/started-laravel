<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return view('tasks', compact('tasks'));
    }

    public function store(TaskStoreRequest $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    }

    public function destroy(Task $task) {
        $task->delete();

        return redirect('/');
    }
}
