<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use Illuminate\Http\Request;

class PenerimaPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.penerimapost.index', [
             "penerimas"=>Penerima::latest()->filter(request(['search']))->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.penerimapost.create');
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
            'NAMA' => 'required|max:100',
            'TEMPAT_LAHIR' => 'required|max:50',
            'TGL_LAHIR' => 'required',
            'ALAMAT' => 'required|max:255',
            'PEKERJAAN' => 'required|max:50',
            'NOKK' => 'required|unique:penerimas|numeric',
            'NIK' => 'required|unique:penerimas|numeric',
            'NOKKS' => 'required|unique:penerimas',
            'KET' => 'required|max:100',
        ]);

        Penerima::create($validateData);
        return redirect('/dashboard/penerimabnpt')->with('berhasil', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penerima  $penerima
     * @return \Illuminate\Http\Response
     */
    public function show(Penerima $penerimabnpt)
    {
        
        return view('dashboard.penerimapost.show',[
            'post'=>$penerimabnpt
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penerima  $penerima
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerima $penerimabnpt)
    {
        return view('dashboard.penerimapost.edit',[
            'post'=>$penerimabnpt
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penerima  $penerima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penerima $penerimabnpt)
    {
        $rules=[
            'NAMA' => 'required|max:100',
            'TEMPAT_LAHIR' => 'required|max:50',
            'TGL_LAHIR' => 'required',
            'ALAMAT' => 'required|max:255',
            'PEKERJAAN' => 'required|max:50',
            'KET' => 'required|max:100',
        ];

        if($request->NOKK != $penerimabnpt->NOKK){
            $rules['NOKK']='required|unique:penerimas|numeric';          
        };
        if($request->NIK != $penerimabnpt->NIK){
            $rules['NIK']='required|unique:penerimas|numeric';          
        };
        if($request->NOKKS != $penerimabnpt->NOKKS){
            $rules['NOKKS']='required|unique:penerimas|numeric';          
        };

        $validateData=$request->validate($rules);

        Penerima::where('id', $penerimabnpt->id)
                    ->update($validateData);

        return redirect('/dashboard/penerimabnpt')->with('berhasil', 'Data Berhasil Ditambah');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penerima  $penerima
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerima $penerimabnpt)
    {
        Penerima::destroy($penerimabnpt->id);
        return redirect('/dashboard/penerimabnpt')->with('berhasil', 'Data Berhasil Dihapus');
    }
}
