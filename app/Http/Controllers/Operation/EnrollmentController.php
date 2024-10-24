<?php

namespace App\Http\Controllers\Operation;

use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Operation\EnrollmentRequest;
use App\Services\Operation\Enrollment\ViewClass;
use App\Services\Operation\Enrollment\SaveClass;

class EnrollmentController extends Controller
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
            case 'prospectus':
                return $this->view->prospectus($request);
            break;
            default:
                return inertia('Modules/Operation/Enrollments/Index'); 
        }   
    }  

    public function show($code){
        return inertia('Modules/Operation/Enrollments/View/Index',[
            'scholar' => $this->view->scholar($code)
        ]);
    }

    public function store(EnrollmentRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'subcourse':
                    return $this->save->subcourse($request);
                break;
                case 'enrollment':
                    return $this->save->enroll($request);
                break;
                case 'grade':
                    return $this->save->grade($request);
                break;
                case 'lock':
                    return $this->save->lock($request);
                break;
            }
        });

        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }

}
