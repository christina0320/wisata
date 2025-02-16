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

        <table class="table table-dark">
            <h1>Data User</h1> <br>
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>admin</td>
                <td>admin@gmail.com</td>
                <td>Active</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>user</td>
                <td>user@gmail.com</td>
                <td>active</td>
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
