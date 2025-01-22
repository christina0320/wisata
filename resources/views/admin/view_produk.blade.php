<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
         .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        h1
        {
            color: black;
        }

        label
        {
            display: inline-block;
            width: 250px;
            font-size: 18px;
            color: black;
        }

        input[type='text']
        {
            width: 350px;
            height: 50px;
        }

        textarea
        {
            width: 450px;
            height: 80px;
        }

        .input_deg
        {
            padding: 15px;
        }

        .table_deg
        {
            border: 2px solid greenyellow;
        }

        th
        {
            background-color: skyblue;
            color: black;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        td
        {
            border: 1px solid skyblue;
            text-align: center;
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


            <div class="div_deg">
                <table>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($produk as $produks)
                    <tr>
                        <td>{{$produks->title}}</td>
                        <td>{{$produks->description}}</td>
                        <td>{{$produks->price}}</td>
                        <td>{{$produks->product_name}}</td>
                        <td>{{$produks->quantity}}</td>
                        <td>
                            <img src="produk/{{$produks->image}}" style="width: 150px">
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('delete_produk',$produks->id)}}">Delete</a>
                        </td>

                    </tr>
                    @endforeach
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
