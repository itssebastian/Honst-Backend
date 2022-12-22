<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    public function getData(){

        /*$userInfo = User::find(Auth::id());
        //dd($userInfo);
        $mobile_no = User::where('id', '=', Auth::id())->get('mobile_no');
        dd(Auth::user()->mobile_no);*/

        return view('firebase', ['data' =>Auth::user()->mobile_no ]);
    }
}
