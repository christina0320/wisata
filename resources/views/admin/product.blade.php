


<!DOCTYPE html>
<html>
  <head>
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

            <form action="{{url('add_product')}}" method="post">
            @csrf
            <div>
                <input type="text" name="product">
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Tambah Kategori">
            </div>
            </form>
            <br><br>
            <div>
              <table class="table">
  <thead>
    <tr>
      <th scope="col">Kategori</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $data)
    <tr>
        <td>{{$data->product_name}}</td>
        <td><a href="{{url('delete_category',$data->id)}}" class="btn btn-danger">Hapus</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
            </div>

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
