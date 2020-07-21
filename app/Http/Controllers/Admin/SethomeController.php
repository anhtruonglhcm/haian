<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sethome;

class SethomeController extends Controller
{
    public function index()
    {

        $sethomes = Sethome::first();
        if($sethomes == null)
        {
            $sethomes       = new Sethome;
            $sethomes->name_vi = 'Nhập tên công ty';
            $sethomes->name_en = 'Name city';
            $sethomes->save();
        }

        return view('admin.sethome.index', compact('sethomes', 'file'));
    }

    public function update(Request $req)
    {
        $sethomes            = Sethome::first();
        $sethomes->name_vi      = $req['name_vi'];
        $sethomes->name_en      = $req['name_en'];
        
        $sethomes->save();
        return redirect()->route('admin.sethome');
    }
}
