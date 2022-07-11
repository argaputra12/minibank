<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSController extends Controller
{
    //index
    public function index(){
        return redirect()->route('cs.dashboard');
    }
}
