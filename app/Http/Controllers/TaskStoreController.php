<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Models\Task;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class TaskStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param TaskStoreRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function __invoke(TaskStoreRequest $request)
    {
        Task::create([
            'name' => $request->name,
        ]);

        return redirect('/');
    }
}
