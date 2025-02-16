<!DOCTYPE html>
<html>
  <head>
    <style>
        body {
    background-color: #C47A39; /* Warna krem tua */
    }
    </style>
@include('admin.css')
  </head>
  <body>
    <header class="header">
@include('admin.header')
    </header>
 @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
        {{-- @include('admin.body') --}}

        <h2>Data Ulasan</h2> <br>
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
              <tr>
                <th>Gambar</th>
                <th>Nama Destinasi</th>
                <th>Deskripsi</th>
                <th>Rating</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="{{ asset('assets/images/hero1.jpeg') }}" class="img-fluid" width="150" alt="Pantai Liang"></td>
                <td>Pantai Liang</td>
                <td>Pantai dengan pasir putih dan air laut yang jernih. Cocok untuk bersantai dan menikmati sunset.</td>
                <td>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </td>
              </tr>
              <tr>
                <td><img src="{{ asset('assets/images/hero2.jpeg') }}" class="img-fluid" width="150" alt="Benteng Amsterdam"></td>
                <td>Benteng Amsterdam</td>
                <td>Benteng bersejarah peninggalan Belanda. Menyimpan banyak cerita sejarah dan arsitektur yang menarik.</td>
                <td>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </td>
              </tr>
              <tr>
                <td><img src="{{ asset('assets/images/hero3.jpeg') }}" class="img-fluid" width="150" alt="Lubang Buaya Morela"></td>
                <td>Lubang Buaya Morela</td>
                <td>Situs sejarah dengan gua alami yang unik. Menyimpan cerita legenda dan perjuangan rakyat Maluku.</td>
                <td>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </td>
              </tr>
              <tr>
                <td><img src="{{ asset('assets/images/hero4.jpeg') }}" class="img-fluid" width="150" alt="Pintu Kota"></td>
                <td>Pintu Kota</td>
                <td>Landmark ikonik Kota Ambon yang menjadi simbol penyambutan dan keramahan masyarakat Maluku.</td>
                <td>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </td>
              </tr>
            </tbody>
          </table>




        </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>
