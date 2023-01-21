<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = admin::latest()->paginate(5);
        //
        return view('admin.index',compact('admin'))
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

        
        admin::create($request->all());

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
    public function show(admin $admin)
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
    public function edit(admin $admin)
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
    public function update(Request $request, admin $admin)
    {
        $request->validate([
            'nama_instansi'  => 'required',
            'nomor_lembaga'  => 'required|Integer',
            'alamat' => 'required',
            'email'  => 'required',
            'password'  => 'required'
        ]);
           

        $admin->update($request->all());
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
    public function destroy(admin $admin)
    {
        $admin->delete();
        

        return redirect()->route('instansi.index')
                        ->with('success', 'Data Instansi berhasil dihapus');
        //
    }
}
