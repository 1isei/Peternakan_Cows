<?php

namespace App\Http\Controllers;

use App\Models\Cows;
use App\Models\Pangan;
use Illuminate\Http\Request;
use App\Models\TransaksiPemasukan;
use App\Models\TransaksiPengeluaran;

class PanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pangan', [
            'pangan' => Pangan::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $validateData = $request->validate([
            'jenis_pakan' => 'required',
            'stock' => 'required'
        ]);

        Pangan::create($validateData);
        return back();
    }

    public function store_pemasukan(Request $request)
    {
        $validateData = $request->validate([
            'tanggal' => 'required',
            'tipe_pangan' => 'required',
            'jumlah_pangan' => 'required'
        ]);

        TransaksiPemasukan::create($validateData);
        return back();
    }

    public function store_pengeluaran(Request $request)
    {
        $validateData = $request->validate([
            'tanggal' => 'required',
            'tipe_pangan' => 'required',
            'jumlah_pangan' => 'required'
        ]);

        TransaksiPengeluaran::create($validateData);
        return back();
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
        return view('edit_pangan', [
            'pangan' => Pangan::firstWhere('kode_pangan', $id)
        ]);
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
        $validateData = $request->validate([
            'jenis_pakan' => 'required',
        ]);

        Pangan::where('kode_pangan', $id)->update($validateData);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pangan::where('kode_pangan', $id)->delete();

        return back();
    }

    public function pemasukan()
    {
        return view('pemasukan', [
            'pemasukan' => TransaksiPemasukan::latest()->get(),
        ]);
    }

    public function pengeluaran()
    {
        return view('pengeluaran', [
            'pengeluaran' => TransaksiPengeluaran::latest()->get(),
        ]);
    }
}
