<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    //
    /**display the about page
    **/
    public function index(){
        return view('about');
    }
}
