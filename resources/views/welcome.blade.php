<!DOCTYPE html>
<html lang="en">

<head>
    <metacharset="UTF-8">
        <title>DIRTYPAPERS | Ecommerce Website Design</title>
        {{--
        <link rel="stylesheet" href="style.css"> --}}
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
        <link rel="stylesheet" href="css\style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <style>

        </style>
</head>

<body>

    <div class="header">
        <div class="container">
            <x-header/>
            <div class="row">
                <div class="col-2">
                    <h1>DISCOVER & FIND<br>YOUR OWN PASSION</h1>
                    <p>I don't design clothes. I design dreams. It's about
                        consistency. Consistent<br>hard work gains success.
                        Greatness will come.</p>
                    <a href="" class="btn">SHOP NOW</a>
                </div>
                <div class="col-2">
                    <img src="{{ asset('Image/BG2.jpg') }}">
                </div>
            </div>
        </div>
    </div>

    <!-------- featured Categories --------->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3" |>
                    <img src="Image/a.jpg">
                </div>
                <div class="col-3">
                    <img src="Image/r.jpg">
                </div>
                <div class="col-3">
                    <img src="Image/e.jpg">
                </div>
            </div>
        </div>
    </div>

    <!-------- featured products --------->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="Image/FFF.jpg">
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
                <img src="Image/sss.jpg">
                <h4>THUGS NOT GANG</h4>
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
                <img src="Image/sas.jpg">
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
        <h2 class="title">Lastest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="Image/hh.jpg">
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
                <img src="Image/jj.jpg">
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
                <img src="Image/kk.jpg">
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
                <img src="Image/aa.jpg">
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
                <img src="Image/fas.jpg">
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
                <img src="Image/dd.jpg">
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
    <!--------- offer --------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="Image/qqq.jpg" class="offer-img">
                </div>
                <div class="col-5">
                    <p1>Exclusively Availble on DirtyPapers.Clo</p1>
                    <h3>RED GRIM FINISHER</h3>
                    <small>High-end clothing brand Overpriced.™ debuted its first NFT-linked hoodie, which sold for a
                        record ₱1,500 at auction.</small>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
