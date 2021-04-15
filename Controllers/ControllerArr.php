<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use App\Models\Car;

class ControllerArr extends Controller
{
    public function func(){
        $arr = [];
        for($i = 0; $i < 10; $i++){
            $arr[$i] = $i;
        }
        return view('welcome', ['myarr'=>$arr]);
    }
}
