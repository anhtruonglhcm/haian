<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cate_Slide;
use App\Models\Slide;
use App\Models\Cate_post;
use App\Models\Cate_product;
use App\Models\Product;
use App\Models\Post;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::orderBy('position','ASC')->where('status', 1)->where('is_home',1)->paginate(8);
        $product = Product::where('status', 1)->orderBy('position', 'ASC')->get();
        $top     = Slide::where('status', 1)->where('dislay', 1)->first();
        $cf      = Slide::where('status', 1)->where('dislay', 2)->first();

        $tes = Cate_product::all();
        $tes_name        = 'name_'.\App::getLocale();

        return view('frontend.index', compact('product', 'cf', 'top', 'tes','tes_name','post'));
    }

    public function changeLanguage($locale)
    {
        Session::put('locale',$locale);
        return redirect()->back();
    }
}
