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
            color: white;
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
<form action="{{url('/upload_produk')}}" method="Post" enctype="multipart/form-data">
@csrf
    <div class="">
        <label for="">Nama Destinasi</label>
        <input type="text" name="title" required>
    </div>
    <div class="">
        <label for="">Deskripsi</label>
        <textarea name="description" id="" cols="30"></textarea>
    </div>
    <div class="">
        <label for="">Harga</label>
        <input type="number" name="price" required>
    </div>
    <div class="">
        <label for="">kategori</label>
        <select name="product" required>
            <option>Select a Option</option>
            @foreach ($product as $product)
            <option value="{{$product->product_name}}">{{$product->product_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="">
        <label for="">Lokasi</label>
        <input type="text" name="quantity" required>
    </div>
    <div class="input_deg">
        <label for="">Gambar Destinasi</label>
        <input type="file" name="image" required>
    </div>
    <div class="">
        <input class="btn btn-success" type="submit" value="Add Destinasi">
    </div>

</form>
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
