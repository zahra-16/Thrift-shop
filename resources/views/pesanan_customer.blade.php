@extends('template.layout')

@section('title', 'Pesanan Saya')

@section('header-title', 'Pesanan Saya')
@section('header-subtitle', 'Lihat status dan detail pesanan Anda')

@section('content')

    <style>
        .table-bordered {
            border: 1px solid #ddd;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
        }

        .fas {
            font-size: 16px;
            margin-right: 5px;
        }

        .pagination {
            justify-content: center;
        }

        .page-item {
            margin-right: 10px;
        }

        .page-link {
            color: #337ab7;
            text-decoration: none;
        }

        .page-link:hover {
            color: #23527c;
            text-decoration: underline;
        }
    </style>
    <section class="py-1">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Daftar Pesanan</h2>
            <div class="row mb-4">
                <div class="col-md-6">
                    <input type="search" class="form-control" placeholder="Cari pesanan...">
                </div>
                <div class="col-md-6 text-right">
                    <button class="btn btn-primary">Filter</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID Pesanan</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Tanggal Pesanan</th>
                            <th>Status</th>
                            <th>Metode Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh data pesanan -->
                        <tr>
                            <td>1</td>
                            <td>Kaos</td>
                            <td>2</td>
                            <td>Rp 400.000</td>
                            <td>2024-09-22</td>
                            <td>Menunggu Persetujuan</td>
                            <td>DANA</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-info btn-sm">
                                    <i class="fas fa-search"></i> Detail
                                </a>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
