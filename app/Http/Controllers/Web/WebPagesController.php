<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebPagesController extends Controller
{
    public function index(Request $request)
    {
        return view('web.index');
    }

    public function about(Request $request)
    {
        return view('web.about');
    }

    public function contact(Request $request)
    {
        return view('web.contact');
    }
}
