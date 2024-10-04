<!-- resources/views/customer/dashboard.blade.php -->
@extends('template.layout')

@section('title', 'Customer Dashboard')

@section('header-title', 'Customer Dashboard')
@section('header-subtitle', 'Kelola akun dan pesanan Anda')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="/main-dashboard" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="/pesanan" class="list-group-item list-group-item-action">Pesanan</a>
                <a href="/akun" class="list-group-item list-group-item-action">Akun Detail</a>
                <a href="/keinginan" class="list-group-item list-group-item-action">Daftar Keinginan</a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>
                <div class="card-body">
                    <h5 class="card-title">Selamat Datang!!, Customer</h5>
                    <p class="card-text">Di sini Anda dapat melihat pesanan terbaru Anda, memperbarui detail akun Anda, dan mengelola daftar keinginan Anda.</p>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    Pesanan Terbaru
                </div>
                <div class="card-body">
                    <p class="card-text">Anda tidak memiliki pesanan terbaru.</p>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    <p class="card-text">Detail Akun</p>

                </div>
                <div class="card-body">
                    <p class="card-text">Perbarui detail akun Anda di sini.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
