<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelpenjualan;
use App\Modelbarang;
use Validator;


class penjualan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Modelpenjualan::all();
        // return view('kontak', compact('data'));
        return view('penjualan', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjualan_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,  [
          'kode_barang' => 'required',
          'jumlah' => 'required',
          'total_harga' => 'required',
         
        ]);

        $data = new Modelpenjualan();
        $data->kode_barang= $request->kode_barang;
        $data->jumlah= $request->jumlah;
        $data->total_harga= $request->total_harga;
      
        $data-> save();

        $dataBeli = Modelbarang::where('kode_barang',$request->kode_barang)->first();
        $dataBeli->stok = $dataBeli->stok- $request->jumlah;
        $dataBeli->save();

        return redirect()->route('penjualan.index')->with('alert_message', 'Berhasil menambah data!');


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
      $data = Modelpenjualan::where('id', $id)->get();
      return view('penjualan_edit', compact('data'));

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
        $this->validate($request, [
            'kode_barang' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
           
        ]);

        $data = Modelpenjualan::where('id', $id)->first();
        $data->kode_barang= $request->kode_barang;
        $data->jumlah= $request->jumlah;
        $data->total_harga= $request->total_harga;
      
        $data-> save();

        return redirect()->route('penjualan.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Modelpenjualan::where('id',$id)->first();
        $data->delete();

        return redirect()->route('penjualan.index')->with('alert_message','Berhasil menghapus data!');
    }
}
