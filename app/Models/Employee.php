<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
    ];

    // protected $table = 'workdetails';

    public function details() {
        return $this->hasMany('App\Models\WorkDetails','employeeId', 'id');
    }
}
