@extends('adminlte::page')

@section('title', 'Tambah Jamaah')

@section('content_header')
    <h1>Tambah Jamaah</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Jamaah</h3>
                </div>
                <form action="{{ route('jamaahs.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="no_porsi">No Porsi</label>
                            <input type="text" class="form-control" id="no_porsi" name="no_porsi" placeholder="Masukkan No Porsi" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="ktp">KTP</label>
                            <input type="text" class="form-control" id="ktp" name="ktp" placeholder="Masukkan No KTP" required>
                        </div>
                        <div class="form-group">
                            <label for="no_passport">No Passport</label>
                            <input type="text" class="form-control" id="no_passport" name="no_passport" placeholder="Masukkan No Passport" required>
                        </div>
                        <div class="form-group">
                            <label for="telpon">Telpon</label>
                            <input type="text" class="form-control" id="telpon" name="telpon" placeholder="Masukkan No Telpon" required>
                        </div>
                        <div class="form-group">
                            <label for="hotel">Hotel</label>
                            <input type="text" class="form-control" id="hotel" name="hotel" placeholder="Masukkan Nama Hotel" required>
                        </div>
                        <div class="form-group">
                            <label for="travel_muthowif">Travel Muthowif</label>
                            <input type="text" class="form-control" id="travel_muthowif" name="travel_muthowif" placeholder="Masukkan Nama Travel Muthowif" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_kepulangan">Tanggal Kepulangan</label>
                            <input type="date" class="form-control" id="tanggal_kepulangan" name="tanggal_kepulangan" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_ktp">Alamat KTP</label>
                            <input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_tujuan">Alamat Tujuan</label>
                            <input type="text" class="form-control" id="alamat_tujuan" name="alamat_tujuan" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
        .card-header {
            background-color: #343a40;
            color: white;
        }
        .form-group label {
            font-weight: bold;
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

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('barangForm');
            let orderNumber = null;

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                const formData = new FormData(form);
                fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        orderNumber = data.order_number;
                        $('#successModal').modal('show');
                    }
                })
                .catch(error => console.error('Error:', error));
            });

            document.getElementById('closeModalButton').addEventListener('click', function () {
                if (orderNumber) {
                    window.location.href = `/admin/orders/${orderNumber}`;
                }
            });
        });
    </script>
@stop


           
