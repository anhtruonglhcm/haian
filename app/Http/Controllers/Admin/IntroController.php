<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Intro;
use App\Http\Requests\IntroRequest;
use Image;
use Illuminate\Support\Facades\Validator;

class IntroController extends Controller
{
    public function index()
    {
        $intro = Intro::paginate(10);

        return view('admin.intro.index', compact('intro'));
    }

    // public function loadData()
    // {
    //     $intro = Intro::all();

    //     return view('admin.intro.data', compact('intro'));
    // }

    // public function store(Request $req)
    // {
    //     if ($req->ajax()) {
    //         $intro              = new Intro;
    //         $intro->name        = $req['name'];
    //         $intro->slug        = str_slug($req['name']);
    //         $intro->position    = $req['position'];
    //         $intro->status      = (is_null($req['status']) ? '0' : '1');
    //         $intro->title_seo   = $req['title_seo'];
    //         $intro->meta_key    = $req['meta_key'];
    //         $intro->meta_des    = $req['meta_des'];
    //         $intro->save();
    //         echo json_encode($intro);
    //     }
    // }

    // public function delete(Request $req)
    // {
    //     if ($req->ajax()) {
    //         $result = Intro::findOrFail($req->id);
    //         Intro::destroy($result);
    //         return response(['message' => 'xóa thành công']);
    //     }
    // }

    // public function getUpdate(Request $req)
    // {
    //     if ($req->ajax()) {
    //         $intro = Intro::find($req->id);
    //         return response($intro);
    //     }
    // }

    // public function updates(Request $req)
    // {
    //     if ($req->ajax()) {
    //         $intro = Intro::find($req->id);
    //         $intro->name        = $req['name'];
    //         $intro->slug        = str_slug($req['name']);
    //         $intro->position    = $req['position'];
    //         $intro->status      = (is_null($req['status']) ? '0' : '1');
    //         $intro->title_seo   = $req['title_seo'];
    //         $intro->meta_key    = $req['meta_key'];
    //         $intro->meta_des    = $req['meta_des'];
    //         $intro->save();
    //         echo json_encode($intro);
    //     }
    // }

    public function create()
    {

        return view('admin.intro.create');
    }

    public function postCreate(IntroRequest $req)
    {
        $intro              = new Intro;
         $intro->name_vi        = $req['name_vi'];
        $intro->name_en        = $req['name_en'];
        $intro->title_vi        = $req['title_vi'];
        $intro->title_en        = $req['title_en'];
        $intro->slug        = str_slug($req['name_vi']);
        $intro->position    = $req['position'];
        $intro->status      = (is_null($req['status']) ? '0' : '1');
        $intro->description_vi = $req['description_vi'];
         $intro->description_en = $req['description_en'];
        $intro->title_seo_vi   = $req['title_seo_vi'];
        $intro->meta_key_vi    = $req['meta_key_vi'];
        $intro->meta_des_vi    = $req['meta_des_vi'];
        $intro->title_seo_en   = $req['title_seo_en'];
        $intro->meta_key_en    = $req['meta_key_en'];
        $intro->meta_des_en    = $req['meta_des_en'];
        if ($req->hasFile('image')) {
            $image    = $req->file('image');
            $filename = date('Y_d_m_H_i_s').'-'. $image->getClientOriginalName();
            Image::make($image)->save(public_path('upload/intro/'.$filename));
            $intro->image = ('upload/intro/'.$filename);
        }
        $intro->save();

        return redirect()->route('admin.intro.index');
    }

    public function update($slug)
    {
        $intro = Intro::where('slug', $slug)->first();

        return view('admin.intro.edit', compact('intro'));
    }

    public function postUpdate($slug, Request $req)
    {
        $intro              = Intro::where('slug', $slug)->first();
         $intro->name_vi        = $req['name_vi'];
        $intro->name_en        = $req['name_en'];
        $intro->title_vi        = $req['title_vi'];
         $intro->title_en        = $req['title_en'];
        $intro->slug        = str_slug($req['name_vi']);
        $intro->position    = $req['position'];
        $intro->status      = (is_null($req['status']) ? '0' : '1');
        $intro->description_vi = $req['description_vi'];
        $intro->description_en = $req['description_en'];
        $intro->title_seo_vi   = $req['title_seo_vi'];
        $intro->meta_key_vi    = $req['meta_key_vi'];
        $intro->meta_des_vi    = $req['meta_des_vi'];
        $intro->title_seo_en   = $req['title_seo_en'];
        $intro->meta_key_en    = $req['meta_key_en'];
        $intro->meta_des_en    = $req['meta_des_en'];
        if ($req->hasFile('image')){
            if (file_exists($intro->image)) {
                unlink($intro->image);
            }
            $image    = $req->file('image');
            $filename = date('Y_d_m_H_i_s').'-'. $image->getClientOriginalName();
            Image::make($image)->save(public_path('upload/intro/'.$filename));
            $intro->image = ('upload/intro/'.$filename);
        }
        $validatedData = $req->validate([
            'name_vi'     => 'required|unique:intros,name_vi,' .$intro->id,
            'position' => 'numeric|nullable|min:0|unique:intros,position,' .$intro->id,
        ]);
        $intro->save();

        return redirect()->route('admin.intro.index')->with('success', 'Sửa thành công');
    }

    public function destroy($id)
    {
        $result = Intro::findOrFail($id);
        if (file_exists($result->image))
        {
            unlink($result->image);
        }
        $result->delete();

        return redirect()->back()->with('success', 'Xóa thành công');
    }

    public function status(Request $req)
    {
        if ($req->ajax())
        {
            $result = Intro::find($req->id);
            if ($result->status == 0)
            {
                $result->status = 1;
            } else {
                $result->status = 0;
            }
            $result->save();

            return response($result);
        }
    }
}
