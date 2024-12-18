<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DropdownClass;

class DashboardController extends Controller
{
    public function __construct(DropdownClass $dropdown){
        $this->dropdown = $dropdown;
    }

    public function prospectus(){
        return inertia('Prospectus');
    }

    public function index(Request $request){
        if(!\Auth::check()){
            return inertia('Auth/Login');
        }else{
            if(\Auth::user()->role === 'Administrator'){
                return inertia('Modules/Executive/Dashboard/Index');
            }else{
                return inertia('Modules/Operation/Dashboard/Index');
            }
        }
    }

    public function search(Request $request){
        $option = $request->option;
        switch($option){
            case 'provinces':
                return $this->dropdown->provinces($request->code);
            break;
            case 'municipalities':
                return $this->dropdown->municipalities($request->code);
            break;
            case 'barangays':
                return $this->dropdown->barangays($request->code);
            break;
            case 'courses':
                return $this->dropdown->courses($request->code);
            break;
            case 'schools':
                return $this->dropdown->schools($request->code,$request->agency);
            break;
            case 'schoolcourses':
                return $this->dropdown->schoolcourses($request->code);
            break;
            case 'years':
                return $this->dropdown->years($request->code);
            break;
        }
    }
}
