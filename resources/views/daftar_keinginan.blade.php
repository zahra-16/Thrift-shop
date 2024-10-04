@extends('template.layout')

@section('title', 'Daftar Keinginan')

@section('header-title', 'Daftar Keinginan')
@section('header-subtitle', 'Lihat produk yang ingin Anda beli')

@section('content')
    <style>
        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .table th {
            background-color: #f7f7f7;
        }

        .table td {
            border-top: 1px solid #ddd;
        }

        .btn-group {
            display: flex;
            justify-content: center;
        }

        .btn-outline-dark {
            background-color: #fff;
            color: #333;
            border: 1px solid #333;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-outline-dark:hover {
            background-color: #333;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .py-5 {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .px-4 {
            padding-left: 20px;
            padding-right: 20px;
        }

        .px-lg-5 {
            padding-left: 40px;
            padding-right: 40px;
        }

        .mt-5 {
            margin-top: 50px;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .fw-bolder {
            font-weight: bold;
        }

        .mb-4 {
            margin-bottom: 20px;
        }
    </style>
    <section class="py-1">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Produk dalam Daftar Keinginan</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh data produk dalam daftar keinginan -->
                        <tr>
                            <td>1</td>
                            <td>Kaos Trendy</td>
                            <td>Rp 150.000</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="#" class="btn btn-outline-dark btn-sm">Tambah ke Keranjang</a>
                                    <button class="btn btn-danger btn-sm"
                                        onclick="alert('Hapus dari daftar keinginan?')">Hapus</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kemeja Populer</td>
                            <td>Rp 450.000</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="#" class="btn btn-outline-dark btn-sm">Tambah ke Keranjang</a>
                                    <button class="btn btn-danger btn-sm"
                                        onclick="alert('Hapus dari daftar keinginan?')">Hapus</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sepatu Stylish</td>
                            <td>Rp 750.000</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="#" class="btn btn-outline-dark btn-sm">Tambah ke Keranjang</a>
                                    <button class="btn btn-danger btn-sm"
                                        onclick="alert('Hapus dari daftar keinginan?')">Hapus</button>
                                </div>
                            </td>
                        </tr>
                        <!-- Tambahkan lebih banyak produk sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection