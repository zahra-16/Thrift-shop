@extends('template.layout')

@section('title', 'Pengaturan - Custommerce')

@section('header-title', 'Pengaturan Akun')
@section('header-subtitle', 'Sesuaikan pengaturan akun Anda')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h2 class="mb-4">Pengaturan Akun</h2>
            <form action="#" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="full_name">Nama Lengkap</label>
                    <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Masukkan nama lengkap Anda" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email Anda" required>
                </div>
                <div class="form-group mb-3">
                    <label for="username">Nama Pengguna</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Pilih nama pengguna" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Kata Sandi Baru</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Buat kata sandi baru">
                </div>
                <div class="form-group mb-3">
                    <label for="confirm_password">Konfirmasi Kata Sandi</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Konfirmasi kata sandi baru">
                </div>
                <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
            </form>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Opsi Tambahan</h5>
                </div>
                <div class="card-body">
                    <h6>Notifikasi</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="email_notifications" checked>
                        <label class="form-check-label" for="email_notifications">Email Notifikasi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sms_notifications">
                        <label class="form-check-label" for="sms_notifications">SMS Notifikasi</label>
                    </div>
                    
                    <h6 class="mt-4">Pengaturan Lainnya</h6>
                    <a href="#" class="btn btn-outline-danger btn-block">Hapus Akun</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
