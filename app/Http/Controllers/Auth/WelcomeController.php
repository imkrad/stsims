<?php

namespace App\Http\Controllers\Auth;

use Hashids\Hashids;
use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    use HandlesTransaction;

    public function __construct(DropdownClass $dropdown){
        $this->dropdown = $dropdown;
    }

    public function landing(){
        if(!\Auth::check()){
            return inertia('Auth/Login',[
                'dropdowns' => [
                    'laboratories' => $this->dropdown->laboratories(),
                    'types' => $this->dropdown->laboratory_all(),
                    'roles' => $this->dropdown->roles(),
                ]
            ]);
        }else{
            return inertia('Modules/Laboratory/Dashboard/Index',[
                'laboratories' => $this->dropdown->laboratory_types(),
            ]);
        }
    }

    public function index(){
        if(\Auth::check()){
            return inertia('Modules/Laboratory/Dashboard/Index',[
                'laboratories' => $this->dropdown->laboratory_types(),
            ]);
        }else{
            return inertia('Auth/Login');
        }
    }

    public function activation(){
        if(\Auth::user()->is_active){
            return redirect()->intended(route('dashboard', absolute: false));
        }else{
            return inertia('Auth/Activation');
        }
    }



}
