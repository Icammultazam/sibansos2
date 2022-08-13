<?php

namespace App\Http\Controllers;

use App\Models\Agen;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Agen::latest();
        if(request('search')){
            $posts->where('NAMAAGEN', 'like', '%'.request('search').'%');
        }

        return view ('dashboard.agentpost.index',[
            "agents"=>$posts->paginate(3)
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.agentpost.create');
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
            'NAMAAGEN' => 'required|max:100',
            'NOIZIN' => 'required|max:50',
            'ALAMAT' => 'required|max:255',
            'PJ' => 'required|max:50',
            'KET' => 'required|max:100',
        ]);

        Agen::create($validateData);
        return redirect('/dashboard/agen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agen  $agen
     * @return \Illuminate\Http\Response
     */
    public function show(Agen $agen)
    {
        //
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agen  $agen
     * @return \Illuminate\Http\Response
     */
    public function edit(Agen $agen)
    {
        return view('dashboard.agentpost.edit',[
            'post'=>$agen
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agen  $agen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agen $agen)
    {
        $validateData=$request->validate([
            'NAMAAGEN' => 'required|max:100',
            'NOIZIN' => 'required|max:50',
            'ALAMAT' => 'required|max:255',
            'PJ' => 'required|max:50',
            'KET' => 'required|max:100',
        ]);

        Agen::where('id', $agen->id)
                    ->update($validateData);

        return redirect('/dashboard/agen')->with('berhasil', 'Data Berhasil Ditambah');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agen  $agen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agen $agen)
    {
        Agen::destroy($agen->id);
        return redirect('/dashboard/agen');
    }
}
