<?php

namespace App\Http\Controllers\Operation;

use App\Services\DropdownClass;
use App\Http\Controllers\Controller;
use App\Traits\HandlesTransaction;
use App\Services\Operation\School\SaveClass;
use App\Services\Operation\School\ViewClass;
use Illuminate\Http\Request;

class SchoolController extends Controller
{ 
    use HandlesTransaction;

    public function __construct(SaveClass $save, ViewClass $view, DropdownClass $dropdown){
        $this->view = $view;
        $this->save = $save;
        $this->dropdown = $dropdown;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->view->lists($request);
            break;
            case 'active-semester':
                return $this->view->activeSemester($request);
            break;
            default:
                return inertia('Modules/Operation/Schools/Index',[
                    'dropdowns' => [
                        'gradings' => $this->dropdown->gradings(),
                        'terms' => $this->dropdown->terms(),
                        'regions' => $this->dropdown->regions(),
                        'agencies' => $this->dropdown->agencies()
                    ]
                ]); 
        }   
    }  

    public function show($code,Request $request){
        if($request->course){
            return inertia('Modules/Operation/Schools/Components/Course/View',[
                'course' => $this->view->course($request->course),
                'code' => $code,
                'dropdowns' => [
                    'terms' => $this->dropdown->term_types(),
                ]
            ]);
        }else{
            return inertia('Modules/Operation/Schools/View',[
                'campus' => $this->view->view($code),
                'counts' => $this->view->counts($code),
                'statuses' => $this->view->statuses($code),
                'dropdowns' => [
                    'certifications' => $this->dropdown->certifications(),
                    'terms' => $this->dropdown->term_types(),
                ]
            ]);
        }
    }
}
