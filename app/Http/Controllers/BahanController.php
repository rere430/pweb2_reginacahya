<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bahan;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bahan()
    {
        $bahan = bahan::all();
        return view('bahan', compact(['bahan']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_bahan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        bahan::create($request->except(['_token', 'submit']));
        return redirect('bahan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bahan = bahan::find($id);
        return view('edit_bahan', compact(['bahan']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $bahan = bahan::find($id);
        $bahan->update($request->except(['_token', 'submit']));
        return redirect('bahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bahanhapus = bahan::find($id);
        $bahanhapus->delete();
        $bahan = bahan::all();
        $alert_sukses = 'Berhasil dihapus';
        return view('bahan')->with(['alert_sukses' => $alert_sukses, 'bahan' => $bahan]);

        // return back()->with('success', 'Data berhasil dihapus!');
    }
}
