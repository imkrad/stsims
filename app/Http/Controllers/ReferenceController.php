<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Services\Reference\ViewClass;
use App\Services\Reference\SaveClass;
use App\Services\Reference\UpdateClass;

class ReferenceController extends Controller
{
    use HandlesTransaction;

    public function __construct(ViewClass $view, SaveClass $save, UpdateClass $update, DropdownClass $dropdown){
        $this->view = $view;
        $this->save = $save;
        $this->update = $update;
        $this->dropdown = $dropdown;
    }

    public function index(Request $request){
        switch($request->option){
            case 'regions':
                return $this->view->regions($request);
            break;
            case 'provinces':
                return $this->view->provinces($request);
            break;
            case 'municipalities':
                return $this->view->municipalities($request);
            break;
            case 'barangays':
                return $this->view->barangays($request);
            break;
            default:
                return inertia('Modules/References/Dashboard/Index'); 
        }   
    }

    public function show($code){
        switch($code){
            case 'agencies':
                return inertia('Modules/References/Agencies/Index');
            break;
            case 'privileges':
                return inertia('Modules/References/Privileges/Index');
            break;
            case 'programs':
                return inertia('Modules/References/Programs/Index');
            break;
            case 'statuses':
                return inertia('Modules/References/Statuses/Index');
            break;
            case 'regions':
                return inertia('Modules/References/Locations/Regions/Index');
            break;
            case 'provinces':
                return inertia('Modules/References/Locations/Provinces/Index',[
                    'regions' => $this->dropdown->regions()
                ]);
            break;
            case 'municipalities':
                return inertia('Modules/References/Locations/Municipalities/Index',[
                    'regions' => $this->dropdown->regions()
                ]);
            break;
            case 'barangays':
                return inertia('Modules/References/Locations/Barangays/Index',[
                    'regions' => $this->dropdown->regions()
                ]);
            break;
            case 'schools':
                return inertia('Modules/References/Dropdowns/Schools/Index');
            break;
            case 'courses':
                return inertia('Modules/References/Dropdowns/Courses/Index');
            break;
            case 'categories':
                return inertia('Modules/References/Dropdowns/Categories/Index');
            break;
        }
    }

    public function update(Request $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'barangay':
                    return $this->update->barangay($request);
                break;
                case 'municipality':
                    return $this->update->municipality($request);
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
