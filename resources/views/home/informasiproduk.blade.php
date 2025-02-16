<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ulasan Destinasi Wisata</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    #kids {
        background-image: url('{{ asset('assets/images/gallery/banner2.jpg') }}'); /* Menambahkan wallpaper */
        background-size: cover; /* Memastikan gambar menutupi seluruh area */
        background-position: center; /* Memposisikan gambar di tengah */
        padding: 50px 0; /* Memberikan jarak padding pada atas dan bawah */
    }

    #kids .section-heading h2 {
      color: #f5f3e5; /* Warna teks heading putih */
    }

    .card {
      background-color: #f5f3e5; /* Cream muda untuk card */
      border: 1px solid #8e7d3f; /* Border sesuai tema */
      border-radius: 10px; /* Sudut melengkung */
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
      border-radius: 10%; /* Membuat gambar circular dengan radius 10% */
      width: 80%; /* Lebar gambar */
      margin: 20px auto; /* Posisikan gambar di tengah */
      display: block; /* Pastikan gambar berada di tengah */
    }

    .card-body {
      padding: 20px;
      text-align: center; /* Pusatkan teks */
    }

    .card-title {
      font-size: 1.25rem;
      font-weight: bold;
      color: #4e3b24; /* Warna teks gelap */
      margin-bottom: 10px;
    }

    .card-text {
      font-size: 0.9rem;
      color: #555; /* Warna teks abu-abu */
    }

    .rating {
      color: #ffc107; /* Warna bintang */
      margin-top: 10px;
    }

    .checked {
      color: #ffc107; /* Warna bintang terisi */
    }
  </style>
</head>
<body>

  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <section class="section" id="kids">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="section-heading">
            <h2>Ulasan Destinasi Wisata</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Ulasan 1: Pantai Liang -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
            <img src="{{ asset('assets/images/hero1.jpeg') }}" class="card-img-top" alt="Pantai Liang">
            <div class="card-body">
              <h5 class="card-title">Pantai Liang</h5>
              <p class="card-text">Pantai dengan pasir putih dan air laut yang jernih. Cocok untuk bersantai dan menikmati sunset.</p>
              <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Ulasan 2: Benteng Amsterdam -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
            <img src="{{ asset('assets/images/hero2.jpeg') }}" class="card-img-top" alt="Benteng Amsterdam">
            <div class="card-body">
              <h5 class="card-title">Benteng Amsterdam</h5>
              <p class="card-text">Benteng bersejarah peninggalan Belanda. Menyimpan banyak cerita sejarah dan arsitektur yang menarik.</p>
              <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Ulasan 3: Lubang Buaya Morela -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
            <img src="{{ asset('assets/images/hero3.jpeg') }}" class="card-img-top" alt="Lubang Buaya Morela">
            <div class="card-body">
              <h5 class="card-title">Lubang Buaya Morela</h5>
              <p class="card-text">Situs sejarah dengan gua alami yang unik. Menyimpan cerita legenda dan perjuangan rakyat Maluku.</p>
              <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Ulasan 4: Pintu Kota -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
            <img src="{{ asset('assets/images/hero4.jpeg') }}" class="card-img-top" alt="Pintu Kota">
            <div class="card-body">
              <h5 class="card-title">Pintu Kota</h5>
              <p class="card-text">Landmark ikonik Kota Ambon yang menjadi simbol penyambutan dan keramahan masyarakat Maluku.</p>
              <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

  <!-- Font Awesome untuk ikon bintang -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</body>
</html>
