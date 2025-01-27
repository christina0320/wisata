<style>
    /* CSS untuk memastikan gambar banner full layar dan responsif */
    .main-banner {
        position: relative;
        width: 100%;
        height: 100vh; /* Full layar tinggi */
        overflow: hidden;
    }

    .main-banner img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover; /* Pastikan gambar memenuhi area */
    }

    .main-banner .inner-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
    }

    .main-banner h4,
    .main-banner span,
    .main-banner a {
        margin: 10px 0;
    }

    .main-banner .btn {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
    }

    .main-banner .btn:hover {
        background-color: #0056b3;
    }
</style>

<div class="main-banner" id="top">
    <img src="{{ asset('assets/images/gallery/gallery-1.jpeg') }}" alt="Banner Image">
    <div class="inner-content">
        <h3>Pesan Sekarang</h3>
        <h3>Restoran Ruang Saji</h3>
        <a href="#kids" class="btn btn-light">Reservasi</a>
    </div>
</div>
