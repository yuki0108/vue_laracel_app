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
        $task = [
            'task' => $task
        ];

        return $task;
    }
}