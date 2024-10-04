<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Services\Management\SchoolClass;
use App\Services\Management\CourseClass;
use App\Services\Management\CertificationClass;

class ManagementController extends Controller
{
    use HandlesTransaction;

    public function __construct(SchoolClass $school, CourseClass $course, CertificationClass $certification,DropdownClass $dropdown){
        $this->school = $school;
        $this->course = $course;
        $this->dropdown = $dropdown;
        $this->certification = $certification;
    }

    public function index(Request $request){
        switch($request->option){
            case 'courses':
                return $this->course->lists($request);
            break;
            default:
                return inertia('Modules/Management/Dashboard/Index'); 
        }   
    }

    public function update(Request $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'course':
                    return $this->course->update($request);
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

    public function show($code){
        switch($code){
            case 'schools':
                return inertia('Modules/Management/Schools/Index');
            break;
            case 'school-create':
                return inertia('Modules/Management/Schools/Create',[
                    'dropdowns' => [
                        'classes' => $this->dropdown->classes(),
                        'gradings' => $this->dropdown->gradings(),
                        'terms' => $this->dropdown->terms(),
                        'regions' => $this->dropdown->regions(),
                        'agencies' => $this->dropdown->agencies()
                    ]
                ]);
            break;
            case 'courses':
                return inertia('Modules/Management/Courses/Index');
            break;
        }
    }
}
