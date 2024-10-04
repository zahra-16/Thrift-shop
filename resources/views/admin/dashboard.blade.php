@extends('template.layout')

@section('title', 'Admin Dashboard')

@section('header-title', 'Admin Dashboard')
@section('header-subtitle', 'Kelola situs Anda dengan mudah')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="/admin" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="/daftar-pengguna" class="list-group-item list-group-item-action">Pengguna</a>
                <a href="/produk" class="list-group-item list-group-item-action">Produk</a>
                <a href="/" class="list-group-item list-group-item-action">Pesanan</a>
                <a href="/kategori-produk" class="list-group-item list-group-item-action">Kategori</a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>
                <div class="card-body">
                    <h5 class="card-title">Admin Dashboard</h5>
                    <p class="card-text">Ini adalah dasbor admin tempat Anda dapat mengelola pengguna, produk, dan pesanan.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
