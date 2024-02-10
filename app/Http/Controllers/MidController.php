<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidController extends Controller
{
    public function mid1(){
        return "Hello1";
    }
    public function mid2(){
        return "Hello2";
    }
    public function mid3(){
        return "Hello3";
    }
    public function mid4(){
        return "Hello4";
    }

    public function mid5(Request $request):array{
        return $request->header();
    }
    public function mid6():string{
        return 'hello6';
    }
}
