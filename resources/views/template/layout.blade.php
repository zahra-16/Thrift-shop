<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title', 'Shop Homepage')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet"
        href=
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<style>
    .box {
        height: 30px;
        display: flex;
        cursor: pointer;
        padding: 10px;
        background: #fff;
        border-radius: 30px;
        align-items: center;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3; )
    }

    .box:hover input {
        width: 400px;
    }

    .box input {
        width: 0;
        outline: none;
        border: none;
        font-weight: 500;
        transition: 0.8s;
        background: transparent;
    }

    .bg-header {
        background-image: linear-gradient(to bottom, rgba(63, 45, 17, 0.7), rgba(255, 255, 255, 0.5)), url('your-background-image.jpg');
        /* Add a background image */
        background-size: cover;
        background-position: center;
        height: 400px;
        /* Adjust height for a more dramatic effect */
    }

    .bg-header h1 {
        font-size: 56px;
        /* Increased size for better impact */
        font-weight: bold;
        color: #000000;
        /* text-shadow: 0 4px 20px rgba(0, 0, 0, 0.7); */
        /* Stronger shadow for better visibility */
        margin-bottom: 20px;
        /* Added spacing below the title */
    }

    .text-black {
        color: black;
        /* Ensure all text is black */
    }

    .bg-header p {
        font-size: 20px;
        /* Slightly larger text */
        color: #000000;
        /* text-shadow: 0 2px 10px rgba(0, 0, 0, 0.7); */
        margin-bottom: 30px;
        /* Increased spacing for better layout */
    }

    .btn-shop {
        background-color: #A1805E;
        color: #fff;
        border: none;
        padding: 12px 25px;
        /* Increased padding for a bolder button */
        font-size: 18px;
        border-radius: 30px;
        /* Rounded corners for a modern look */
        transition: background-color 0.3s, transform 0.3s;
        /* Smooth transitions */
    }

    .btn-shop:hover {
        background-color: #B99E8C;
        /* Darker shade on hover */
        transform: scale(1.05);
        /* Slightly enlarge the button on hover */
    }
</style>

<body>
    @if ($level == 'admin')
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/admin">Admin Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Toko</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/admin-semua-produk">Semua Produk</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/admin-populer-produk">Item Populer</a></li>
                                <li><a class="dropdown-item" href="/admin-produk-baru">Produk Baru</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Keranjang
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">@yield('header-title', 'Shop in style')</h1>
                    <p class="lead fw-normal text-white-50 mb-0">@yield('header-subtitle', 'With this shop homepage template')</p>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                @yield('content')
            </div>
        </main>
    @elseif($level == 'customers')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/main-dashboard">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" href="/dashboard2">Menu</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Toko</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/semua-produk">Semua Produk</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Kategori</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="">T Shirt</a></li>
                                <li><a class="dropdown-item" href="">Kemeja</a></li>
                                <li><a class="dropdown-item" href="">Celana Denim</a></li>
                                <li><a class="dropdown-item" href="">Jaket Kulit</a></li>
                                <li><a class="dropdown-item" href="">Topi</a></li>
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="box">
                    <input type="text" placeholder="Search...">
                    <a href="#">
                        <i class="bi bi-search" style="color: #9E999F"></i>
                    </a>
                </div>
                <form style="margin: 10px; background-color:#DFD8E0;" class="d-flex">
                    <a href="/keranjang" class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Keranjang
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </a>
                </form>
                <form style="margin: 10px; background-color:#DFD8E0;" class="d-flex">
                    <a href="/register" class="btn btn-outline-dark" type="submit">
                        logout
                    </a>
                </form>

                <form style="margin: 10px; background-color:#DFD8E0;"class="d-flex">
                    <a href="/pengaturan-customer" class="btn btn-outline-dark" type="submit">
                        <i class="bi bi-gear"></i>
                    </a>
                </form>
            </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-header py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-black">
                    <h1 class="display-4 fw-bolder">Selamat Datang di Toko Kami</h1>
                    <p class="lead fw-normal text-black-50 mb-4">Temukan produk-produk terbaru dan terbaik di toko kami
                    </p>
                    <a href="/semua-produk" class="btn btn-lg btn-shop" role="button">Belanja Sekarang</a>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                @yield('content')
            </div>
        </main>
    @endif
    <!-- Footer-->
    <footer class="py-5" style="background-color: #DFD8E0">
        <div class="container">
            <p class="m-0 text-center text-black">Copyright © Your Website 2024</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
