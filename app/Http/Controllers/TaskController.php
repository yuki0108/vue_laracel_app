<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();

        return $tasks;
    }

    public function show(Task $task) {
        // $task = [
        //     'task' => $task
        // ];

        return $task;
    }

    public function store(Request $request) {
        $task = Task::create([
            'title' => $request->title,
            'content' => $request->content,
            'person_in_charge' => $request->person_in_charge
        ]);

        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        return $task;
    }

    public function destroy(Task $task) {
        $task->delete();

        return $task;
    }
}