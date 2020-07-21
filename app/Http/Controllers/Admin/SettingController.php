<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Http\Requests\SettingRequest;
use File;
use Image;
class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        if($settings == null)
        {
            $settings       = new Setting;
            $settings->name_vi = 'Nhập tên công ty';
            $settings->name_en = 'Name city';
            $settings->save();
        }
        File::exists("robots.txt");
        $file = File::get("robots.txt");

        return view('admin.setting.index', compact('settings', 'file'));
    }

    public function update(Request $req)
    {
        $settings            = Setting::first();
        $settings->name_vi      = $req['name_vi'];
        $settings->name_en      = $req['name_en'];
        $settings->email     = $req['email'];
        $settings->address_vi   = $req['address_vi'];
        $settings->address_en   = $req['address_en'];
        $settings->website   = $req['website'];
        $settings->hotline   = $req['hotline'];
        $settings->thead     = $req['thead'];
        $settings->tbody     = $req['tbody'];
        $settings->title_seo = $req['title_seo'];
        $settings->meta_des  = $req['meta_des'];
        $settings->meta_key  = $req['meta_key'];
        $robot               = $req['robot'];
        File::put("robots.txt", $robot);
        if($req->hasFile('logo')){
            if(file_exists($settings->logo))
            {
                unlink($settings->logo);
            }
            $logo = $req->file('logo');
            $filename = date('Y_d_m_H_i_s').'-'. $logo->getClientOriginalName();
            Image::make($logo)->save(public_path('images/upload/'.$filename));
            $settings->logo = ('images/upload/'.$filename);
        }

        if($req->hasFile('icon')){
            if(file_exists($settings->icon))
            {
                unlink($settings->icon);
            }
            $icon = $req->file('icon');
            $filename = date('Y_d_m_H_i_s').'-'. $icon->getClientOriginalName();
            Image::make($icon)->save(public_path('images/upload/'.$filename));
            $settings->icon = ('images/upload/'.$filename);
        }
        $settings->save();
        return redirect()->route('admin.setting');
    }
}
