<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Cate_post;
use Illuminate\Support\Collection;

class PostController extends Controller
{
    public function listPost()
    {
        $post = Post::orderBy('position','ASC')->where('status', 1)->paginate(8);

        return view('frontend.posts.list', compact('post', 'cate_post'));
    }

    public function detail($slug)
    {
        $detail = Post::where('status', 1)->where('slug', $slug)->first();

        return view('frontend.posts.detail', compact('detail'));
    }

    public function postSearch(Request $req)
    {
        $input  = $req->search;
        $search = Post::where('name_vi', 'LIKE',"%$input%")->orWhere('name_en', 'LIKE',"%$input%")->where('status', 1)->paginate(8);

        return view('frontend.posts.search', compact('search', 'input'));
    }
}
