@extends('adminlte::page')

@section('title', 'Detail Order')

@section('content_header')
    <h1>Detail Order</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Order Number: {{ $jamaah->order_number }}</h3>
    </div>
    <div class="card-body">
        <h4>Nama: {{ $jamaah->nama }}</h4>
        <h5>Barang-Barang:</h5>
        <a href="{{ route('admin.barangs.create', ['jamaah_id' => $jamaah->id]) }}" class="btn btn-primary mb-3">Tambah Barang</a>
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>KG</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jamaah->barangs as $barang)
                    <tr>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->kg }}</td>
                        <td>{{ $barang->harga }}</td>
                        <td>
                            <a href="{{ route('admin.barangs.edit', $barang->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Update
                            </a>
                            <form action="{{ route('admin.barangs.destroy', $barang->id) }}" method="POST" class="delete-form" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <style>
        .card-header {
            background-color: #343a40;
            color: white;
        }
        .table thead th {
            background-color: #343a40;
            color: white;
        }
        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
        }
        .table-bordered th, .table-bordered td {
            border: 1px solid #dee2e6;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
@stop
