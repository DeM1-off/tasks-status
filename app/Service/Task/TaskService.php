<?php

namespace App\Service\Task;

use App\Models\Task;
use App\Models\User;

class TaskService implements TaskServiceInterface
{

    /**
     * @return \App\Models\User|\App\Models\User[]|\LaravelIdea\Helper\App\Models\_IH_User_C|null
     */
    public function index()
    {
      return User::find(\Auth::id());
    }

    /**
     * @param $id
     *
     * @return \App\Models\Task|null
     */
    public function show($id)
    {
       return Task::find($id)->first();
    }

    /**
     * @param $date
     *
     * @return \App\Models\Task
     */
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

    /**
     * @param $date
     * @param $id
     *
     * @return bool
     */
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

    /**
     * @param $id
     *
     * @return \App\Models\Task|null
     */
    public function edit($id)
    {
        return Task::find($id)->first();
    }

}
