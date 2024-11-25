@extends('adminlte::page')

@section('title', 'Jamaah')

@section('content_header')
    <h1>Jamaah</h1>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif

    <a href="{{ route('jamaahs.create') }}" class="btn btn-primary mb-3">Tambah Jamaah</a> <!-- Tambahkan kelas mb-3 di sini -->
    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Order Number</th>
                <th>No Porsi</th>
                <th>Nama</th>
                <th>KTP</th>
                <th>No Passport</th>
                <th>Telpon</th>
                <th>Hotel</th>
                <th>Travel Muthowif</th>
                <th>Tanggal Kepulangan</th>
                <th>Alamat KTP</th>
                <th>Alamat Tujuan</th>
                <th>Aksi</th> <!-- Kolom Aksi ditambahkan di sini -->
            </tr>
        </thead>
        <tbody>
            @foreach($jamaahs as $jamaah)
                <tr>
                    <td><a href="{{ route('admin.orders.show', $jamaah->order_number) }}">{{ $jamaah->order_number }}</a></td>
                    <td>{{ $jamaah->no_porsi }}</td>
                    <td>{{ $jamaah->nama }}</td>
                    <td>{{ $jamaah->ktp }}</td>
                    <td>{{ $jamaah->no_passport }}</td>
                    <td>{{ $jamaah->telpon }}</td>
                    <td>{{ $jamaah->hotel }}</td>
                    <td>{{ $jamaah->travel_muthowif }}</td>
                    <td>{{ $jamaah->tanggal_kepulangan }}</td>
                    <td>{{ $jamaah->alamat_ktp }}</td>
                    <td>{{ $jamaah->alamat_tujuan }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('jamaahs.edit', $jamaah->id) }}" class="btn btn-primary">Edit</a>

                        <!-- Tombol Delete -->
                        <form action="{{ route('jamaahs.destroy', $jamaah->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-between align-items-center">
        <div>
            <form method="GET" action="{{ route('jamaahs.index') }}">
                <label for="per_page">Show</label>
                <select id="per_page" name="per_page" onchange="this.form.submit()">
                    <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                    <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>20</option>
                    <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                </select>
                <label for="per_page">entries</label>
            </form>
        </div>
        <div>
            {{ $jamaahs->appends(['per_page' => $perPage])->links('pagination::bootstrap-4') }}
        </div>




    <!-- Script untuk tombol Edit dan Delete -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.edit-btn').on('click', function() {
            var orderNumber = $(this).data('order-number');
            // Mengarahkan ke halaman edit
            window.location.href = "{{ url('admin/jamaahs/edit') }}/" + orderNumber;
        });

        $('.delete-btn').on('click', function() {
            var orderNumber = $(this).data('order-number');
            if (confirm('Apakah Anda yakin ingin menghapus data untuk Order Number: ' + orderNumber + '?')) {
                alert('Data dihapus');
                // Implementasi penghapusan data
            }
        });
    });
    </script>
@stop

@section('css')
    <style>
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
        .edit-btn, .delete-btn {
            padding: 5px 10px;
            color: white;
            border: none;
            cursor: pointer;
        }
        .edit-btn {
            background-color: blue;
        }
        .delete-btn {
            background-color: red;
        }
        
        
        .page-item {
            margin: 0 0.25rem;
        }
        .page-link {
            position: relative;
            display: block;
            padding: 0.5rem 0.75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #007bff;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }
        .page-link:hover {
            color: #0056b3;
            text-decoration: none;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }
        .page-link:focus {
            z-index: 3;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
        .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            cursor: auto;
            background-color: #fff;
            border-color: #dee2e6;
        }
    </style>
@stop
