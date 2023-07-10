<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnum;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use App\Service\Task\TaskServiceInterface;

class TaskController extends Controller
{


    /**
     * @param  \App\Service\Task\TaskServiceInterface  $service
     */
    public function __construct( private TaskServiceInterface  $service)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tasks.index', [
            'users'=> $this->service->index()
          ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create' ,[
          'status'=> StatusEnum::toValues()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        $this->service->store($request->all());
        return redirect('task');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('tasks.show', [
          'task'=> $this->service->show($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('tasks.edit', [
          'task'=> $this->service->edit($id),
          'status'=> StatusEnum::toValues()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, string $id)
    {
        $this->service->update($request->all(),$id);
        return redirect('task.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('task');
    }
}
