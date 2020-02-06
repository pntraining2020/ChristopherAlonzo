<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkDetails extends Model
{
    protected $table = "workdetails";
    protected $fillable = [
        'employeeId',
        'timeIn',
        'timeOut',
        'totalTimeWorked',
        'totalBreakUsed',
    ];
}
