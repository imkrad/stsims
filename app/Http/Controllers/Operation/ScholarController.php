<?php

namespace App\Http\Controllers\Operation;

use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use App\Services\Operation\Scholar\SaveClass;
use App\Services\Operation\Scholar\ViewClass;
use Illuminate\Http\Request;

class ScholarController extends Controller
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
                return inertia('Modules/Operation/Scholars/Index',[
                    'dropdowns' => [
                        'statuses' => $this->dropdown->statuses(),
                    ]
                ]); 
        }   
    }  
    
    public function show($code){
        return inertia('Modules/Operation/Scholars/Profile/Index',[
            'scholar' => $this->view->view($code)
        ]);
    }
}
