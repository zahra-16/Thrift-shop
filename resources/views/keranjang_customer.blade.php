@extends('template.layout')

@section('title', 'Keranjang Belanja')

@section('header-title', 'Keranjang Belanja')
@section('header-subtitle', 'Review dan konfirmasi pesanan Anda')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shopping Cart</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqk1wB15lyHlkX+n7u5l97rEoyIrulqP+CHQpc4dQ7gL+B0yLtq8qZHZxR2i51XgEmzG7nD+g="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqk1wB15lyHlkX+n7u5l97rEoyIrulqP+CHQpc4dQ7gL+B0yLtq8qZHZxR2i51XgEmzG7nD+g="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"
            href=
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: 'Helvetica Neue', sans-serif;
            }

            .cart-item {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
            }

            .cart-item img {
                width: 80px;
                height: 80px;
                object-fit: cover;
                margin-right: 15px;
            }

            .cart-item-details {
                flex: 1;
            }

            .cart-item-details h5 {
                margin-bottom: 5px;
            }

            .cart-item-details p {
                margin-bottom: 0;
                color: #888;
            }

            .cart-item-actions {
                display: flex;
                align-items: center;
            }

            .cart-item-actions button {
                margin-left: 10px;
                background-color: #f05050;
                /* Red */
                color: white;
                border: none;
                padding: 5px 10px;
                border-radius: 5px;
                cursor: pointer;
            }

            .cart-item-actions button:hover {
                background-color: #d94646;
                /* Darker red */
            }

            .cart-total {
                font-size: 1.2em;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .checkout-button {
                background-color: #A1805E;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .checkout-button:hover {
                background-color: #B99E8C;
                color: #000000;

            }

            .btn-outline-primary {
                background-color: transparent;
                border: 2px solid #A1805E;
                /* Blue */
                color: #000000;
                /* Blue */
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .btn-outline-primary:hover {
                background-color: #B99E8C;
                color: white;
            }

            .btn-outline-primary:focus {
                outline: none;
            }

            .btn-outline-primary:active {
                background-color: #000000;
                /* Darker blue */
                color: white;
            }
        </style>
    </head>

    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="mb-4">Keranjang Belanja</h2>
                    <div class="cart-items">
                        <div class="cart-item">
                            <img src="https://dummyimage.com/80x80/000/fff" alt="Product Image">
                            <div class="cart-item-details">
                                <h5>511™ Slim Fit Jeans - Adv. Stretch</h5>
                                <p>Ralph Lauren</p>
                            </div>
                            <div class="cart-item-actions">
                                <a href="" class="btn btn-danger btn-sm" type="submit"
                                    style="margin-left: 10px; margin-right:10px;">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm" type="submit">
                                    <i class="bi bi-heart-fill"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm" type="submit"
                                    style="margin-left: 10px; margin-right:10px;">
                                    <i class="bi bi-cart-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="cart-item">
                            <img src="https://dummyimage.com/80x80/000/fff" alt="Product Image">
                            <div class="cart-item-details">
                                <h5>Long Sleeve Graphic Tee</h5>
                                <p>Better Motion</p>
                            </div>
                            <div class="cart-item-actions">
                                <a href="" class="btn btn-danger btn-sm" type="submit"
                                    style="margin-left: 10px; margin-right:10px;">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm" type="submit">
                                    <i class="bi bi-heart-fill"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm" type="submit"
                                    style="margin-left: 10px; margin-right:10px;">
                                    <i class="bi bi-cart-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="cart-item">
                            <img src="https://dummyimage.com/80x80/000/fff" alt="Product Image">
                            <div class="cart-item-details">
                                <h5>Levi's® Western - WellThread™</h5>
                                <p>WellThread</p>
                            </div>
                            <div class="cart-item-actions">
                                <a href="" class="btn btn-danger btn-sm"
                                    type="submit"style="margin-left: 10px; margin-right:10px;">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm" type="submit">
                                    <i class="bi bi-heart-fill"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm" type="submit"
                                    style="margin-left: 10px; margin-right:10px;">
                                    <i class="bi bi-cart-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Ringkasan</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Jumlah produk: <span class="float-right">Rp 3.583.000</span></li>
                                <li class="list-group-item">Biaya pengiriman: <span class="float-right">Gratis</span></li>
                                <li class="list-group-item">Tambahkan kode promo<i class="bi bi-chevron-right"></i></li>
                            </ul>
                            <hr>
                            <div class="cart-total">
                                Total: <span class="float-right">Rp 3.583.000</span>
                            </div>
                            <button class="btn checkout-button btn-block mt-3" style="color: black"
                                type="submit">CHECKOUT</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <a href="" class="btn btn-outline-primary btn-block mb-3" type="submit"
                        style="margin-left: 10px; margin-right:10px;">
                        <i class="bi bi-wallet" style="color:#584d46; margin-left:10px; margin-right:10px;"></i>Simpan Pembayaran
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="btn btn-outline-primary btn-block mb-3" type="submit"
                        style="margin-left: 10px; margin-right:10px;">
                        <i class="bi bi-truck" style="color:#584d46; margin-left:10px; margin-right:10px;"></i>Pengiriman gratis
                        &
                        Kembali
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="" class="btn btn-outline-primary btn-block mb-3" type="submit"
                        style="margin-left: 10px; margin-right:10px;">
                        <i class="bi bi-headphones" style="color:#584d46; margin-left:10px; margin-right:10px;"></i>Penuh
                        Dukung
                    </a>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
@endsection
