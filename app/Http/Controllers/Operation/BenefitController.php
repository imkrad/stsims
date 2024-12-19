<?php

namespace App\Http\Controllers\Operation;

use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Operation\Benefit\ViewClass;
use App\Services\Operation\Benefit\SaveClass;

class BenefitController extends Controller
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
            case 'pendings':
                return $this->view->pendings();
            break;
            case 'scholars':
                return $this->view->scholars($request);
            break;
            case 'released':
                return $this->view->released($request);
            break;
            case 'lbp':
                return $this->view->lbp($request);
            break;
            case 'management':
                return $this->view->management($request);
            break;
            default:
                return inertia('Modules/Operation/Benefits/Index',[
                    'upcoming' => $this->view->upcoming()
                ]); 
        }   
    }  

    public function store(Request $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'pending':
                    return $this->save->pending($request);
                break; 
                case 'completed':
                    return $this->save->completed($request);
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
