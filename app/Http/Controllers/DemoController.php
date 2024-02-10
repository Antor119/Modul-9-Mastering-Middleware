<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{
    public function index(Request $request){
        $num1=$request->num1;
        $num2=$request->num2;
        $sum=$num1+$num2;
        //Log::info($sum);
        //Log::emergency($sum);
        //Log::error($sum);
        Log::error($sum);
        Log::critical($sum);
        Log::warning($sum);
        Log::notice($sum);
        Log::debug($sum);
        return response($sum);
    }

    //Construct

    public function __construct(){
       // $this->middleware("demo");

    }

    public function index1(Request $request):array{
        return $request->header();
    }
}
