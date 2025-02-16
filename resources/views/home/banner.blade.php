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
    <img src="{{ asset('assets/images/gallery/banner.jpg') }}" alt="Banner Image">
    <div class="inner-content">
        <h3>Temukan tempat destinasi wisata</h3>
        <h3>sesuai dengan yang anda inginkan</h3>
        <a href="#women" class="btn btn-light"><i class="fas fa-shopping-cart"></i>Pesan</a>
    </div>
</div>
