<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function index(Request $request){
        return inertia('Modules/Operation/Others/Index');
    }
}
