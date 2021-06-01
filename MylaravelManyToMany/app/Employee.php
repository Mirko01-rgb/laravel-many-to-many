<?php

namespace App;
use App\Location;
use App\Task;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  protected $fillable = [
    'firstname',
    'lastname',
    'location_id',
  ];

  //one to many
  public function location(){
    return $this -> belongsTo(Location::class);
  }

 //many to many
  public function tasks(){
    return $this -> belongsToMany(Task::class);
  }
}
