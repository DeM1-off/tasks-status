<?php

namespace App\Service\Task;

use App\Models\Task;
use App\Models\User;

class TaskService implements TaskServiceInterface
{

    public function index()
    {
      return User::find(\Auth::id());
    }

    public function show($id)
    {
       return Task::find($id)->first();
    }

    public function store($date)
    {
        return Task::create([
          'title' =>$date['title'],
          'description' =>$date['description'],
          'status' =>$date['status'],
          'deadline' =>$date['deadline'],
          'user_id' =>\Auth::id(),
        ]);
    }

    public function update($date, $id)
    {
        return Task::where('id', $id)->update([
          'title' =>$date['title'],
          'description' =>$date['description'],
          'status' =>$date['status'],
          'deadline' =>$date['deadline'],
          'user_id' =>\Auth::id(),
        ]);
    }

    public function edit($id)
    {
        return Task::find($id)->first();
    }


}
