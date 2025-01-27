<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservasi Meja</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    #kids {
      background-color: #c47a39; /* Warna cream gelap */
      padding: 50px 0;  /* Memberikan jarak padding pada atas dan bawah */
    }

    #kids .form-control {
      background-color: #f5f3e5; /* Warna cream muda untuk input */
      border: 1px solid #ccc; /* Memberikan border yang lebih jelas */
    }

    #kids .btn-primary {
      background-color: #8e7d3f; /* Cream gelap untuk tombol submit */
      border-color: #8e7d3f; /* Sesuaikan border tombol */
    }

    #kids .btn-secondary {
      background-color: #b0a56d; /* Warna krem untuk tombol reset */
      border-color: #b0a56d;
    }

    #kids .section-heading h2 {
      color: #4e3b24; /* Warna teks heading gelap untuk kontras */
    }

    /* Warna background untuk section meja */
    #meja {
      background-color: #c47a39; /* Warna cream gelap */
      padding: 50px 0;
      display: none; /* Sembunyikan section meja hingga form dikirim */
    }

    .card {
      background-color: #f5f3e5; /* Cream muda untuk card */
    }

    .card-header {
      background-color: #8e7d3f; /* Warna header card sesuai tema */
    }

    .card-body {
      color: #4e3b24; /* Teks body card dengan warna gelap agar mudah dibaca */
    }

    /* Section Women styling */
    #women {
      background-color: #f3d0a0; /* Warna background untuk halaman women */
      padding: 50px;
      display: block; /* Menampilkan halaman Women sejak awal */
    }
  </style>

</head>
<body>

  <section class="section" id="kids">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Formulir Data Reservasi</h2>
            <br>
            <form id="reservationForm">
              <div class="mb-3">
                <label for="namaPemesan" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="namaPemesan" placeholder="Masukkan Nama Pemesan" required>
              </div>
              <div class="mb-3">
                <label for="tanggalReservasi" class="form-label">Tanggal Reservasi</label>
                <input type="date" class="form-control" id="tanggalReservasi" required>
              </div>
              <div class="mb-3">
                <label for="waktuReservasi" class="form-label">Waktu Reservasi</label>
                <input type="time" class="form-control" id="waktuReservasi" required>
              </div>
              <div class="mb-3">
                <label for="jumlahOrang" class="form-label">Jumlah Orang</label>
                <input type="number" class="form-control" id="jumlahOrang" placeholder="Masukkan Jumlah Orang" required>
              </div>
              <div class="mb-3">
                <label for="catatanTambahan" class="form-label">Catatan Tambahan</label>
                <textarea class="form-control" id="catatanTambahan" rows="3" placeholder="Masukkan Catatan Tambahan (opsional)"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="meja">
    <div class="container my-5">
      <h2 style="text-align: center">Reservasi Meja</h2><br>
      <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header text-white"></div>
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted">Nomor Meja: 1</h6>
              <p class="card-text">Jumlah Orang: 4 orang</p>
              <button class="btn btn-warning" id="button1">Belum Reservasi</button>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header text-white"></div>
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted">Nomor Meja: 2</h6>
              <p class="card-text">Jumlah Orang: 2 orang</p>
              <button class="btn btn-warning" id="button2">Belum Reservasi</button>
            </div>
          </div>
        </div>

        <!-- Additional cards can go here -->

      </div>
    </div>
  </section>

  {{-- <section class="section" id="women">
    <div class="container">
      <h2>Selamat datang di halaman Women!</h2>
      <p>Ini adalah halaman yang akan Anda lihat setelah memilih meja untuk reservasi.</p>
    </div>
  </section> --}}

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

  <script>
    // Handle form submission and navigate to the meja section
    document.getElementById('reservationForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission
      document.getElementById('kids').style.display = 'none'; // Hide the reservation form
      document.getElementById('meja').style.display = 'block'; // Show the meja section
    });

    // Handle the button clicks to navigate to the women section
    document.getElementById('button1').addEventListener('click', function() {
      document.getElementById('meja').style.display = 'none'; // Hide meja section
      // No need to hide women, it stays visible
    });

    document.getElementById('button2').addEventListener('click', function() {
      document.getElementById('meja').style.display = 'none'; // Hide meja section
      // No need to hide women, it stays visible
    });

    // Add more button handlers as needed for other buttons...
  </script>

</body>
</html>
