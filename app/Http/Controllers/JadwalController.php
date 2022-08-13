<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Jadwal::latest();
        if(request('search')){
            $posts->where('NAMAWAR0NG', 'like', '%'.request('search').'%');
        }

        return view ('dashboard.jadwal.index',[
            "jadwals"=>$posts->paginate(8)
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.jadwal.create');
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
            'NAMADESA' => 'required|max:100',
            'NAMAWAR0NG' => 'required|max:50',
            'TGL_PENYALURAN' => 'required',
            'TEMPAT_SALUR' => 'required|max:50',
            
        ]);
       
        Jadwal::create($validateData);
        return redirect('/dashboard/jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        return view('dashboard.jadwal.edit',[
            'jadwal'=>$jadwal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $validateData=$request->validate([
            'NAMADESA' => 'required|max:100',
            'NAMAWAR0NG' => 'required|max:50',
            'TGL_PENYALURAN' => 'required',
            'TEMPAT_SALUR' => 'required|max:50',
            
        ]);

        Jadwal::where('id', $jadwal->id)
                    ->update($validateData);

        return redirect('/dashboard/jadwal')->with('berhasil', 'Data Berhasil Ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        Jadwal::destroy($jadwal->id);
        return redirect('/dashboard/jadwal');
    }
}
