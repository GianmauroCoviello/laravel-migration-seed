<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){
        //  dd('trains');
        // $now = date('y-m-d',strtotime(now()));
        $trains= train::all();
        return view('home', compact('trains'));
    }
}
