<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{

    public function index()
    {
        $psn = DB::table('booking')
        ->select("booking.id", "booking.nama", "booking.jumlah", "jenisikan_id", "jenisikan.nama AS jenisikan_nama")
        ->join('jenisikan', 'jenisikan.id', '=', 'booking.jenisikan_id')
        ->get();

        $jenisikan = DB::table('jenisikan')->get();
        return view('booking.index', ['data' => $psn]);
    }

    public function create()
    {
        $jenisikan = DB::table('jenisikan')->get();
        return view('booking.create' , ['jenisikan' => $jenisikan]);
    }


    public function store(Request $request)
    {
        DB::table ('booking')->insert([
            'nama'=>$request->nama,
            'jumlah'=>$request->jumlah,
            'jenisikan_id' => $request->jenisikan,
        ]);
        return redirect(url('/booking'));
    }

    public function update(Request $request,$id)
    {
        DB::table ('booking')
        ->where('id',$id)
        ->update([
            'nama'=>$request->nama,
            'jumlah'=>$request->jumlah,
            'jenisikan_id' => $request->jenisikan,
        ]);
        return redirect(url('/booking'));
    }

    public function edit($id)
    {
        $psn = DB::table('booking')
        ->select("booking.id", "booking.nama", "booking.jumlah", "jenisikan_id", "jenisikan.nama AS jenisikan_nama")
        ->join('jenisikan', 'jenisikan.id', '=', 'booking.jenisikan_id')
        ->where("booking.id",$id)
        ->first();
        $jenisikan = DB::table('jenisikan')->get();

        return view('booking.edit', ['data' => $psn, 'id' => $id, 'jenisikan' => $jenisikan]);
    }

    public function destroy($id)
    {
        DB::table ('booking')
        ->where('id',$id)
        ->delete();

        return redirect(url('/booking'));
    }

    public function show($id)
    {
        $psn = DB::table('booking')
        ->select("booking.id", "booking.nama", "booking.jumlah", "jenisikan_id", "jenisikan.nama AS jenisikan_nama")
        ->join('jenisikan', 'jenisikan.id', '=', 'booking.jenisikan_id')
        ->where('booking.id', $id)
        ->first();

        $jenisikan = DB::table('jenisikan')->get();
        return view('booking.show', ['data' => $psn, 'id' => $id, 'jenisikan' => $jenisikan]);
    }
}