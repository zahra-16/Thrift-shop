@extends('template.layout')

@section('title', 'Detail Akun')

@section('header-title', 'Detail Akun')
@section('header-subtitle', 'Perbarui informasi akun Anda')

@section('content')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #9E999F;
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            padding: 20px;
            background-color: white;
            border-radius: 0 0 10px 10px;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #B99E8C;
            box-shadow: 0 0 5px #9E999F;
        }

        .btn-primary {
            background-color: #B99E8C;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #A1805E;
        }

        .table th {
            background-color: #e9ecef;
            color: #343a40;
        }

        .table td {
            vertical-align: middle;
        }

        .profile-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #B99E8C;
            margin-bottom: 15px;
        }

        .text-secondary {
            color: #6c757d;
        }
    </style>

    <section class="py-1">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h2 class="mb-0">Detail Akun</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <img src="https://via.placeholder.com/150" alt="Gambar Profil" class="profile-image">
                                    <p class="text-secondary">Ganti Foto Profil</p>
                                </div>
                                <div class="col-md-8">
                                    <form method="POST" action="/update-akun">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" name="username" id="username"
                                                placeholder="Masukkan username" value="" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Masukkan nama lengkap" value="" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Masukkan email" value="" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Perbarui Akun</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Account Information Section -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h2 class="mb-0">Keterangan Akun</h2>
                        </div>
                        <div class="card-body text-center">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Informasi</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Username</td>
                                        <td>Nuuayyy</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>Apmnaynuuu</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>userjkhkh@user.com</td>
                                    </tr>
                                    <!-- Tambahkan lebih banyak informasi akun sesuai kebutuhan -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
