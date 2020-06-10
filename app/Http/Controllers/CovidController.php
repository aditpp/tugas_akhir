<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\covid;

class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covidcases = Covid::all();

        return view('index', compact('covidcases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'wilayah' => 'required|max:30',
            'positif' => 'required|numeric',
            'meninggal' => 'required|numeric',
            'sembuh' => 'required|numeric',
        ]);
        $show = Covid::create($validatedData);
   
        return redirect('/covids')->with('success', 'Data Kasus COVID-19 Berhasil Ditambahkan');
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
        $covidcase = Covid::findOrFail($id);

        return view('edit', compact('covidcase'));
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
            'wilayah' => 'required|max:30',
            'positif' => 'required|numeric',
            'meninggal' => 'required|numeric',
            'sembuh' => 'required|numeric',
        ]);

        Covid::whereId($id)->update($validatedData);

        return redirect('/covids')->with('success', 'Data Kasus COVID-19 Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $covidcase = Covid::findOrFail($id);
        $covidcase->delete();

        return redirect('/covids')->with('success', 'Data Kasus COVID-19 Berhasil Dihapus');
    }
}
