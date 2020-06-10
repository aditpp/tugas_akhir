<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hospital;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rumahsakit = Hospital::all();

        return view('hospital/index', compact('rumahsakit'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rumah_sakit' => 'required|max:255',
            'kapasitas' => 'required|numeric',
            'alamat' => 'required|',
        ]);
        $show = Hospital::create($validatedData);
   
        return redirect('hospitals')->with('success', 'Data Rumah Sakit Berhasil Ditambahkan');
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
        $rumahsakit = Hospital::findOrFail($id);

        return view('hospital/edit', compact('rumahsakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'rumah_sakit' => 'required|max:255',
            'kapasitas' => 'required|numeric',
            'alamat' => 'required|',
        ]);
        Hospital::whereId($id)->update($validatedData);
   
        return redirect('/hospitals')->with('success', 'Data Rumah Sakit Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rumahsakit = Hospital::findOrFail($id);
        $rumahsakit->delete();

        return redirect('/hospitals')->with('success', 'Data Rumah Sakit Berhasil Dihapus');
    }
}
