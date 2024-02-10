<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function sessionPut(Request $request):bool{
        $email= $request->email;
        $request->session()->put("userEmail", $email);
        return true;

    }

    public function sessionPull(Request $request):string{
        return $request->session()->pull("userEmail","default");
    }
    public function sessionGet(Request $request):string{
        return $request->session()->get("userEmail","default");
    }

    public function sessionForgate(Request $request):bool{
        $request->session()->forget("userEmail");
        return true;
    }

    public function sessionFlush(Request $request):bool{
        $request->session()->flush();
        return true;
    }
}
