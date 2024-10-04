@extends('template.layout')

@section('title', 'Kelola Produk')

@section('header-title', 'Kelola Kategori')
@section('header-subtitle', 'Tambahkan dan kelola kategori produk')

@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="list-group">
            <a href="/admin" class="list-group-item list-group-item-action">Dashboard</a>
            <a href="/daftar-pengguna" class="list-group-item list-group-item-action">Pengguna</a>
            <a href="/produk" class="list-group-item list-group-item-action">Produk</a>
            <a href="/admin-pesanan" class="list-group-item list-group-item-action">Pesanan</a>
            <a href="/kategori-produk" class="list-group-item list-group-item-action active">Kategori</a>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card mb-4">
            <div class="card-header">
                Tambah Kategori
            </div>
            <div class="card-body">
                <form method="POST" action="#">
                    @csrf
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="category_name" id="categoryName" placeholder="Masukkan nama kategori" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                </form>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                Daftar Kategori
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Static Example Data for Categories -->
                        <tr>
                            <td>1</td>
                            <td>Pakaian Pria</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm" onclick="alert('Hapus kategori?')">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pakaian Wanita</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm" onclick="alert('Hapus kategori?')">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pakaian Anak</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm" onclick="alert('Hapus kategori?')">Hapus</button>
                            </td>
                        </tr>
                        <!-- Tambahkan lebih banyak contoh kategori sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
