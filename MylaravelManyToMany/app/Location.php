<?php

namespace App;
use App\Employee;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  protected $fillable = [
    'street',
    'state',
  ];

  //one to many
  public function employees(){
    return $this -> hasMany(Employee::class);
  }
}
