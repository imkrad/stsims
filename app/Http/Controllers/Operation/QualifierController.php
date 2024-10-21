<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Services\Operation\Qualifier\SaveClass;
use App\Services\Operation\Qualifier\ViewClass;

class QualifierController extends Controller
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
            default:
                return inertia('Modules/Operation/Qualifiers/Index',[
                    'dropdowns' => [
                        'statuses' => $this->dropdown->qualifier_statuses(),
                    ]
                ]); 
        }   
    }   

    public function store(Request $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'enroll':
                    return $this->save->enroll($request);
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
