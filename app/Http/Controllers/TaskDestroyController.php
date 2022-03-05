<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class TaskDestroyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Task $task
     * @return Application|RedirectResponse|Redirector
     */
    public function __invoke(Task $task)
    {
        $task->delete();

        return redirect('/');
    }
}
