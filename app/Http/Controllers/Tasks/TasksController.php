<?php

namespace App\Http\Controllers\Tasks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TasksModel;

class TasksController extends Controller
{
    public function tasks() {
        return response()->json(TasksModel::get(), 200);
    }
    public function taskById($id) {
        return response()->json(TasksModel::find($id), 200);
    }
    public function createTask(Request $req) {
        $task = TasksModel::create($req->all());
        return response()->json($task, 201);
    }
    public function editTask(Request $req, TasksModel $task) {
        $task->update($req->all());
        return response()->json($task, 200);
    }
    public function deleteTask(Request $req, TasksModel $task) {
        $task->delete();
        return response()->json('success', 200);
    }
}
