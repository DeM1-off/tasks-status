<?php

namespace App\Service\Task;

interface TaskServiceInterface
{
    public function index();
    public function store($date);
    public function show($id);
    public function update($date,$id);
    public function edit($id);
}
