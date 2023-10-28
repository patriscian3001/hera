<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{--
    <x-header /> --}}
    <div class="header">
        <div class="container">
            <div class="conainer">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>DISCOVER & FIND<br>YOUR OWN PASSION</h1>
                    <p>I don't design clothes. I design dreams. It's about
                        consistency. Consistent<br>hard work gains success.
                        Greatness will come.</p>
                    <a href="" class="btn">SHOP NOW</a>
                </div>
                <div class="col-3">
                    <img src="{{ asset('Image/BG2.jpg') }}" height="500px">
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Categories -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('Image/a.jpg') }}">
                </div>
                <div class="col-3">
                    <img src="{{ asset('Image/r.jpg') }}">
                </div>
                <div class="col-3">
                    <img src="{{ asset('Image/e.jpg') }}">
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('Image/FFF.jpg') }}">
                <h4>DAY DREAMING</h4>
                <div class="rating">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p1>₱750.00</p1>
            </div>
            <div class="col-4">
                <img src="{{ asset('Image/sss.jpg') }}">
                <h4>THUGS NOT GANG</h4>
                <div class="rating">
                    <i class="fa-regular fa-star"></i>
                    <i class "fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p1>₱500.00</p1>
            </div>
            <div class="col-4">
                <img src="{{ asset('Image/sas.jpg') }}">
                <h4>ATWN-TEARZ</h4>
                <div class="rating">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p1>₱600.00</p1>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('Image/hh.jpg') }}">
                <h4>HOLY G</h4>
                <div class="rating">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p1>₱600.00</p1>
            </div>
            <div class="col-4">
                <img src="{{ asset('Image/jj.jpg') }}">
                <h4>TUES CART</h4>
                <div class="rating">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p1>₱600.00</p1>
            </div>
            <div class="col-4">
                <img src="{{ asset('Image/kk.jpg') }}">
                <h4>UNDER ANGEL</h4>
                <div class="rating">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p1>₱500.00</p1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('Image/aa.jpg') }}">
                <h4>THE GAME</h4>
                <div class="rating">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p1>₱500.00</p1>
            </div>
            <div class="col-4">
                <img src="{{ asset('Image/fas.jpg') }}">
                <h4>THE GAME white</h4>
                <div class="rating">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p1>₱600.00</p1>
            </div>
            <div class="col-4">
                <img src="{{ asset('Image/dd.jpg') }}">
                <h4>ATWN-TEARZ gray</h4>
                <div class="rating">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p1>₱500.00</p1>
            </div>
        </div>
    </div>

    <!-- Offer -->
    <div class="offer">
        <div class="small-container">
            {{-- <div class="row"> --}}
                {{-- <div class="col-5"> --}}
                    <img src="{{ asset('Image/qqq.jpg') }}" class="offer-img">
                    {{--
                </div> --}}
                {{-- <div class="col-5"> --}}
                    <p class="mb-12">Exclusively Available on DirtyPapers.Clo</p>
                    <div class="mb-12">
                        <p class="font-bold text-xl mb-2" style="font-size: 100px;">RED GRIM FINISHER</p>
                    </div>
                    <small>High-end clothing brand Overpriced.™ debuted its first NFT-linked hoodie, which sold for a
                        record ₱1,500 at auction.</small>
                    {{--
                </div> --}}
                {{-- </div> --}}
        </div>
    </div>
</x-app-layout>
