<?php

namespace App\Http\Controllers\Operation;

use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Operation\Enrollment\ViewClass;

class EnrollmentController extends Controller
{
    use HandlesTransaction;

    public function __construct(ViewClass $view, DropdownClass $dropdown){
        $this->view = $view;
        $this->dropdown = $dropdown;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->view->lists($request);
            break;
            default:
                return inertia('Modules/Operation/Enrollments/Index',[
                    'dropdowns' => [
                        'gradings' => $this->dropdown->gradings(),
                        'terms' => $this->dropdown->terms(),
                        'regions' => $this->dropdown->regions(),
                        'agencies' => $this->dropdown->agencies()
                    ]
                ]); 
        }   
    }  

    public function show($code){
        return inertia('Modules/Operation/Enrollments/View/Index',[
            'scholar' => $this->view->scholar($code)
        ]);
    }
}
