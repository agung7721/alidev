@extends('adminlte::page')

@section('title', 'Edit Barang')

@section('content_header')
    <h1>Edit Barang</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.barangs.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control" value="{{ $barang->kode_barang }}" required>
            </div>

            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" required>
            </div>

            <div class="form-group">
                <label for="kg">KG</label>
                <input type="number" name="kg" class="form-control" value="{{ $barang->kg }}" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" class="form-control" value="{{ $barang->harga }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Barang</button>
            <a href="{{ route('admin.jamaahs.show', $barang->jamaah_id) }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@stop
