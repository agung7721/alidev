@extends('adminlte::page')

@section('title', 'Tambah Barang')

@section('content_header')
    <h1>Tambah Barang</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Form Tambah Barang</h3>
    </div>
    <div class="card-body">
        <form id="barangForm" action="{{ route('admin.barangs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" required>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required>
            </div>
            <div class="form-group">
                <label for="kg">KG</label>
                <input type="number" name="kg" class="form-control" placeholder="KG" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" class="form-control" placeholder="Harga" required>
            </div>
            <input type="hidden" name="jamaah_id" value="{{ $jamaah_id }}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Informasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Data barang berhasil diinput.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="closeModalButton">OK</button>
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
