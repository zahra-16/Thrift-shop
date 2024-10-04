@extends('template.layout')

@section('title', 'Semua Produk')

@section('header-title', 'Semua Produk')
@section('header-subtitle', 'Jelajahi berbagai pilihan produk kami')

@section('content')
    <style>
        .categories {
            display: flex;
            justify-content: space-around;
            /* Mengatur spasi antar kategori */
            padding: 20px;
            background-color: #E9DED7;
            /* Warna latar belakang */
            border: 1px solid #ccc;
            border-radius: 10px;

        }

        .category {
            text-align: center;
        }

        .category img {
            width: 64px;
            /* Lebar gambar */
            height: 64px;
            /* Tinggi gambar */
            margin-bottom: 10px;
        }

        /* Font Import for Better Typography */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap');

        /* Title Styling for New Collection */
        .new-collection-title {
            font-family: 'Montserrat', sans-serif;
            /* Modern and sleek font */
            font-weight: 700;
            /* Bold font for emphasis */
            font-size: 40px;
            /* Large for impact */
            color: #222;
            /* Dark gray for a classy look */
            text-transform: uppercase;
            /* Capitalized letters for strength */
            letter-spacing: 2px;
            /* Spacing for clean, modern look */
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
            /* Stronger shadow for depth */
            margin-bottom: 0.3rem;
            /* Space between title and subtitle */
            transition: color 0.3s ease, transform 0.3s ease;
            /* Smooth hover transitions */
        }

        /* Subtitle Styling for New Collection */
        .new-collection-subtitle {
            font-family: 'Montserrat', sans-serif;
            /* Same font for consistency */
            font-weight: 400;
            /* Regular weight */
            font-size: 22px;
            /* Slightly smaller */
            color: #888;
            /* Lighter gray for contrast with the title */
            text-transform: uppercase;
            /* Strong, sharp look */
            letter-spacing: 1.5px;
            /* Slight letter spacing */
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
            /* Softer shadow */
            margin-bottom: 1rem;
            /* Space at the bottom */
        }

        /* Hover effect for the New Collection title */
        .new-collection-title:hover {
            color: #9E999F;
            /* Switches to a blue tone for masculinity and coolness */
            transform: scale(1.05);
            /* Slight scaling for visual pop on hover */
        }

        /* Subtitle Hover Effect */
        .new-collection-subtitle:hover {
            color: #555;
            /* Soft hover effect for the subtitle */
            transform: scale(1.05);
            /* Slight enlargement */
        }

        .mens-discount-title {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            /* Extra Bold */
            font-size: 38px;
            /* Larger text for emphasis */
            color: #1a1a1a;
            /* Darker tone for bold impact */
            letter-spacing: 3px;
            /* Wider letter spacing for a strong look */
            text-transform: uppercase;
            /* Capitalize for a sharp appearance */
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            /* Deeper shadow for strong depth */
            margin-bottom: 0.5rem;
            transition: color 0.3s ease-in-out, transform 0.3s ease-in-out;
            /* Smooth transition effects */
        }

        /* Subtitle styling for Men's discount */
        .mens-discount-subtitle {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            /* Normal weight for contrast with the bold title */
            font-size: 22px;
            /* Slightly larger than the previous one for balance */
            color: #555555;
            /* A mid-gray color */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.15);
            /* Softer shadow for subtitle */
            margin-bottom: 1rem;
        }

        /* Hover effect for Men's title */
        .mens-discount-title:hover {
            color: #9E999F;
            /* Switches to a blue tone for masculinity and coolness */
            transform: scale(1.05);
            /* Slight scaling for visual pop on hover */
        }

        .mens-discount-subtitle:hover {
            color: #555;
            /* Soft hover effect for the subtitle */
            transform: scale(1.05);
            /* Slight enlargement */
        }

        .leather-jacket-title {
            font-family: 'Montserrat', sans-serif;
            /* Modern and sleek font */
            font-weight: 700;
            /* Bold font for emphasis */
            font-size: 40px;
            /* Large for impact */
            color: #222;
            /* Dark gray for a classy look */
            text-transform: uppercase;
            /* Capitalized letters for strength */
            letter-spacing: 2px;
            /* Spacing for clean, modern look */
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
            /* Stronger shadow for depth */
            margin-bottom: 0.3rem;
            /* Space between title and subtitle */
            transition: color 0.3s ease, transform 0.3s ease;
            /* Smooth hover transitions */
        }

        /* Subtitle Styling for Leather Jacket */
        .leather-jacket-subtitle {
            font-family: 'Montserrat', sans-serif;
            /* Same font for consistency */
            font-weight: 400;
            /* Regular weight */
            font-size: 22px;
            /* Slightly smaller */
            color: #888;
            /* Lighter gray for contrast with the title */
            text-transform: uppercase;
            /* Strong, sharp look */
            letter-spacing: 1.5px;
            /* Slight letter spacing */
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
            /* Softer shadow */
            margin-bottom: 1rem;
            /* Space at the bottom */
        }

        /* Hover effect for the Leather Jacket title */
        .leather-jacket-title:hover {
            color: #B99E8C;
            /* Change to a sharp orange for excitement */
            transform: scale(1.1);
            /* Slight enlargement on hover */
        }

        .leather-jacket-subtitle:hover {
            color: #555;
            /* Soft hover effect for the subtitle */
            transform: scale(1.05);
            /* Slight enlargement */
        }

        .kategori {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
            overflow: hidden;
        }

        .kategori:hover {
            transform: scale(1.05);
            /* Memberikan efek hover yang menarik */
        }

        .kategori img {
            width: 100%;
            height: 100px;
            /* Ukuran gambar lebih kecil */
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .kategori h3 {
            font-size: 14px;
            /* Font title lebih kecil */
            font-weight: bold;
            margin-bottom: 5px;
        }

        .kategori p {
            font-size: 12px;
            /* Font deskripsi lebih kecil */
            color: #666;
            margin-bottom: 5px;
        }

        .card-body {
            padding: 10px;
            /* Memberikan padding yang lebih kecil pada body card */
        }

        .container {
            padding: 20px 0;
            /* Menambah sedikit padding di atas dan bawah */
        }

        .card {
            border-radius: 10px;
            /* Memperhalus sudut */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Memberi bayangan halus */
        }

        .card-img-top {
            height: 150px;
            /* Menentukan tinggi gambar */
            object-fit: cover;
            /* Memastikan gambar tetap proporsional */
        }
    </style>
    @if ($level == 'admin')
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Semua Produk</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Gambar produk-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Detail produk-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Nama produk-->
                                    <h5 class="fw-bolder">Kemeja Fancy</h5>
                                    <!-- Harga produk-->
                                    Rp 400.000 - Rp 800.000
                                </div>
                            </div>
                            <!-- Aksi produk-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Lihat
                                        opsi</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Lencana diskon-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Diskon</div>
                            <!-- Gambar produk-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                alt="..." />
                            <!-- Detail produk-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Nama produk-->
                                    <h5 class="fw-bolder">Item Spesial</h5>
                                    <!-- Ulasan produk-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Harga produk-->
                                    <span class="text-muted text-decoration-line-through">Rp 200.000</span>
                                    Rp 180.000
                                </div>
                            </div>
                            <!-- Aksi produk-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Tambah ke
                                        keranjang</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Lencana diskon-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Diskon</div>
                            <!-- Gambar produk-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                alt="..." />
                            <!-- Detail produk-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Nama produk-->
                                    <h5 class="fw-bolder">Item Diskon</h5>
                                    <!-- Harga produk-->
                                    <span class="text-muted text-decoration-line-through">Rp 500.000</span>
                                    Rp 250.000
                                </div>
                            </div>
                            <!-- Aksi produk-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Tambah ke
                                        keranjang</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan lebih banyak produk statis sesuai kebutuhan -->
                </div>
            </div>
        </section>
    @elseif($level == 'customers')
        <section class="py-5">

            {{-- <div class="categories">
                <div class="category">
                    <img src="kemeja.png" alt="Kemeja">
                    <span>Kemeja</span>
                </div>
                <div class="category">
                    <img src="jaket.png" alt="Jaket">
                    <span>Jaket</span>
                </div>
                <div class="category">
                    <img src="topi.png" alt="Topi">
                    <span>Topi</span>
                </div>
                <div class="category">
                    <img src="jeans.png" alt="Jeans">
                    <span>Jeans</span>
                </div>
                <div class="category">
                    <img src="bajukuning.png" alt="Kaos">
                    <span>Kaos</span>
                </div>
            </div> --}}

            <div class="container text-center">
                <div class="container text-center mt-1">
                    <!-- First Row with Discount, Jacket, and New Product Promo -->
                    <div class="row">
                        <div class="col-md-3">
                            <img src="Diskon.png" alt="Diskon" class="img-fluid" style="width: 100%; height: auto;">
                        </div>
                        <div class="col-md-6">
                            <img src="promosijaketkulit.png" alt="Jaket Kulit" class="img-fluid"
                                style="width: 100%; height: auto;">
                            <div class="text-center mt-2">
                                <h3 class="leather-jacket-title">New Collection</h3>
                                <p class="leather-jacket-subtitle">LEATHER JACKET</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <img src="produkbaru.png" alt="Produk Baru" class="img-fluid"
                                style="width: 100%; height: auto;">
                        </div>
                    </div>

                    <!-- Second Row with Jeans Offer and New Collection -->
                    <div class="row mt-3">
                        {{-- <div class="col-md-3">
                            <div class="bg-dark text-white p-4" style="height: 100%;">
                                <h3>JEANS</h3>
                                <p>AKHIR TAHUN</p>
                                <p>PENAWARAN SPESIAL 70%</p>
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <img src="newcoll.png" alt="New Collection" class="img-fluid">
                            <div class="text-center mt-2">
                                <h3 class="new-collection-title">New Collection</h3>
                                <p class="new-collection-subtitle">Women's Clothing</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <img src="men's.png" alt="New Collection" class="img-fluid">
                            <div class="text-center mt-2">
                                <h3 class="mens-discount-title">Disc For Men's</h3>
                                <p class="mens-discount-subtitle">All Product</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container" style="background: #DFD8E0; border-radius: 15px;">
                    <h2 class="fw-bolder mb-4">Kategori</h2>
                    <div class="row justify-content-center"> <!-- Menambahkan kelas justify-content-center -->
                        <div class="col-6 col-sm-4 col-md-2 mb-3">
                            <div class="card kategori">
                                <img src="image1.jpg" alt="Image 1" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">JAKET KULIT</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 mb-3">
                            <div class="card kategori">
                                <img src="image2.jpg" alt="Image 2" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">DENIM</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 mb-3">
                            <div class="card kategori">
                                <img src="image3.jpg" alt="Image 3" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">TOPI</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 mb-3">
                            <div class="card kategori">
                                <img src="image4.jpg" alt="Image 4" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">KEMEJA</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 mb-3">
                            <div class="card kategori">
                                <img src="image5.jpg" alt="Image 5" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">KAOS</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="container px-4 px-lg-5 mt-5">
                    <h2 class="fw-bolder mb-4">Semua Produk</h2>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Gambar produk-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                    alt="..." />
                                <!-- Detail produk-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Nama produk-->
                                        <h5 class="fw-bolder">Kemeja Fancy</h5>
                                        <!-- Harga produk-->
                                        Rp 400.000 - Rp 800.000
                                    </div>
                                </div>
                                <!-- Aksi produk-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Lihat
                                            opsi</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Lencana diskon-->
                                <div class="badge bg-dark text-white position-absolute"
                                    style="top: 0.5rem; right: 0.5rem">
                                    Diskon</div>
                                <!-- Gambar produk-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                    alt="..." />
                                <!-- Detail produk-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Nama produk-->
                                        <h5 class="fw-bolder">Item Spesial</h5>
                                        <!-- Ulasan produk-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Harga produk-->
                                        <span class="text-muted text-decoration-line-through">Rp 200.000</span>
                                        Rp 180.000
                                    </div>
                                </div>
                                <!-- Aksi produk-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="#">Tambah ke
                                            keranjang</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Lencana diskon-->
                                <div class="badge bg-dark text-white position-absolute"
                                    style="top: 0.5rem; right: 0.5rem">
                                    Diskon</div>
                                <!-- Gambar produk-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                    alt="..." />
                                <!-- Detail produk-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Nama produk-->
                                        <h5 class="fw-bolder">Item Diskon</h5>
                                        <!-- Harga produk-->
                                        <span class="text-muted text-decoration-line-through">Rp 500.000</span>
                                        Rp 250.000
                                    </div>
                                </div>
                                <!-- Aksi produk-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="#">Tambah ke
                                            keranjang</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Lencana diskon-->
                                <div class="badge bg-dark text-white position-absolute"
                                    style="top: 0.5rem; right: 0.5rem">
                                    Diskon</div>
                                <!-- Gambar produk-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                    alt="..." />
                                <!-- Detail produk-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Nama produk-->
                                        <h5 class="fw-bolder">Item Spesial</h5>
                                        <!-- Ulasan produk-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Harga produk-->
                                        <span class="text-muted text-decoration-line-through">Rp 200.000</span>
                                        Rp 180.000
                                    </div>
                                </div>
                                <!-- Aksi produk-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="#">Tambah ke
                                            keranjang</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Lencana diskon-->
                                <div class="badge bg-dark text-white position-absolute"
                                    style="top: 0.5rem; right: 0.5rem">
                                    Diskon</div>
                                <!-- Gambar produk-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                    alt="..." />
                                <!-- Detail produk-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Nama produk-->
                                        <h5 class="fw-bolder">Item Diskon</h5>
                                        <!-- Harga produk-->
                                        <span class="text-muted text-decoration-line-through">Rp 500.000</span>
                                        Rp 250.000
                                    </div>
                                </div>
                                <!-- Aksi produk-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="#">Tambah ke
                                            keranjang</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Lencana diskon-->
                                <div class="badge bg-dark text-white position-absolute"
                                    style="top: 0.5rem; right: 0.5rem">
                                    Diskon</div>
                                <!-- Gambar produk-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                    alt="..." />
                                <!-- Detail produk-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Nama produk-->
                                        <h5 class="fw-bolder">Item Diskon</h5>
                                        <!-- Harga produk-->
                                        <span class="text-muted text-decoration-line-through">Rp 500.000</span>
                                        Rp 250.000
                                    </div>
                                </div>
                                <!-- Aksi produk-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="#">Tambah ke
                                            keranjang</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Lencana diskon-->
                                <div class="badge bg-dark text-white position-absolute"
                                    style="top: 0.5rem; right: 0.5rem">
                                    Diskon</div>
                                <!-- Gambar produk-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                    alt="..." />
                                <!-- Detail produk-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Nama produk-->
                                        <h5 class="fw-bolder">Item Diskon</h5>
                                        <!-- Harga produk-->
                                        <span class="text-muted text-decoration-line-through">Rp 500.000</span>
                                        Rp 250.000
                                    </div>
                                </div>
                                <!-- Aksi produk-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="#">Tambah ke
                                            keranjang</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Lencana diskon-->
                                <div class="badge bg-dark text-white position-absolute"
                                    style="top: 0.5rem; right: 0.5rem">
                                    Diskon</div>
                                <!-- Gambar produk-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                    alt="..." />
                                <!-- Detail produk-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Nama produk-->
                                        <h5 class="fw-bolder">Item Diskon</h5>
                                        <!-- Harga produk-->
                                        <span class="text-muted text-decoration-line-through">Rp 500.000</span>
                                        Rp 250.000
                                    </div>
                                </div>
                                <!-- Aksi produk-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="#">Tambah ke
                                            keranjang</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Lencana diskon-->
                                <div class="badge bg-dark text-white position-absolute"
                                    style="top: 0.5rem; right: 0.5rem">
                                    Diskon</div>
                                <!-- Gambar produk-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                    alt="..." />
                                <!-- Detail produk-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Nama produk-->
                                        <h5 class="fw-bolder">Item Diskon</h5>
                                        <!-- Harga produk-->
                                        <span class="text-muted text-decoration-line-through">Rp 500.000</span>
                                        Rp 250.000
                                    </div>
                                </div>
                                <!-- Aksi produk-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="#">Tambah ke
                                            keranjang</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Lencana diskon-->
                                <div class="badge bg-dark text-white position-absolute"
                                    style="top: 0.5rem; right: 0.5rem">
                                    Diskon</div>
                                <!-- Gambar produk-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                    alt="..." />
                                <!-- Detail produk-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Nama produk-->
                                        <h5 class="fw-bolder">Item Diskon</h5>
                                        <!-- Harga produk-->
                                        <span class="text-muted text-decoration-line-through">Rp 500.000</span>
                                        Rp 250.000
                                    </div>
                                </div>
                                <!-- Aksi produk-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="#">Tambah ke
                                            keranjang</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Lencana diskon-->
                                <div class="badge bg-dark text-white position-absolute"
                                    style="top: 0.5rem; right: 0.5rem">
                                    Diskon</div>
                                <!-- Gambar produk-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                    alt="..." />
                                <!-- Detail produk-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Nama produk-->
                                        <h5 class="fw-bolder">Item Diskon</h5>
                                        <!-- Harga produk-->
                                        <span class="text-muted text-decoration-line-through">Rp 500.000</span>
                                        Rp 250.000
                                    </div>
                                </div>
                                <!-- Aksi produk-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="#">Tambah ke
                                            keranjang</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Tambahkan lebih banyak produk statis sesuai kebutuhan -->
                    </div>
                </div>
        </section>
    @endif
@endsection
