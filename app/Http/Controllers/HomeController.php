<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\gallary;
use Image;
use File;
use App\Notice;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.home');
    }

    function admin_gallary(){
        $gallarys = gallary::orderBy('id', 'desc')->paginate(10);
        return view('backend.admin_gallary', compact('gallarys'));
    }

    function add_photo(){
        return view('backend.admin_photo_add');
    }

    function store_photo(Request $request){
        $request->validate([
            'title' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photo = new gallary;

         $photo->title = $request->title;
         

            $image = $request->file('photo');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/gallary/' .$img);
            Image::make($image)->save($location);
            $photo->photo = $img;

        $photo->save();

        session()->flash('success', 'Photo upload successfully');

        return redirect()->route('admin.gallary');

    }

    function gallary_delete($id){
        $gallary = gallary::find($id);


            if (File::exists('images/gallary/'. $gallary->photo )) {
                File::delete('images/gallary/'. $gallary->photo);
            }

            $gallary->delete();
  
        session()->flash('success', 'Photo delete successfully !!');
        return back();

    }

    function notice(){
        $notices = Notice::orderBy('id', 'desc')->paginate(10);
        return view('backend.notice', compact('notices'));
    }

    function add_notice(){
        return view('backend.add_notice');
    }

    function store_notice(Request $request){
        $request->validate([
            'title' => 'required',
            'notice' => 'required|mimes:pdf',
        ]);

        $notice = new Notice;

        $notice->title = $request->title;

        if ($file = $request->hasFile('notice')) {
            $file = $request->file('notice');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/images/notice/';
            $file->move($destinationPath, $filename);
            $notice->notice = $filename;
        }

        $notice->save();

        session()->flash('success', 'Notice upload successfully');

        return redirect()->route('admin.notice');

    }


    function notice_delete($id){
        $notice = Notice::find($id);


            if (File::exists('images/notice/'. $notice->notice )) {
                File::delete('images/notice/'. $notice->notice);
            }

            $notice->delete();
  
        session()->flash('success', 'Notice delete successfully !!');
        return back();
    }


}
