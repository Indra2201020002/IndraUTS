@extends('layout.master')

@section('title', 'Ubah Booking')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/booking') }}">Pemesanan Ikan</a></li>
    <li class="breadcrumb-item active">Show</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Data Pesanan</h4>
            </div>
        </div>
        <a>Nama Ikan  : {{$data->nama}}</a>
        <a>Jenis Ikan  : {{$data->jenisikan_nama}}</a>
        <a>Jumlah Ikan  : {{$data->jumlah}}</a>
    </div>
@endsection