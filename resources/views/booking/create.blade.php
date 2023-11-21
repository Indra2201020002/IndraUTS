@extends('layout.master')

@section('title', 'Tambah Booking')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/booking') }}">Pemesanan Ikan</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Tambah List Pesanan</h4>
            </div>
        </div>
        <form action="{{ url('/booking') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">Nama Ikan</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div>
                    <label class="form-label">Jumlah</label>
                    <input class="form-control" type="text" name="jumlah">
                </div>
                <div>
                    <label class="form-label">Jenis Ikan</label>
                    <select class="form-select" name="jenisikan">
                        <option value="1">Air Tawar</option>
                        <option value="2">Laut</option>
                        <option value="3">Air Payau</option>
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection
