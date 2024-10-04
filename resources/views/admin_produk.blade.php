@extends('template.layout')

@section('title', 'Kelola Produk')

@section('header-title', 'Kelola Produk')
@section('header-subtitle', 'Tambahkan dan kelola produk serta kategori pakaian')

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-12 mb-3">
        <div class="list-group">
            <a href="/admin" class="list-group-item list-group-item-action">Dashboard</a>
            <a href="/daftar-pengguna" class="list-group-item list-group-item-action">Pengguna</a>
            <a href="/produk" class="list-group-item list-group-item-action active">Produk</a>
            <a href="/admin-pesanan" class="list-group-item list-group-item-action">Pesanan</a>
            <a href="/kategori-produk" class="list-group-item list-group-item-action">Kategori</a>
        </div>
    </div>
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="card mb-4">
            <div class="card-header">
                Tambah Produk Baru
            </div>
            <div class="card-body">
                <form method="POST" action="#">
                    @csrf
                    <div class="mb-3">
                        <label for="productName" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="name" id="productName" placeholder="Masukkan nama produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="productCategory" class="form-label">Kategori</label>
                        <select class="form-select" name="category_id" id="productCategory" required>
                            <option selected>Pilih kategori</option>
                            <option value="1">Pakaian Pria</option>
                            <option value="2">Pakaian Wanita</option>
                            <option value="3">Pakaian Anak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Harga</label>
                        <input type="number" class="form-control" name="price" id="productPrice" placeholder="Masukkan harga produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="productDiscount" class="form-label">Diskon (%)</label>
                        <input type="number" class="form-control" name="discount" id="productDiscount" placeholder="Masukkan diskon (jika ada)">
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="description" id="productDescription" rows="3" placeholder="Masukkan deskripsi produk"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Produk</button>
                </form>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                Kategori
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
        
        <div class="card table-responsive mb-4">
            <div class="card-header">
                Produk
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Static Example Data for Products -->
                        <tr>
                            <td>1</td>
                            <td>Kaos</td>
                            <td>Pakaian Pria</td>
                            <td>Rp 200.000</td>
                            <td>10%</td>
                            <td>Kaos katun yang nyaman</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm" onclick="alert('Hapus produk?')">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Gaun</td>
                            <td>Pakaian Wanita</td>
                            <td>Rp 500.000</td>
                            <td>15%</td>
                            <td>Gaun malam yang elegan</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm" onclick="alert('Hapus produk?')">Hapus</button>
                            </td>
                        </tr>
                        <!-- Tambahkan lebih banyak contoh produk sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
