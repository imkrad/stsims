<?php

namespace App\Http\Controllers\Operation;

use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use App\Services\Operation\Scholar\SaveClass;
use App\Services\Operation\Scholar\ViewClass;
use App\Services\Operation\Scholar\TracerClass;
use Illuminate\Http\Request;
use App\Http\Requests\Operation\TracerRequest;

class ScholarController extends Controller
{
    use HandlesTransaction;

    public function __construct(SaveClass $save, ViewClass $view, DropdownClass $dropdown, TracerClass $tracer){
        $this->view = $view;
        $this->save = $save;
        $this->tracer = $tracer;
        $this->dropdown = $dropdown;
    }

    public function index(Request $request){
        switch($request->option){
            case 'search':
                return $this->view->search($request);
            break;
            case 'lists':
                return $this->view->lists($request);
            break;
            default:
                return inertia('Modules/Operation/Scholars/Index',[
                    'dropdowns' => [
                        'statuses' => $this->dropdown->statuses(),
                    ],
                    'counts' => $this->view->counts()
                ]); 
        }   
    }  
    
    public function show($code){
        return inertia('Modules/Operation/Scholars/Profile/Index',[
            's' => $this->view->view($code)
        ]);
    }

    public function store(TracerRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->module){
                case 'tracer':
                    return $this->tracer->save($request);
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
