<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

use function Ramsey\Uuid\v2;

Route::get('/dashboard', function () {
    return redirect('/main-dashboard');
});

Route::get('/lay', function () {
    return view('layout');
});

//auth
Route::get('/register', [PagesController::class, 'register'])->name('register');
Route::get('/login', [PagesController::class, 'login'])->name('login');

//admin
Route::get('/admin', [PagesController::class, 'dashboardAdmin'])->name('dashboard');
//pelanggan
Route::get('/dashboard2', [PagesController::class, 'dashboard'])->name('dashboard');

//admin
Route::get('/produk', [PagesController::class, 'Adminproduk'])->name('produk.index');
Route::get('/admin-pesanan', [PagesController::class, 'Adminpesanan'])->name('adminpesanan.index');
Route::get('/admin-semua-produk', [PagesController::class, 'Allprodukadmin'])->name('produk.index');
Route::get('/semua-produk', [PagesController::class, 'Allprodukcustomers'])->name('produk.index');
Route::get('/daftar-pengguna', [PagesController::class, 'Adminpengguna'])->name('pengguna.index');
Route::get('/kategori-produk', [PagesController::class, 'Adminkategoriproduk'])->name('kategori.index');
Route::get('/admin-populer-produk', [PagesController::class, 'Adminprodukpopuler'])->name('populer.index');
Route::get('/populer-produk', [PagesController::class, 'produkpopuler'])->name('populer.index');
Route::get('/admin-produk-baru', [PagesController::class, 'Adminprodukbaru'])->name('produkbaru.index');
Route::get('/admin-tentang', [PagesController::class, 'Admintentang'])->name('tentang.index');
Route::get('/produk-baru', [PagesController::class, 'Cusprodukbaru'])->name('produkbaru.index');

//customer
Route::get('/pesanan', [PagesController::class, 'pesanan'])->name('pesanan.index');
Route::get('/keinginan', [PagesController::class, 'daftarkeinginan'])->name('keinginan.index');
Route::get('/akun', [PagesController::class, 'detailakun'])->name('akun.index');
Route::get('/keranjang', [PagesController::class, 'keranjang'])->name('keranjang.index');
Route::get('/main-dashboard', [PagesController::class, 'maindashboard'])->name('maindashbard.index');
Route::get('/pengaturan-customer', [PagesController::class, 'pengaturanCus'])->name('pengaturan.index');
