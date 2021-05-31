<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];

    public function employees() {

        return $this -> belongsTo(Employee::class);
    }
}
