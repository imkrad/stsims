<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Services\Operation\Others\ReportClass;

class ReportController extends Controller
{
    public function __construct(ReportClass $report, DropdownClass $dropdown){
        $this->report = $report;
        $this->dropdown = $dropdown;
    }

    public function index(Request $request){
        switch($request->option){
            case 'print':
                return $this->report->print($request);
            break;
            default:
                return inertia('Modules/Operation/Reports/Index',[
                    'types' => $this->report->types()
                ]);
        }   
    }
}
