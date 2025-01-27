<!DOCTYPE html>
<html lang="en">

  <head>

@include('home.css')
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>

    <body>

        <h2>Formulir Data Reservasi</h2>
        <form id="">
          <div class="mb-3">
            <label for="noReservasi" class="form-label">No Reservasi</label>
            <input type="text" class="form-control" id="noReservasi" placeholder="Masukkan No Reservasi" required>
          </div>
          <div class="mb-3">
            <label for="namaPemesan" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control" id="namaPemesan" placeholder="Masukkan Nama Pemesan" required>
          </div>
          <div class="mb-3">
            <label for="tanggalReservasi" class="form-label">Tanggal Reservasi</label>
            <input type="date" class="form-control" id="tanggalReservasi" required>
          </div>
          <div class="mb-3">
            <label for="waktuReservasi" class="form-label">Waktu Reservasi</label>
            <input type="time" class="form-control" id="waktuReservasi" required>
          </div>
          <div class="mb-3">
            <label for="jumlahOrang" class="form-label">Jumlah Orang</label>
            <input type="number" class="form-control" id="jumlahOrang" placeholder="Masukkan Jumlah Orang" required>
          </div>
          <div class="mb-3">
            <label for="catatanTambahan" class="form-label">Catatan Tambahan</label>
            <textarea class="form-control" id="catatanTambahan" rows="3" placeholder="Masukkan Catatan Tambahan (opsional)"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    <!-- ***** Header Area Start ***** -->
@include('home.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
@include('home.banner')
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Informasi Produk ***** -->
    <!-- ***** Informasi Produk ***** -->



    @include('home.body')

    @include('home.informasiproduk')

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
