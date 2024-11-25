@extends('adminlte::page')

@section('title', 'Barang')

@section('content_header')
    <h1>Barang</h1>
@stop

@section('content')
    <a href="{{ route('admin.barangs.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="bg-dark text-white">
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>KG</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangs as $barang)
                    <tr>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->kg }}</td>
                        <td>Rp {{ number_format($barang->harga, 2, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

<style>
.table-hover tbody tr:hover {
    background-color: #f8f9fa; /* Warna abu-abu terang untuk hover */
}
</style>
