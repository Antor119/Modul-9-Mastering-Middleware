<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   //Pass Data From Controller

   public function pages(Request $request){
    // $num1= $request->num1;
    // $num2= $request->num2;
    // $sum=$num1+$num2;
    // $data=['result'=>$sum];
    $data=[
        ['name'=>'Rabbi', 'City'=> 'London'],
        ['name'=>'Sabbir', 'City'=> 'Dhaka'],
        ['name'=>'Aman', 'City'=> 'Khulna'],
        ['name'=>'Amin', 'City'=> 'Nator']
    ];
    return view("home", ['users'=>$data]);
   }

   public function home(){
    return view('component.home1');
   }

   public function mid5(){
    return "Hello";
   }
   public function mid6(){
    return "Hello M H Antor";
   }

   public function mid7(Request $request){
    print_r($request->all());

   }

   public function protectedResponse(Request $request){
    $ip= $request->ip();
    return response("Protected Response {$ip}");
   }

   public function home2(){
    $users=[
        ["name"=> "Rabbi","city"=> "Dhaka"],
        ["name"=> "Sabbir","city"=> "Khulna"],
        ["name"=> "Aman","city"=> "Nator"],
    ];
    return view("pages.home2", ["users"=>$users]);
   }
}
