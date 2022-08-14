<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use App\Http\Requests\StorePenerimaRequest;
use App\Http\Requests\UpdatePenerimaRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
 
        return view('penerimabnpt', [
            "post"=>Penerima::latest()->filter(request(['search']))->paginate(8)->withQueryString()
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hitung()
    {
        $penerima = DB::table('penerimas')->count();
        $agent =  DB::table('agens')->count();
        
        return view('landingpage',[
            'penerima'=>$penerima,
            'agen'=>$agent
        ]);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenerimaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenerimaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penerima  $penerima
     * @return \Illuminate\Http\Response
     */
    public function show(Penerima $penerima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penerima  $penerima
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerima $penerima)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenerimaRequest  $request
     * @param  \App\Models\Penerima  $penerima
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenerimaRequest $request, Penerima $penerima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penerima  $penerima
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerima $penerima)
    {
        //
    }
}
