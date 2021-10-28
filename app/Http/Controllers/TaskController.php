<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        // return view('tasks.index', [
        //     'tasks' => DB::table('tasks')->orderBy('id', 'desc')->get(),
        // ]);
        return view('tasks.index', [
            'task' => new Task,
            'submit' => 'Create',
            'tasks' => Task::latest()->get(),
        ]);
    }

    public function store(TaskRequest $request)
    {
        // $request->validate([

        // ]);
        // DB::table('tasks')->insert([
        //     'list' => $request->list,
        // ]);
        Task::create($request->all());
        return back();
    }

    public function edit(Task $task)
    {
        // $task = DB::table('tasks')->where('id', $id)->first();
        // $task = Task::findOrFail($id);
        return view('tasks.edit', [
            'task' => $task,
            'submit' => 'Update',
        ]);
    }

    public function update(TaskRequest $request, Task $task)
    {
        // DB::table('tasks')->where('id', $id)->update(['list' => $request->list]);
        // Task::findOrFail($id)->update($request->all());
        $task->update($request->all());
        return redirect('tasks');
    }

    public function destroy(Task $task)
    {
        // DB::table('tasks')->where('id', $id)->delete();
        // Task::findOrFail($id)->delete();
        $task->delete();
        return back();
    }
}
