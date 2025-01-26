<!DOCTYPE html>
<html lang="en">

<head>


    @include('home.css')
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;

        }
        body {
    background-color: #C47A39; /* Warna krem tua */
    }

        table {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        th {
            border: 2px solid black;
            text-align: center;
            color: white;
            font: 20px;
            font-weight: bold;
            background-color: black;
        }

        td {
            border: 1px solid skyblue;

        }

        .cart-value {
            text-align: center;
            margin-buttom: 70px;
            padding: 18px;
        }

        .odrer_deg {
            padding-right: 100px;
            margin-top: -50px;
        }

        label {
            display: inline-block;
            width: 150px;
        }

        .div_gap {
            padding: 10px;
        }
    </style>
    <!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
</head>

<body>


    <!-- ***** Header Area Start ***** -->

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            {{-- <img src="assets/images/logo.png"> --}}
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#kids">Informasi Menu</a></li>
                            <li class="scroll-to-section"><a href="#women">Menu</a></li>

                            @if (Route::has('login'))
                                @auth
                                    <li class="scroll-to-section"><a href="{{ url('mycart') }}">Keranjang</a></li>
                                    <li class="scroll-to-section"><a href="{{ url('myorder') }}">Pesanan</a></li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <input class="btn btn-success" type="submit" value="logout">
                                    </form>
                                @else
                                    <li class="scroll-to-section"><a href="{{ url('login') }}">Login</a></li>
                                    <li class="scroll-to-section"><a href="{{ url('register') }}">Daftar</a></li>
                                @endauth
                            @endif


                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Header Area End ***** -->

    <br> <br><br>

    <div class="div_deg">

        <div class="order_deg">
            <form action="{{ url('confirm_order') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h5 class="text-center">Form Pembayaran</h5>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ Auth::user()->address }}" required>
                </div>
                <div class="form-group">
                    <label for="phone">No HP</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{ Auth::user()->phone }}" required>
                </div>
                <div class="form-group">
                    <label for="">Bukti Transfer</label>
                    <input type="file" name="image" required>
                    <small class="form-text text-muted">Unggah file gambar bukti transfer (format: JPG, PNG, atau JPEG).</small>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary btn-block">Place Order</button>
                </div>
            </form>
        </div>


        <div class="div_deg">
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Gambar</th>
                </tr>
                @foreach ($order as $order)
                    <tr>
                        <td>{{ $order->produk->title }}</td>
                        <td>{{ $order->produk->price }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <img width="150" src="/produk/{{ $order->produk->image }}" alt="">
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>



    </div>







    <!-- ***** Footer Start ***** -->
    <footer>
        @include('home.footer')
    </footer>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

</body>

</html>
