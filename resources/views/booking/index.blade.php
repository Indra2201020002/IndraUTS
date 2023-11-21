@extends('layout.master')

@section('title', 'booking')

@section('breadcrumb')
    <li class="breadcrumb-item active">Pemesanan Ikan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Tabel Pemesanan Ikan</h4>
                </div>
                <div class="col-2">
                    <a class="btn btn-sm btn-primary float-end" href="{{ url('/booking/create') }}">Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama Ikan</th>
                        <th scope="col">Jenis Ikan</th>
                        <th scope="col">Jumlah </th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->jenisikan_nama }}</td>
                            <td>{{ $d->jumlah }}</td>
                            <td class="float-end">
                                <a class="btn btn-sm btn-info" href="{{ url('/booking/' . $d->id) }}">Show</a>
                                <a class="btn btn-sm btn-warning"
                                    href="{{ url('/booking/' . $d->id . '/edit') }}">Edit</a>
                                <form style="display: inline;" action="{{ url('/booking/' . $d->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
