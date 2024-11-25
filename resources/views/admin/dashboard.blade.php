@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>

@stop

@section('content')
<div class="card">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-custom bg-users-visit">
                    <div class="card-body">
                        <h5 class="card-title">Jamaah</h5>
                        <p class="card-value">{{ \App\Models\Jamaah::count() }}</p>
                        <a href="{{ route('jamaahs.index') }}" class="btn btn-primary">View</a>
                        <p class="card-change">+2.35%</p>
                    </div>
                    <div class="card-footer">
                        <p>Last Week 44,700</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom bg-sessions">
                    <div class="card-body">
                        <h5 class="card-title">Sessions</h5>
                        <p class="card-value">74,137</p>
                        <p class="card-change">-2.35%</p>
                    </div>
                    <div class="card-footer">
                        <p>Last Week 84,709</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom bg-time-on-site">
                    <div class="card-body">
                        <h5 class="card-title">Time On-Site</h5>
                        <p class="card-value">38,085</p>
                        <p class="card-change">+1.35%</p>
                    </div>
                    <div class="card-footer">
                        <p>Last Week 37,894</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom bg-bounce-rate">
                    <div class="card-body">
                        <h5 class="card-title">Bounce Rate</h5>
                        <p class="card-value">49.10%</p>
                        <p class="card-change">-0.35%</p>
                    </div>
                    <div class="card-footer">
                        <p>Last Week 50.01%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .card-custom {
            border-radius: 10px;
            color: white;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .card-custom:hover {
            transform: scale(1.05);
        }
        .card-custom .card-title {
            font-size: 1.5rem;
        }
        .card-custom .card-value {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .card-custom .card-change {
            font-size: 1rem;
        }
        .card-custom .card-footer {
            font-size: 0.9rem;
        }
        .bg-users-visit {
            background-color: #00c6ff;
        }
        .bg-sessions {
            background-color: #a64dff;
        }
        .bg-time-on-site {
            background-color: #007bff;
        }
        .bg-bounce-rate {
            background-color: #ff00ff;
        }
    </style>
@stop
