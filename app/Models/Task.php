<?php

namespace App\Models;


use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
      'title',
      'description',
      'status',
      'deadline',
      'user_id'
    ];
}
