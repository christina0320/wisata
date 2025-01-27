<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: #C47A39;
            /* Warna krem tua */
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

                <h2>Data Reservasi</h2>
                <br>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No Reservasi</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">Tanggal Reservasi</th>
                            <th scope="col">Waktu Reservasi</th>
                            <th scope="col">Jumlah Orang</th>
                            <th scope="col">Catatan Tambahan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">001</th>
                            <td>Mark Otto</td>
                            <td>2025-01-27</td>
                            <td>18:00</td>
                            <td>4</td>
                            <td>Ulang tahun anak</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Update</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">002</th>
                            <td>Jacob Thornton</td>
                            <td>2025-01-28</td>
                            <td>19:30</td>
                            <td>2</td>
                            <td>Permintaan meja dekat jendela</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Update</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">003</th>
                            <td>Larry Bird</td>
                            <td>2025-01-29</td>
                            <td>20:00</td>
                            <td>6</td>
                            <td>Acara kantor</td>
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
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>

</html>
