<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // show home page
    public function home()
    {
        return view('frontend.home');
    }
    // show about page
    public function about()
    {
        return view('frontend.about');
    }
    //  show gallary page
    public function gallary()
    {
        return view('frontend.gallary');
    }
    // show contact page.
    public function contact()
    {
        return view('frontend.contact');
    }
    // show albums from gallary
    public function album($id)
    {
        $album = "You have give me a gallary no $id.";
        return view('frontend.album', compact('album'));
    }
    // show new students page.
    public function new()
    {
        return view('frontend.newStudent');
    }
    // show new students details page.
    public function details()
    {
        return view('frontend.studentDetails');
    }
}
