<?php

namespace App\Http\Controllers;

use App\Task;
use Validator;
use App\Http\Requests\RequestTasks;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TaskController extends Controller
{    
    public function index()
    {       
    }
    
    public function create()
    {
        $tasks = Task::orderBy('created_at')->get();

        return view('tasks', compact('tasks'));   
    }
    
    public function store(RequestTasks $request)
    {       
        try {
            Task::create($request->all());

            return redirect()->action('TaskController@create');
        } catch (Exception $e) {
            return trans('message.error');
        }
    }
    
    public function show($id)
    {        
    }
   
    public function edit($id)
    {       
    }
    
    public function update(Request $request, $id)
    {        
    }
    
    public function destroy($task)
    {
        try {
        $result = Task::findOrFail($task);
        $result->delete();
        } catch (ModelNotFoundException $exception) {
            return trans('message.notexist') . $task;
        }
                    
        return redirect()->action('TaskController@create');
    }
}
