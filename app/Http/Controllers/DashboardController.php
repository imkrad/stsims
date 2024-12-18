<?php

namespace App\Http\Controllers;

use Hashids\Hashids;
use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Services\Operation\School\ViewClass as UniversityClass;

class DashboardController extends Controller
{
    public function __construct(DropdownClass $dropdown, UniversityClass $university,){
        $this->dropdown = $dropdown;
        $this->university = $university;
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
                if(\Auth::user()->myrole->role->name == 'University Coordinator'){
                    $code = \Auth::user()->myrole->roleable_id;
                    $hashids = new Hashids('krad',10);
                    $code = $hashids->encode($code);
                    return inertia('Modules/Operation/Dashboard/University/Index',[
                        'campus' => $this->university->view($code),
                        'counts' => $this->university->counts($code),
                        'statuses' => $this->university->statuses($code),
                        'dropdowns' => [
                            'certifications' => $this->dropdown->certifications(),
                            'terms' => $this->dropdown->term_types(),
                        ]
                    ]);
                }else{
                    return inertia('Modules/Operation/Dashboard/Index');
                }
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
