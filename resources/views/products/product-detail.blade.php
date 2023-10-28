<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="container mt-10">
        <form method="POST" action="{{ route('cart.addToCart', ['productId' => $product->id]) }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex flex-column">
                    <p class="font-weight-bold" style="font-size: 50px;">{{ $product->name }}</p>
                    <p>Price: ₱{{ $product->price }}</p>

                    <p>Rating:
                        @for ($i = 0; $i < $product->rating; $i++)
                            <i class="fas fa-star" style="color: rgb(245, 183, 15);"></i>
                        @endfor
                    </p>
                    <div class="flex justify-content-start align-items-center">
                        <p>Quantity:</p>
                        <input type="number" name="quantity" class="form-control ml-2" style="height: 30px; width: 120px;" placeholder="Quantity" aria-label="Quantity" min="1" id="quantityInput" value="1" onchange="calculateTotalPrice()">
                    </div>
                    <div class="flex justify-content-start align-items-center mt-auto">
                        <p class="font-weight-bold" style="font-size: 30px;">Total Price:</p>
                        <p class="font-weight-bold" style="font-size: 30px;" id="totalPrice">₱{{ $product->price }}</p>
                    </div>
                    <div>
                        <button class="btn btn-primary">
                            Add to Cart
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <div class="mt-10 text-center">
            <p class="font-weight-bold" style="font-size: 50px;">Other Products</p>
            <x-products-authenticated :sortedProducts="$sortedProducts" />
        </div>

    </div>
</x-app-layout>
<script>
    function calculateTotalPrice() {
        const quantityInput = document.getElementById('quantityInput');
        const totalPriceElement = document.getElementById('totalPrice');
        const price = {{ $product->price }};
        const quantity = parseInt(quantityInput.value);

        if (!isNaN(quantity)) {
            const total = price * quantity;
            totalPriceElement.textContent = `₱${total}`;
        } else {
            totalPriceElement.textContent = `₱${price}`;
        }
    }
</script>
