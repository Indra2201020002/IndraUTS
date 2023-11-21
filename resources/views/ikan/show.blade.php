@extends('layout.master')

@section('title', 'Ubah Ikan')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/ikan') }}">Ikan</a></li>
    <li class="breadcrumb-item active">Show</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Data Ikan</h4>
            </div>
        </div>
        <a>Nama Ikan  : {{$data->nama}}</a>
        <a>Jenis Ikan  : {{$data->jenisikan_nama}}</a>
        <a>Harga Ikan  : {{$data->harga}}</a>
    </div>
@endsection