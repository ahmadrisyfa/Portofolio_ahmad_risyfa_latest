<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutMe;
class WebsiteController extends Controller
{
    public function index()
    {
        $about_me = AboutMe::first();
        return view('website',compact('about_me'));
    }
}
