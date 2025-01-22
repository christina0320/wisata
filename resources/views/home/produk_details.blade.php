<!DOCTYPE html>
<html lang="en">

  <head>

      <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">

    <link rel="stylesheet" href="/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="/assets/css/lightbox.css">

    <style>
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
                            <img src="/assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#men">Informasi Produk</a></li>
                            <li class="scroll-to-section"><a href="#women">Bigger Printing</a></li>
                        @if (Route::has('login'))

                        @auth
                            <li class="scroll-to-section"><a href="">Keranjang[{{$count}}]</a></li>
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
        <h1 class="d-flex justify-content-center align-items-center">Detail Produk</h1>
        <br><br><br>
        <div class="container">
            <div class="row">
<div class="media">

<img style="width: 270px" src="/produk/{{$data->image}}" alt="">

  <div class="media-body">
      <div class="details_box">
          <h5 class="mt-0">{{$data->title}}</h5>
                                    <span>Harga: {{$data->price}}</span> <br>
                                    <span>Stok: {{$data->quantity}}</span> <br>
                                    <label for="ukuran">Pilih Ukuran:</label> <br>
        <select id="ukuran" name="ukuran" style="width: 200px;">
            <option value="s"></option>
            <option value="s">15cm x 25cm</option>
            <option value="m">30cm x 35cm</option>
            <option value="l">40cm x 45cm</option>
            <option value="xl">40cm x 50cm</option>
            <option value="xl">45cm x 50cm</option>
            <option value="xl">50cm x 50cm</option>
            <option value="xl">50cm x 60cm</option>
        </select>
                                    <h4>{{$data->category}}</h4>
                                    <span>Bahan: SpoundBound</span> <br>
                                    <span>Ukuran: 30cm x 40cm</span> <br>
                                    <span>Tebal Bahan: 75gr</span> <br>
                                    <label for="jumlah">Jumlah:</label>
                                    <input type="number" id="jumlah" name="jumlah" min="" value=""> <br>

                                    <span>Deskripsi: {{$data->description}}</span> <br>
                                </div>
  </div>
</div>
<div>
<a class="btn btn-primary position-relative custom-btn" href="">Kembali</a>
<a class="btn btn-primary position-relative custom-btn" href="">Beli</a>
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
