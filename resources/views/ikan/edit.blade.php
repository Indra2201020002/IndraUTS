@extends('layout.master')

@section('title', 'Ubah Ikan')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/ikan') }}">Ikan</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah Data Ikan</h4>
            </div>
        </div>
        <form action="{{ url('/ikan/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div>
                    <label class="form-label">Nama Ikan</label>
                    <input class="form-control" type="text" name="nama" value="{{ $data->nama }}">
                </div>
                <div>
                    <label class="form-label">Harga Ikan</label>
                    <input class="form-control" type="text" name="harga" value="{{ $data->harga }}">
                </div>
                <div>
                    <label class="form-label">Jenis Ikan</label>
                    <select class="form-select" name="jenisikan">
                        @foreach ($jenisikan as $j)
                        <option {{ $data->jenisikan_id == $j->id ? 'selected' : '' }} value="{{ $j->id }}">{{ $j->nama }}</option>
                       @endforeach
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection