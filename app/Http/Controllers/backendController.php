<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendController extends Controller
{
    function index(){
    	return view('backend.index');
    }
}
