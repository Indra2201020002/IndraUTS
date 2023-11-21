<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IkanController extends Controller
{

    public function index()
    {
        $ikn = DB::table('ikan')
        ->select("ikan.id", "ikan.nama", "ikan.harga", "jenisikan_id", "jenisikan.nama AS jenisikan_nama")
        ->join('jenisikan', 'jenisikan.id', '=', 'ikan.jenisikan_id')
        ->get();

        $jenisikan = DB::table('jenisikan')->get();
        return view('ikan.index', ['data' => $ikn]);
    }

    public function create()
    {
        $jenisikan = DB::table('jenisikan')->get();
        return view('ikan.create' , ['jenisikan' => $jenisikan]);
    }


    public function store(Request $request)
    {
        DB::table ('ikan')->insert([
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'jenisikan_id' => $request->jenisikan,
        ]);
        return redirect(url('/ikan'));
    }

    public function update(Request $request,$id)
    {
        DB::table ('ikan')
        ->where('id',$id)
        ->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jenisikan_id' => $request->jenisikan,
        ]);
        return redirect(url('/ikan'));
    }

    public function edit($id)
    {
        $ikn = DB::table('ikan')
        ->select("ikan.id", "ikan.nama", "ikan.harga", "jenisikan_id", "jenisikan.nama AS jenisikan_nama")
        ->join('jenisikan', 'jenisikan.id', '=', 'ikan.jenisikan_id')
        ->where("ikan.id",$id)
        ->first();

        $jenisikan = DB::table('jenisikan')->get();
        return view('ikan.edit', ['data' => $ikn, 'id' => $id, 'jenisikan' => $jenisikan]);
    }


    public function show($id)
    {
        $ikn = DB::table('ikan')
        ->select("ikan.id", "ikan.nama", "ikan.harga", "jenisikan_id", "jenisikan.nama AS jenisikan_nama")
        ->join('jenisikan', 'jenisikan.id', '=', 'ikan.jenisikan_id')
        ->where('ikan.id', $id)
        ->first();

        $jenisikan = DB::table('jenisikan')->get();
        return view('ikan.show', ['data' => $ikn, 'id' => $id, 'jenisikan' => $jenisikan]);
    }

    public function destroy($id)
    {
        DB::table('ikan')
        ->where('id',$id)
        ->delete();

        return redirect(url('/ikan'));
    }
}