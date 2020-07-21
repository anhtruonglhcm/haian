<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Intro;

class IntroController extends Controller
{
    public function index($slug)
    {
        $intro = Intro::where('status', 1)->where('slug',$slug)->first();

        return view('frontend.intro', compact('intro'));
    }
}
