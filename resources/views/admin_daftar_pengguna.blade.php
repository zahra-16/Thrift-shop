@extends('template.layout')

@section('title', 'Kelola Pengguna')

@section('header-title', 'Kelola Pengguna')
@section('header-subtitle', 'Daftar pengguna yang telah login dan opsi untuk logout')

@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="list-group">
            <a href="/admin" class="list-group-item list-group-item-action">Dashboard</a>
            <a href="/daftar-pengguna" class="list-group-item list-group-item-action active">Pengguna</a>
            <a href="/produk" class="list-group-item list-group-item-action">Produk</a>
            <a href="/admin-pesanan" class="list-group-item list-group-item-action">Pesanan</a>
            <a href="/kategori-produk" class="list-group-item list-group-item-action">Kategori</a>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card table-responsive mb-4">
            <div class="card-header">
                Pengguna yang Telah Login
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh data pengguna -->
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john.doe@example.com</td>
                            <td>
                                <form action="/logout-user" method="POST" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="user_id" value="1">
                                    <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                                </form>
                                <form action="/block-user" method="POST" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="user_id" value="1">
                                    <button type="submit" class="btn btn-warning btn-sm">Block</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane.smith@example.com</td>
                            <td>
                                <form action="/logout-user" method="POST" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="user_id" value="2">
                                    <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                                </form>
                                <form action="/block-user" method="POST" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="user_id" value="2">
                                    <button type="submit" class="btn btn-warning btn-sm">Block</button>
                                </form>
                            </td>
                        </tr>
                        <!-- Tambahkan lebih banyak baris pengguna sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
