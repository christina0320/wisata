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
            color: white;
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
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>Bukti Transfer</th>
                    </tr>
                    @foreach ($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->rec_address}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->produk->title}}</td>
                        <td>{{$data->produk->price}}</td>
                        <td>
                            <img width="150" src="/produk/{{$data->produk->image}}" alt="">
                        </td>
                        <td>{{$data->status}}</td>
                        <td>
                            @if($data->image)
                                <img width="150" src="{{ asset('order/' . $data->image) }}" alt="Bukti Transfer">
                            @else
                                <span>Bukti transfer belum diunggah</span>
                            @endif
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
