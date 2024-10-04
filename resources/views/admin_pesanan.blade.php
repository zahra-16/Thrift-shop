@extends('template.layout')

@section('title', 'Kelola Pesanan')

@section('header-title', 'Kelola Pesanan')
@section('header-subtitle', 'Kelola dan pantau pesanan serta pembayaran')

@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="list-group">
            <a href="/admin" class="list-group-item list-group-item-action">Dashboard</a>
            <a href="/daftar-pengguna" class="list-group-item list-group-item-action">Pengguna</a>
            <a href="/produk" class="list-group-item list-group-item-action">Produk</a>
            <a href="/admin-pesanan" class="list-group-item list-group-item-action active">Pesanan</a>
            <a href="/kategori-produk" class="list-group-item list-group-item-action">Kategori</a>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card table-responsive mb-4">
            <div class="card-header">
                Daftar Pesanan
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Pesanan</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Tanggal Pesanan</th>
                            <th>Status</th>
                            <th>Metode Pembayaran</th>
                            <th>Alamat Pengiriman</th>
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
                            <td>Jalan Merdeka No. 10, Jakarta</td>
                            <td>
                                <form action="/approve-order" method="POST" style="display:inline;" onsubmit="return confirm('Anda yakin ingin menyetujui pesanan ini?');">
                                    @csrf
                                    <input type="hidden" name="order_id" value="1">
                                    <button type="submit" class="btn btn-success btn-sm" title="Setujui pesanan">
                                        <i class="bi bi-check-circle"></i> Setujui
                                    </button>
                                </form>
                                <form action="/reject-order" method="POST" style="display:inline;" onsubmit="return confirm('Anda yakin ingin menolak pesanan ini?');">
                                    @csrf
                                    <input type="hidden" name="order_id" value="1">
                                    <button type="submit" class="btn btn-danger btn-sm" title="Tolak pesanan">
                                        <i class="bi bi-x-circle"></i> Tolak
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Gaun</td>
                            <td>1</td>
                            <td>Rp 500.000</td>
                            <td>2024-09-21</td>
                            <td>Disetujui</td>
                            <td>OVO</td>
                            <td>Jalan Pahlawan No. 5, Bandung</td>
                            <td>
                                <form action="/approve-order" method="POST" style="display:inline;" onsubmit="return confirm('Anda yakin ingin menyetujui pesanan ini?');">
                                    @csrf
                                    <input type="hidden" name="order_id" value="2">
                                    <button type="submit" class="btn btn-success btn-sm" title="Setujui pesanan">
                                        <i class="bi bi-check-circle"></i> Setujui
                                    </button>
                                </form>
                                <form action="/reject-order" method="POST" style="display:inline;" onsubmit="return confirm('Anda yakin ingin menolak pesanan ini?');">
                                    @csrf
                                    <input type="hidden" name="order_id" value="2">
                                    <button type="submit" class="btn btn-danger btn-sm" title="Tolak pesanan">
                                        <i class="bi bi-x-circle"></i> Tolak
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <!-- Tambahkan lebih banyak baris pesanan sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
