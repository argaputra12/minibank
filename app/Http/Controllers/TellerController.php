<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TellerController extends Controller
{
    //index
    public function index(){
        return redirect()->route('teller.dashboard');
    }
}
