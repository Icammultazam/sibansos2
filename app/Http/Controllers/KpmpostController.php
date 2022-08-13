<?php

namespace App\Http\Controllers;

use App\Models\Kpm;
use Illuminate\Http\Request;

class KpmpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Kpm::latest();
        if(request('search')){
            $posts->where('NOKK', 'like', '%'.request('search').'%');
        }

        return view ('dashboard.kpmpost.index',[
            "kpms"=>$posts->paginate(3)
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.kpmpost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'NAMAKPM' => 'required|max:100',
            'ALAMAT' => 'required|max:255',
            'NOKK' => 'required|unique:kpms|numeric',
            'NIK' => 'required|unique:kpms|numeric',
            'NOKKS' => 'required',
            'NILAI' => 'required|max:10',
            'STATUS' => 'required|max:15',
            'KET' => 'required|max:50',
        ]);

        Kpm::create($validateData);
        return redirect('/dashboard/kpmpost')->with('berhasil', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kpm  $kpm
     * @return \Illuminate\Http\Response
     */
    public function show(Kpm $kpm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kpm  $kpm
     * @return \Illuminate\Http\Response
     */
    public function edit(Kpm $kpmpost)
    {
        return view('dashboard.kpmpost.edit',[
            'post'=>$kpmpost
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kpm  $kpm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kpm $kpmpost)
    {
        $rules=[
            'NAMAKPM' => 'required|max:100',
            'ALAMAT' => 'required|max:255',
            'NILAI' => 'required|max:10',
            'STATUS' => 'required|max:15',
            'KET' => 'required|max:50',
        ];

        if($request->NOKK != $kpmpost->NOKK){
            $rules['NOKK']='required|unique:penerimas|numeric';          
        };
        if($request->NIK != $kpmpost->NIK){
            $rules['NIK']='required|unique:penerimas|numeric';          
        };
      

        $validateData=$request->validate($rules);

        Kpm::where('id', $kpmpost->id)
                    ->update($validateData);

        return redirect('/dashboard/kpmpost')->with('berhasil', 'Data Berhasil Ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kpm  $kpm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kpm $kpmpost)
    {
        Kpm::destroy($kpmpost->id);
        return redirect('/dashboard/kpmpost');
    }
}
