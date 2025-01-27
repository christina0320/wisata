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

        <h2>Data Meja</h2> <br>
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th scope="col">Nomor</th>
              <th scope="col">Kode Meja</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">001</th>
              <td>M001</td>
              <td>Terisi</td>
              <td>
                <button class="btn btn-warning btn-sm">Update</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
              </td>
            </tr>
            <tr>
              <th scope="row">002</th>
              <td>M002</td>
              <td>Kosong</td>
              <td>
                <button class="btn btn-warning btn-sm">Update</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
              </td>
            </tr>
            <tr>
              <th scope="row">003</th>
              <td>M003</td>
              <td>Dibersihkan</td>
              <td>
                <button class="btn btn-warning btn-sm">Update</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
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
