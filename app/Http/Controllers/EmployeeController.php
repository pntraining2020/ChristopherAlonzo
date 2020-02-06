<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkDetails;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function getEmployees() {
        $employees = Employee::get()->with('details');
        return view('home',['employees'=>$employees]);
    }

    public function clockOut(Request $request) {
        // dd($request->id);
        $details = WorkDetails::create([
            'employeeId'=>$request->id,
            'timeIn'=>$request->timeIn,
            "timeOut"=>$request->timeOut,
            'totalHoursWorked'=>$request->totalHoursWorked,
            'totalBreakUsed'=>$request->totalBreakUsed
        ]);
        return redirect('/')
            ->with('details',$details);
    }
}
