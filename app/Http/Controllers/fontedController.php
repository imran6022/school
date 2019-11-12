<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\gallary;
use App\Notice;

class fontedController extends Controller
{
    function index(){
        $notices = Notice::orderBy('id', 'desc')->paginate(5);
    	return view('index', compact('notices'));
    }

    function aboutUs(){
    	return view('aboutUs');
    }

    function teachers(){
    	return view('teachers');
    }

    function gallary(){
        $gallarys = gallary::orderBy('id', 'desc')->paginate(40);
    	return view('gallary', compact('gallarys'));
    }

    function contact(){
    	return view('contact');
    }

    function notice_view($id){
        $notice = Notice::find($id);
        return view('noticeView', compact('notice'));

    }


}
