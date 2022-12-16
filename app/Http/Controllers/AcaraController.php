<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acara = Acara::latest()->paginate(5);
        // $acara = Acara::where('acara_id', Acara::latest()->acara_id)->paginate(5);

      
        return view('acara.index',compact('acara'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
       [
        'nama_acara' => 'required',
        'tanggal_acara' => 'required',
        'instansi_id' => 'required|integer',
        'template_sertifikat' => 'required',
            // 'acara_id' => auth()->id(),
            // 'nama_acara' => request('nama_acara'),
            // 'tanggal_acara' => request('tanggal_acara'),
            // 'instansi_id' => request('instansi_id'),
            // 'template_sertifikat' => request('template_setifikat')
        ];
        // auth()->acara()->public(new Request(request(['nama_acara' ,'tanggal_id', 'instansi_id' , 'template_sertifikat']))); 
        return view('acara.create');
        //
       
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'nama_acara' => request('nama_acara'),
            // 'tanggal_acara' => request('tanggal_acara'),
            // 'instansi_id' => auth()->id(),
            // 'template_sertifikat' => request('template_setifikat')

            'nama_acara' => 'required',
            'tanggal_acara' => 'required',
            'instansi_id' => 'required',
            'template_sertifikat' => 'required',
        ]);
      
        Acara::create($request->all());
       
        return redirect()->route('acara.index')
                        ->with('success','Acara created successfully.');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Acara $acara)
    {
        return view('acara.show',compact('acara'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Acara $acara)
    {
        return view('acara.edit',compact('acara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $acara_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acara $acara)
    {
        $request->validate([
            'nama_acara' => 'required',
            'tanggal_acara' => 'required',
            'instansi_id' => 'required|integer',
            'template_sertifikat' => 'required',
        ]);
      
        $acara->update($request->all());
      
        return redirect()->route('acara.index')
                        ->with('success','Acara updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acara $acara)
    {
        $acara->delete();
       
        return redirect()->route('acara.index')
                        ->with('success','Acara deleted successfully');
    }
}
