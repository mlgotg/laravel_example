<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use App\Models\Car;

class ControllerPr extends Controller
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * ControllerPr constructor.
     */
    public function func($id, $name, $model, $year){
        $s = new Car($id,$name,$model, $year);
        return view('child', ['obj'=> $s]);
    }
    public function fun(){
       // $s = new Car(request('id'), request('name'));
        $name = request('name');
        $model = request('model');
        $year = request('year');
        $id = request('id');
        error_log($id);
        return redirect("aboutCar/{$id}/name/{$name}/model/{$model}/year/{$year}");
    }
}
