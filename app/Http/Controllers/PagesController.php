<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboardAdmin()
    {
        return view('admin.dashboard', ['level' => 'admin']);
    }

    public function register()
    {
        return view('auth.register', ['level' => 'customers']);
    }

    public function pengaturanCus()
    {
        return view('pengaturan_customer', ['level' => 'customers']);
    }

    public function login()
    {
        return view('auth.login', ['level' => 'customers']);
    }

    public function dashboard()
    {
        return view('dashboard', ['level' => 'customers']);
    }

    public function Adminproduk()
    {
        return view('admin_produk', ['level' => 'admin']);
    }

    public function Adminpesanan()
    {
        return view('admin_pesanan', ['level' => 'admin']);
    }

    public function Allprodukadmin()
    {
        return view('semua_produk', ['level' => 'admin']);
    }

    public function Allprodukcustomers()
    {
        return view('semua_produk', ['level' => 'customers']);
    }

    public function Adminpengguna()
    {
        return view('admin_daftar_pengguna', ['level' => 'admin']);
    }

    public function Adminkategoriproduk()
    {
        return view('admin_kategori_produk', ['level' => 'admin']);
    }

    public function Adminprodukpopuler()
    {
        return view('populer_produk', ['level' => 'admin']);
    }

    public function produkpopuler()
    {
        return view('populer_produk', ['level' => 'customers']);
    }

    public function Adminprodukbaru()
    {
        return view('produk_baru', ['level' => 'admin']);
    }

    public function Admintentang()
    {
        return view('admin_tentang', ['level' => 'admin']);
    }

    public function Cusprodukbaru()
    {
        return view('cus_produk_baru', ['level' => 'customers']);
    }

    //customer

    public function pesanan()
    {
        return view('pesanan_customer', ['level' => 'customers']);
    }

    public function daftarkeinginan()
    {
        return view('daftar_keinginan', ['level' => 'customers']);
    }

    public function detailakun()
    {
        return view('customer_detail_akun', ['level' => 'customers']);
    }

    public function keranjang()
    {
        return view('keranjang_customer', ['level' => 'customers']);
    }

    public function maindashboard()
    {
        return view('dashboard_main', ['level' => 'customers']);
    }
}
