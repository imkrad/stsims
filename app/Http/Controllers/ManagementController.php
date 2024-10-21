<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Services\Management\QualifierClass;
use App\Services\Management\CampusClass;
use App\Services\Management\SchoolClass;
use App\Services\Management\CourseClass;
use App\Services\Management\ScholarClass;
use App\Services\Management\ProspectusClass;
use App\Http\Requests\ManagementRequest;
use App\Services\Management\CertificationClass;

class ManagementController extends Controller
{
    use HandlesTransaction;

    public function __construct(
        ScholarClass $scholar, 
        QualifierClass $qualifier, 
        ProspectusClass $prospectus, 
        SchoolClass $school, 
        CourseClass $course, 
        CertificationClass $certification,
        CampusClass $campus,
        DropdownClass $dropdown
    ){
        $this->scholar = $scholar;
        $this->qualifier = $qualifier;
        $this->school = $school;
        $this->prospectus = $prospectus;
        $this->course = $course;
        $this->campus = $campus;
        $this->dropdown = $dropdown;
        $this->certification = $certification;
    }

    public function index(Request $request){
        switch($request->option){
            case 'qualifiers':
                return $this->qualifier->lists($request);
            break;
            case 'scholars':
                return $this->scholar->lists($request);
            break;
            case 'courses':
                return $this->course->lists($request);
            break;
            case 'campuses':
                return $this->campus->lists($request);
            break;
            case 'schools':
                return $this->school->lists($request);
            break;
            case 'scholar-preview':
                return $this->scholar->preview($request);
            break;
            default:
                return inertia('Modules/Management/Dashboard/Index'); 
        }   
    }

    public function store(ManagementRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'school':
                    return $this->school->save($request);
                break;
                case 'campus':
                    return $this->campus->save($request);
                break;
                case 'campus-course':
                    return $this->campus->course($request);
                break;
                case 'campus-course-certification':
                    return $this->campus->certification($request);
                break;
                case 'campus-semester':
                    return $this->campus->semester($request);
                break;
                case 'campus-grading':
                    return $this->campus->grading($request);
                break;
                case 'campus-name':
                    return $this->campus->name($request);
                break;
                case 'truncate':
                    return $this->scholar->truncate();
                break;
                case 'prospectus':
                    return $this->prospectus->save($request,$this->dropdown->levels(),$this->dropdown->semesters($request->term));
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

    public function update(Request $request){
        if($request->type == 'subjects'){
            $validatedData = $request->validate([
                'is_completed' => 'required',
            ]);
        }
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'campus':
                    return $this->campus->update($request);
                break;
                case 'campus-course':
                    return $this->campus->courseUpdate($request);
                break;
                case 'campus-grading':
                    return $this->campus->gradingUpdate($request);
                break;
                case 'prospectus':
                    return $this->prospectus->update($request);
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

    public function show($code, Request $request){
        switch($code){
            case 'scholars':
                if($request->code){
                    return inertia('Modules/Management/Scholars/Profile/Index',[
                        'scholar' => $this->scholar->view($request)
                    ]);
                }else{
                    return inertia('Modules/Management/Scholars/Index',[
                        'dropdowns' => [
                            'statuses' => $this->dropdown->statuses(),
                        ]
                    ]);
                }
            break;
            case 'qualifiers':
                if($request->code){
                    return inertia('Modules/Management/Scholars/Profile/Index',[
                        'scholar' => $this->scholar->view($request)
                    ]);
                }else{
                    return inertia('Modules/Management/Qualifiers/Index',[
                        'dropdowns' => [
                            'statuses' => $this->dropdown->qualifier_statuses(),
                        ]
                    ]);
                }
            break;
            case 'schools':
                return inertia('Modules/Management/Schools/Index',[
                    'dropdowns' => [
                        'classes' => $this->dropdown->classes(),
                    ]
                ]);
            break;
            case 'school-view':
                return inertia('Modules/Management/Schools/View',[
                    'school' => $this->school->view($request),
                    'notes' => $this->school->notes(),
                    'dropdowns' => [
                        'gradings' => $this->dropdown->gradings(),
                        'terms' => $this->dropdown->terms(),
                        'regions' => $this->dropdown->regions(),
                        'agencies' => $this->dropdown->agencies()
                    ]
                ]);
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
            case 'campuses':
                return inertia('Modules/Management/Campuses/Index',[
                    'dropdowns' => [
                        'gradings' => $this->dropdown->gradings(),
                        'terms' => $this->dropdown->terms(),
                        'regions' => $this->dropdown->regions(),
                        'agencies' => $this->dropdown->agencies()
                    ]
                ]);
            break;
            case 'campus-view':
                return inertia('Modules/Management/Campuses/View',[
                    'campus' => $this->campus->view($request),
                    'dropdowns' => [
                        'certifications' => $this->dropdown->certifications(),
                        'terms' => $this->dropdown->term_types(),
                    ]
                ]);
            break;
            case 'courses':
                return inertia('Modules/Management/Courses/Index');
            break;
            case 'course-view':
                return inertia('Modules/Management/Courses/View',[
                    'course' => $this->course->view($request),
                    'code' => $request->campus,
                    'dropdowns' => [
                        'terms' => $this->dropdown->term_types(),
                    ]
                ]);
            break;
        }
    }
}
