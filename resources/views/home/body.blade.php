<style>
    #women {
        background-image: url('{{ asset('assets/images/gallery/banner2.jpg') }}'); /* Menambahkan wallpaper */
        background-size: cover; /* Memastikan gambar menutupi seluruh area */
        background-position: center; /* Memposisikan gambar di tengah */
        padding: 50px 0; /* Memberikan jarak padding pada atas dan bawah */
    }

    #women .section-heading h2 {
        color: #fff; /* Warna teks heading putih untuk kontras */
    }

    #women .item {
        background-color: #fff; /* Memberikan latar belakang putih pada item menu */
        padding: 20px;
        border-radius: 8px; /* Memberikan sudut melengkung pada item */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan untuk efek kedalaman */
    }

    #women .item .thumb img {
        width: 100%; /* Mengatur lebar gambar agar responsif */
        border-radius: 8px; /* Menambahkan sudut melengkung pada gambar */
    }

    #women .down-content h4 {
        color: #333; /* Warna teks untuk judul produk */
        font-size: 1.25rem;
    }

    #women .down-content span {
        color: #888; /* Warna teks untuk harga dan stok */
        font-size: 1rem;
    }

    #women .down-content .btn {
        background-color: #c47a39; /* Warna tombol yang sama dengan background section */
        color: #fff; /* Teks tombol putih */
        border: none; /* Menghilangkan border default */
        padding: 10px 15px;
        border-radius: 5px; /* Memberikan sudut melengkung pada tombol */
        text-decoration: none;
    }

    #women .down-content .btn:hover {
        background-color: #a1672d; /* Warna tombol lebih gelap saat hover */
    }
</style>

<section class="section" id="women">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center"> <!-- Center-align content -->
                <div class="section-heading">
                    <h2>Daftar Destinasi Wisata</h2> <!-- No inline style for better readability -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center"> <!-- Center items horizontally -->
            @foreach ($produk as $produks)
                <div class="col-lg-4 mb-4"> <!-- Adjusted column size for better responsiveness -->
                    <div class="item text-center"> <!-- Align content within item to center -->
                        <div class="thumb">
                            <div class="hover-content"></div>
                            <img style="width: 300px" src="produk/{{$produks->image}}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{$produks->title}}</h4>
                            {{-- <span>{{$produks->price}}</span><br> --}}
                            {{-- <span>Stok: {{$produks->quantity}}</span> --}}
                            {{-- <span>Pesan</span> --}}
                            <a class="btn btn-primary mb-2" href="{{url('add_cart', $produks->id)}}"><i class="fas fa-shopping-cart"></i>Pesan</a>
                            <a class="btn btn-success mb-2" href="{{url('produk_details', $produks->id)}}">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ***** Women Area Ends ***** -->
