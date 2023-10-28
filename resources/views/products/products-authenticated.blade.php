<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- <x-header/> --}}
    <div class="small-container">

        <div class="row row-2">
            <div class="col-md-6">
                <p class="font-weight-bold" style="font-size:32px;">All Products</p>
            </div>
            <div class="col-md-6">
                <form method="GET" action="{{ route('products.showAllProductsAuth') }}" id="sortForm">
                    @csrf
                    <label for="sort">Sort by:</label>
                    <select name="sort" id="sort" onchange="document.getElementById('sortForm').submit()" class="form-control">
                        <option value="name" {{ $sort === 'name' ? 'selected' : '' }}>Default Sorting</option>
                        <option value="price" {{ $sort === 'price' ? 'selected' : '' }}>Sort by Price</option>
                        <option value="rating" {{ $sort === 'rating' ? 'selected' : '' }}>Sort by Rating</option>
                        <option value="sale" {{ $sort === 'sale' ? 'selected' : '' }}>Sort by Sale</option>
                    </select>
                </form>
            </div>
        </div>
        <x-products-authenticated :sortedProducts="$sortedProducts" :sort="$sort"/>
    </div>
</x-app-layout>
