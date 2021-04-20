<?php

namespace App\Http\Controllers;
use DB;
use App\Ujianproposal;
use Illuminate\Http\Request;

class UjianproposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujianproposal= \App\Ujianproposal::all();
        return view('ujianproposal.index', ['ujianproposal' => $ujianproposal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa= \App\Mahasiswa::all();
        $dosen= \App\Dosen::all(); 
        return view('ujianproposal.create', compact('mahasiswa', 'dosen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ujianproposal = new Ujianproposal;
        $ujianproposal ->judulujian = $request->judulujian;
        $ujianproposal ->mahasiswa_id = $request->mahasiswa_id;
        $ujianproposal ->dosen_id = $request->dosen_id;
        $ujianproposal ->tanggal = $request->tanggal;
        $ujianproposal ->save();
        return redirect()->route('ujianproposal.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ujianproposal  $ujianproposal
     * @return \Illuminate\Http\Response
     */
    public function show(Ujianproposal $ujianproposal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ujianproposal  $ujianproposal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ujianproposal =  \App\Ujianproposal::find($id);
        $mahasiswa =  \App\Mahasiswa::all();
        $dosen=  \App\Dosen::all();
        return view('ujianproposal.edit', compact('ujianproposal', 'mahasiswa', 'dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ujianproposal  $ujianproposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ujianproposal =  \App\Ujianproposal::find($id);
        $ujianproposal ->judulujian = $request->input ('judulujian');
        $ujianproposal ->mahasiswa_id = $request->input ('mahasiswa_id');
        $ujianproposal ->dosen_id = $request->input ('dosen_id');
        $ujianproposal ->tanggal = $request->input ('tanggal');
        $ujianproposal->update();
        return redirect()->route('ujianproposal.index')->with('success','Data berhasil di input');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ujianproposal  $ujianproposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ujianproposal $ujianproposal)
    {
        $ujianproposal->delete();
        return redirect()->route('ujianproposal.index')->with('success','Ujianproposal berhasil dihapus');
    }
}
