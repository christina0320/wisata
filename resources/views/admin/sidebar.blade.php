<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          {{-- <div class="avatar"><img src="{{asset('admincss/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div> --}}
          <div class="title">
            <h1 class="h5">      Admin</h1>
            <!-- <p>Full Stack Developer</p> -->
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading"></span>
        <ul class="list-unstyled">
                <li class=""><a href="{{ url('admin/dashboard') }}"> <i class="icon-home"></i>Home </a></li>
                <li class=""><a href="{{ url('/user') }}"> <i class="icon-home"></i>Data User</a></li>
                <li class=""><a href="{{ url('/meja') }}"> <i class="icon-home"></i>Data Meja</a></li>
                <li class=""><a href="{{ url('/reservasi') }}"> <i class="icon-home"></i>Data Reservasi</a></li>
                <li><a href="{{url('view_product')}}"> <i class="icon-grid"></i>Category</a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Data Menu</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_produk')}}">Tambah Menu</a></li>
                    <li><a href="{{url('view_produk')}}">Lihat Menu</a></li>
                  </ul>
                </li>
        <li><a href="{{url('view_order')}}"> <i class="icon-grid"></i>Data Transaksi</a></li>
        <!-- </ul><span class="heading">Extras</span> -->
        <ul class="list-unstyled">
      </nav>
