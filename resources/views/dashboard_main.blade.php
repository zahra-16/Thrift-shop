@extends('template.layout')

@section('title', 'Belanja dengan Gaya')

@section('header-title', 'Belanja dengan Gaya')
@section('header-subtitle', 'Dengan halaman utama toko ini')

@section('content')
    <!-- Bagian-->
    <section class="py-5">

        <style>
            .btn-hover:hover {
                background-color: rgb(255, 227, 232);
                color: white;
                border-color: pink;
            }

            div span {
                margin-left: 10px;
                margin-right: 10px;
            }

            .cardicon {
                border-radius: 10px;
                box-shadow: 10px 20px 20px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease-in-out;
                text-align: center;
                /* Menengahkan isi card */
            }

            .cardicon:hover {
                transform: scale(1.05);
                /* Menambahkan efek hover */
            }

            .cardicon-body {
                background-color: #B99E8C;
                padding: 20px;
                border-radius: 10px;
            }

            .cardicon-body i {
                font-size: 50px;
                color: #000;
                /* Ubah warna ikon menjadi hitam */
                margin-bottom: 10px;
                /* Memberi jarak antara ikon dan teks */
            }

            .cardicon-body p {
                font-size: 14px;
                color: #000;
                /* Ubah warna teks menjadi hitam */
                margin: 0;
                font-weight: bold;
            }

            .container {
                margin-top: 20px;
            }


            .bi-truck {
                font-size: 50px;
                transition: all 0.3s ease-in-out;
            }

            .bi-truck:hover {
                font-size: 55px;
                color: #ffffff;
            }

            .bi-percent:hover {
                font-size: 55px;
                color: #ffffff;
            }

            .bi-cash:hover {
                font-size: 55px;
                color: #ffffff;
            }

            .bi-tag:hover {
                font-size: 55px;
                color: #ffffff;
            }
        </style>

        <div class="container text-center">

            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-3 mb-3">
                        <div class="cardicon">
                            <div class="cardicon-body">
                                <i class="bi bi-truck"></i>
                                <p>Gratis Ongkir</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="cardicon">
                            <div class="cardicon-body">
                                <i class="bi bi-cash"></i>
                                <p>Pembayaran Aman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="cardicon">
                            <div class="cardicon-body">
                                <i class="bi bi-percent"></i>
                                <p>Diskon Melimpah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="cardicon">
                            <div class="cardicon-body">
                                <i class="bi bi-tag"></i>
                                <p>Harga Terjangkau</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #f7f6f8">
                        <!-- Gambar produk-->
                        <img class="card-img-top" src="/baju.png" alt="..." />
                        <!-- Detail produk-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama produk-->
                                <h5 class="fw-bolder">Kaos Hitam</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Harga produk-->
                                Rp 250.000
                            </div>

                        </div>
                        <!-- Aksi produk-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto" href="#"
                                    onmouseover="this.style.backgroundColor='#A1805E'; this.style.color='white'"
                                    onmouseout="this.style.backgroundColor=''; this.style.color=''">Tambah ke keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #f7f6f8">
                        <!-- Lencana diskon-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Diskon
                        </div>
                        <!-- Gambar produk-->
                        <img class="card-img-top" src="bajuputih.png" alt="..." />
                        <!-- Detail produk-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama produk-->
                                <h5 class="fw-bolder">Kaos Putih</h5>
                                <!-- Ulasan produk-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Harga produk-->
                                <span class="text-muted text-decoration-line-through">Rp 250.000</span>
                                Rp 180.000
                            </div>
                        </div>
                        <!-- Aksi produk-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto" href="#"
                                    onmouseover="this.style.backgroundColor='#A1805E'; this.style.color='white'"
                                    onmouseout="this.style.backgroundColor=''; this.style.color=''">Tambah ke keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #f7f6f8">
                        <!-- Lencana diskon-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Diskon
                        </div>
                        <!-- Gambar produk-->
                        <img class="card-img-top" src="jeans1.png" alt="..." />
                        <!-- Detail produk-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama produk-->
                                <h5 class="fw-bolder">Denim Pria Biru</h5>
                                <!-- Harga produk-->
                                <span class="text-muted text-decoration-line-through">Rp 800.000</span>
                                Rp 400.000
                            </div>
                        </div>
                        <!-- Aksi produk-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto" href="#"
                                    onmouseover="this.style.backgroundColor='#A1805E'; this.style.color='white'"
                                    onmouseout="this.style.backgroundColor=''; this.style.color=''">Tambah ke keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #f7f6f8">
                        <!-- Gambar produk-->
                        <img class="card-img-top" src="jeanshtm.png" alt="..." />
                        <!-- Detail produk-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama produk-->
                                <h5 class="fw-bolder">Denim Selvedge Redline Jepang</h5>
                                <!-- Ulasan produk-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Harga produk-->
                                Rp 2.000.000
                            </div>
                        </div>
                        <!-- Aksi produk-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto" href="#"
                                    onmouseover="this.style.backgroundColor='#A1805E'; this.style.color='white'"
                                    onmouseout="this.style.backgroundColor=''; this.style.color=''">Tambah ke keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #f7f6f8">
                        <!-- Lencana diskon-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Diskon
                        </div>
                        <!-- Gambar produk-->
                        <img class="card-img-top" src="jaketpriabrown.png" alt="..." />
                        <!-- Detail produk-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama produk-->
                                <h5 class="fw-bolder">Jaket Kulit Pria - Brown</h5>
                                <!-- Harga produk-->
                                <span class="text-muted text-decoration-line-through">Rp 3.500.000</span>
                                Rp 2.870.000
                            </div>
                        </div>
                        <!-- Aksi produk-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto" href="#"
                                    onmouseover="this.style.backgroundColor='#A1805E'; this.style.color='white'"
                                    onmouseout="this.style.backgroundColor=''; this.style.color=''">Tambah ke keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #f7f6f8">
                        <!-- Gambar produk-->
                        <img class="card-img-top" src="jaketwan.png" alt="..." />
                        <!-- Detail produk-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama produk-->
                                <h5 class="fw-bolder">Jaket Kulit Wanita - Black</h5>
                                <!-- Ulasan produk-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Harga produk-->
                                Rp 2.000.000
                            </div>
                        </div>
                        <!-- Aksi produk-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto" href="#"
                                    onmouseover="this.style.backgroundColor='#A1805E'; this.style.color='white'"
                                    onmouseout="this.style.backgroundColor=''; this.style.color=''">Tambah ke keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #f7f6f8">
                        <!-- Gambar produk-->
                        <img class="card-img-top" src="jaketpria.png" alt="..." />
                        <!-- Detail produk-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama produk-->
                                <h5 class="fw-bolder">Jaket Kulit Pria - Black</h5>
                                <!-- Ulasan produk-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Harga produk-->
                                Rp 2.780.000
                            </div>
                        </div>
                        <!-- Aksi produk-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto" href="#"
                                    onmouseover="this.style.backgroundColor='#A1805E'; this.style.color='white'"
                                    onmouseout="this.style.backgroundColor=''; this.style.color=''">Tambah ke keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #f7f6f8">
                        <!-- Gambar produk-->
                        <img class="card-img-top" src="jaketwantita.png" alt="..." />
                        <!-- Detail produk-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama produk-->
                                <h5 class="fw-bolder">Jaket Kulit Wanita - Brown</h5>
                                <!-- Ulasan produk-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Harga produk-->
                                Rp 3.960.000
                            </div>
                        </div>
                        <!-- Aksi produk-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto" href="#"
                                    onmouseover="this.style.backgroundColor='#A1805E'; this.style.color='white'"
                                    onmouseout="this.style.backgroundColor=''; this.style.color=''">Tambah ke keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
