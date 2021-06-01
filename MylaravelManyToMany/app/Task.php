<?php

namespace App;
use App\Employee;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  //many to many
  public function employees(){
    return $this -> belongsToMany(Employee::class);
  }
}
