<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DIRTYPAPERS | Ecommerce Website Design</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<style>
    /* body {
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-color: gray;
    } */
</style>

<body >
    <div class="container">
            <x-header />
    </div>

    <div class="small-container">

            <div class="row row-2">
                <h2>All Products</h2>
                <form method="GET" action="{{ route('products.showAllProducts') }}" id="sortForm">
                    @csrf
                    <label for="sort">Sort by:</label>
                    <select name="sort" id="sort" onchange="document.getElementById('sortForm').submit();">
                        <option value="name" {{ $sort === 'name' ? 'selected' : '' }}>Default Sorting</option>
                        <option value="price" {{ $sort === 'price' ? 'selected' : '' }}>Sort by Price</option>
                        <option value="rating" {{ $sort === 'rating' ? 'selected' : '' }}>Sort by Rating</option>
                        <option value="sale" {{ $sort === 'sale' ? 'selected' : '' }}>Sort by Sale</option>
                    </select>
                </form>
            </div>

            <div class="row">
                @foreach($sortedProducts as $product)
                    <div class="col-4">
                        {{-- <a href="{{ route('product-detail.show', $product->id) }}"> --}}
                            <img src="{{ $product->image }}"> <!-- Use the product's image field -->
                            <h4>{{ $product->name }}</h4> <!-- Use the product's name field -->
                            <div class="rating">
                                @for ($i = 0; $i < $product->rating; $i++)
                                    <i class="fa-regular fa-star"></i>
                                @endfor
                            </div>
                            <p1>₱{{ $product->price }}</p1> <!-- Use the product's price field -->
                        {{-- </a> --}}
                    </div>
                @endforeach
            </div>


            {{-- <div class="page-btn"> --}}
                    {{ $sortedProducts->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}

            {{-- </div> --}}
        </div>
</body>

</html>
