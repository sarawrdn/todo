<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        //Query to retrieve all database list
        $tasks = Task::all();

        /*
        |--------------------------------------------------------------------------
        | Render [view/tasks/index.blade.php] as its User Interface
        | Data : tasks
        |--------------------------------------------------------------------------
        */
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        // Render [view/tasks/create.blade.php] as its User Interface
        return view('tasks.create');
    }

    // Pass data from user to store in Model
    public function store (Request $request)
    {
        // store in database 
        $task = Task::create($request->all());

        // Go to route '/tasks'
        return redirect()->route('task.index');
    }

    // Hold data from one task
    public function show(Task $task)
    {
        // Render [view/tasks/show.blade.php] as its User Interface and pass data
        return view('tasks.show', compact ('task'));
    }

    public function edit (Task $task)
    {
        // Render [view/tasks/show.blade.php] as its User Interface and pass data
        return view('tasks.edit', compact ('task'));
    }

    // Hold data from one task and pass data from user
    public function update (Request $request,Task $task)
    {
        //update task
        $task->update($request->all());
        
        // Go to route '/tasks'
        return redirect()->route('task.index');
    }


    public function destroy (Task $task)
    {
        //delete from database
        $task->delete();

        //go to route '/tasks'
        return redirect()->route('task.index');
    }
}
