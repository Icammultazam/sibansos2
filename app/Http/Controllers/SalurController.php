<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class SalurController extends Controller
{
    public function index()
    {
        $posts=Jadwal::latest();
        if(request('search')){
            $posts->where('NAMAWAR0NG', 'like', '%'.request('search').'%');
        }

        return view ('jadwalsalur',[
            'salurs'=>$posts->paginate(8)
        
        ]);

        
       
    }
}
