<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use Illuminate\Http\Request;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instansi = Instansi::latest()->paginate(5);
        //
        return view('instansi.index',compact('instansi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        [
            'nama_instansi'  => 'required',
            'nomor_lembaga'  => 'required|Integer',
            'alamat' => 'required',
            'email'  => 'required',
            'password'  => 'required'
        ];
        //
        return view('instansi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        ([
            'nama_instansi'  => 'required',
            'nomor_lembaga'  => 'required|Integer',
            'alamat' => 'required',
            'email'  => 'required',
            'password'  => 'required'
        ]);
        $request->merge([
            'sudah_terverifikasi'=>0
        ]);

        
        Instansi::create($request->all());

        return redirect()->route('instansi.index')
        ->with('success', 'Data Instansi berhasil dibuat');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Instansi $instansi)
    {
        return view('instansi.edit',compact('instansi'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Instansi $instansi)
    {
        return view('instansi.edit',compact('instansi'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instansi $instansi)
    {
        $request->validate([
            'nama_instansi'  => 'required',
            'nomor_lembaga'  => 'required|Integer',
            'alamat' => 'required',
            'email'  => 'required',
            'password'  => 'required'
        ]);
           

        $instansi->update($request->all());
        return redirect()->route('instansi.index')
        ->with('success', 'Data Instansi berhasil dibuat');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instansi $instansi)
    {
        $instansi->delete();
        

        return redirect()->route('instansi.index')
                        ->with('success', 'Data Instansi berhasil dihapus');
        //
    }
}
