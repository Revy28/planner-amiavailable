<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Shifts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function index(){
        $shifts = Shifts::where('user_id', Auth::id());

        return view('pages.employee.home')->with('shifts', $shifts);
    }

}
