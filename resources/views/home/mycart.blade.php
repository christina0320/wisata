<!DOCTYPE html>
<html lang="en">

  <head>


@include('home.css')
    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;

        }

        table{
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        th{
            border: 2px solid black;
            text-align: center;
            color: white;
            font: 20px;
            font-weight: bold;
            background-color: black;
        }

        td{
        border: 1px solid skyblue;

        }
        .cart-value{
            text-align: center;
            margin-buttom: 70px;
            padding: 18px;
        }
        .odrer_deg{
            padding-right: 100px;
            margin-top: -50px;
        }
        label{
            display: inline-block;
            width: 150px;
        }

        .div_gap{
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
@include('home.header')
    <!-- ***** Header Area End ***** -->

<br> <br><br>

<div class="div_deg">

<div class="odrer_deg">
    <form action="{{url('confirm_order')}}" method="post">
        @csrf
        <div class="div_gap">
            <label for="">Nama</label>
            <input type="text" name="name" value="{{Auth::user()->name}}">
        </div>
        <div class="div_gap">
            <label for="">Alamat</label>
            <input type="text" name="address" value="{{Auth::user()->address}}">
        </div>
        <div class="div_gap">
            <label for="">No HP</label>
            <input type="text" name="phone" value="{{Auth::user()->phone}}">
        </div>
        <div class="div_gap">
            <input class="btn btn-primary" type="submit" value="Place Order" id="">
        </div>
    </form>
</div>


    <table>
        <tr>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Hapus</th>
        </tr>

<?php
$value=0;
?>


        @foreach ($cart as $cart)
<tr>
<td>{{ $cart->produk->title }}</td>
<td>{{ $cart->produk->price }}</td>
<td>
<img src="produk/{{$cart->produk->image}}" style="width: 150px"></td>
<td>
<a class="btn btn-danger" href="{{url('delete_cart',$cart->id)}}">Hapus</a>
</td>
</tr>


<?php
$value= $value + $cart->produk->price;
?>


@endforeach
    </table>
</div>

<div class="cart-value">
    <h3 class="text-align: center">
        Total Harga: {{ $value }}
    </h3>
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
