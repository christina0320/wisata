<!-- ***** Women Area Starts ***** -->
<section class="section" id="women">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center"> <!-- Center-align content -->
                <div class="section-heading">
                    <h2>Daftar Menu</h2> <!-- No inline style for better readability -->
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
                            <span>{{$produks->price}}</span><br>
                            <span>Stok: {{$produks->quantity}}</span>
                            <span>Pesan</span>
                            {{-- <a class="btn btn-success mb-2" href="{{url('produk_details', $produks->id)}}">Details</a> --}}
                            <a class="btn btn-primary mb-2" href="{{url('add_cart', $produks->id)}}">+</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ***** Women Area Ends ***** -->
