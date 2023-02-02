<?php

namespace App\Http\Controllers;

use App\Models\Cows;
use Illuminate\Http\Request;
use App\Models\Detail_status;
use App\Models\Status_kesehatan;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cows = Cows::all();
        $cow = Detail_status::all();
        $status = Status_kesehatan::all();

        $sehat = Detail_status::where([['status_id','=', 1],['tanggal','=',date("Y-m-d")]])->get();
        $sakit = Detail_status::where([['status_id','=', 2],['tanggal','=',date("Y-m-d")]])->get();
        $distribusi = Detail_status::where([['status_id','=', 3],['tanggal','=',date("Y-m-d")]])->get();
        // dd(Status_kesehatan::find($status->first->status_id));
        // dd($sakit);
        return view('statuspage', compact('status','cow','cows','sehat','sakit','distribusi'));
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
        // dd($request);
        $validated = $request->validate([
            "kode_sapi" => "required",
            "status_id" => "required",
            "tanggal" => "required"
        ]);
        Detail_status::create($validated);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Detail_status::where('kode_sapi',$id)->get()->first()->delete();
        return back();
    }
}
