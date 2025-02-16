<!DOCTYPE html>
<html lang="en">

  <head>

      <!-- Additional CSS Files -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">

    <link rel="stylesheet" href="/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="/assets/css/lightbox.css">


    <style>


.rating {
      color: #ffc107; /* Warna kuning untuk bintang terisi */
    }
    .rating .fa-star {
      font-size: 1.5rem; /* Ukuran ikon bintang */
    }
    .rating .fa-star.checked {
      color: #ffc107; /* Warna kuning untuk bintang terisi */
    }
    .rating .fa-star.unchecked {
      color: #ccc; /* Warna abu-abu untuk bintang kosong */
    }


        .div_center{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

    .custom-btn {
        margin-right: 50px;/* Atur jarak antara tombol */
        top: -0cm;
    }

        .details_box{
            padding: 15px;
            margin: 20px;
            margin-top: -20px;
        }

    </style>

    </head>


    <body>

        <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="/assets/images/logo10.png" width="80">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('/') }}" class="active">Home</a></li>
                            {{-- <li class="scroll-to-section"><a href="#men">Informasi Produk</a></li> --}}
                            <li class="scroll-to-section"><a href="#women">Destinasi Wisata</a></li>
                        @if (Route::has('login'))

                        @auth
                            <li class="scroll-to-section"><a href="">Pesanan[{{$count}}]</a></li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                        <input type="submit" value="logout" class="btn btn-success">
                        </form>

                        @else

                        <li class="scroll-to-section"><a href="{{url('login')}}">Login</a></li>
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

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="d-flex justify-content-center align-items-center">Detail Destinasi Wisata</h1>
        <br><br><br>
        <div class="container">
            <div class="row">
<div class="media">

<img style="width: 400px" src="/produk/{{$data->image}}" alt="">

  <div class="media-body">
      <div class="details_box">
          <h5 class="mt-0">{{$data->title}}</h5>
                                    <span>Harga: {{$data->price}}</span> <br>
                                    {{-- <span>Stok: {{$data->quantity}}</span> <br> --}}
                                    {{-- <label for="ukuran">Pilih Ukuran:</label> <br> --}}

                                    <h4>{{$data->category}}</h4>
                                    {{-- <span>Bahan: SpoundBound</span> <br> --}}
                                    {{-- <span>Ukuran: 30cm x 40cm</span> <br> --}}
                                    {{-- <span>Tebal Bahan: 75gr</span> <br> --}}
                                    {{-- <label for="jumlah">Jumlah:</label> --}}
                                    {{-- <input type="number" id="jumlah" name="jumlah" min="" value=""> <br> --}}

                                    <span><i class="fas fa-map-marker-alt location-icon"></i> {{$data->quantity}}</span> <br>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <span>Detail</span> <br> <br>
                                    <span>{{$data->description}}</span> <br>
                                </div>
  </div>
</div>
<div>
    <a class="btn btn-primary position-relative custom-btn" href="{{ url('/') }}">
        <i class="fas fa-arrow-left"></i> Kembali <!-- Ikon panah kiri -->
    </a>
    {{-- <a class="btn btn-primary position-relative custom-btn" href="">
        <i class="fas fa-shopping-cart"></i> Pesan <!-- Ikon keranjang belanja -->
    </a> --}}
</div>

                <div class="col-12">
                            <div class="flex">
                                <div class="div_center">

                                </div>

                            </div>
                </div>
            </div>


        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->




    <!-- ***** Footer Start ***** -->
    <footer>
@include('/home.footer')
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
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>

  </body>
</html>
