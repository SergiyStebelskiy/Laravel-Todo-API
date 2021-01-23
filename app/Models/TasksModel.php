<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TasksModel extends Model
{
    protected $table = "tasks";
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'status'];
}
