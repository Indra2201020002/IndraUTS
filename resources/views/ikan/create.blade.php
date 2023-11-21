@extends('layout.master')

@section('title', 'Tambah Ikan')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/ikan') }}">Ikan</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Tambah List Ikan</h4>
            </div>
        </div>
        <form action="{{ url('/ikan') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">Nama Ikan</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div>
                    <label class="form-label">Harga Ikan</label>
                    <input class="form-control" type="text" name="harga">
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
