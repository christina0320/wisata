    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            {{-- <img src="assets/images/logo.png"> --}}
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#kids">Reservasi</a></li>
                            <li class="scroll-to-section"><a href="#women">Menu</a></li>

                            @if (Route::has('login'))
                            @auth
                            <li class="nav-item"><a href="{{url('mycart')}}"><i class="fas fa-cart-arrow-down"></i>
                            [{{$count}}]</a></li>
                            <li class="scroll-to-section"><a href="{{url('myorder')}}">Pesanan</a></li>
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                        <input class="btn btn-success" type="submit" value="logout">
                        </form>

                        @else

                        <li class="scroll-to-section"><a href="{{url('login')}}">Login</a></li>
                        <li class="scroll-to-section"><a href="{{url('register')}}">Daftar</a></li>
                        @endauth
                        @endif


                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
