<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Custommerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg mb-4">
                    <div class="card-header">
                        <h3 class="text-center">Buat Akun</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="form-group mb-3">
                                <label for="full_name" class="form-label">Nama Lengkap *</label>
                                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Masukkan nama lengkap Anda" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email Anda" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="username" class="form-label">Nama Pengguna *</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Pilih nama pengguna" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Kata Sandi *</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Buat kata sandi" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi *</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Konfirmasi kata sandi Anda" required>
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-primary btn-block" type="submit">Daftar</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p>Sudah memiliki akun? <a href="/login" class="text-primary">Masuk di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
