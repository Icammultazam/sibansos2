<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerima;
use App\Http\Requests\StorePenerimaRequest;
use App\Http\Requests\UpdatePenerimaRequest;
use App\Models\Agen;

class AgenfrontController extends Controller
{
    public function index()
    {
        $posts=Agen::latest();
        if(request('search')){
            $posts->where('NAMAAGEN', 'like', '%'.request('search').'%');
        }

        return view ('agen',[
            'agents'=>$posts->paginate(8)
        
        ]);

        // return view('agen',[
        //     'agents' =>Agen::get()
        // ]);
       
    }
};
