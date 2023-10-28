
<div class="row">
    @foreach($sortedProducts as $product)
        <div class="col-4">
            <a href="{{ route('product-detail.show', $product->id) }}">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-fluid">
                <h4>{{ $product->name }}</h4> <!-- Use the product's name field -->
                <div class="rating">
                    @for ($i = 0; $i < $product->rating; $i++)
                        <i class="fa-regular fa-star"></i>
                    @endfor
                </div>
                <p1>₱{{ $product->price }}</p1> <!-- Use the product's price field -->
            </a>
        </div>
    @endforeach
    {{ $sortedProducts->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
</div>
