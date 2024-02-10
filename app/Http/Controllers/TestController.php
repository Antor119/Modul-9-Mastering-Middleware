<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct(){
        //$this->middleware("test")->except('show');
        //only
    }
    public function index(Request $request){
        return $request->header();
    }
    public function store(Request $request){
        return "From Store Method";
    }
    public function show(){
        return "From show method";
    }
}
