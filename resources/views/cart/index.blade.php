<x-app-layout class="custom-background">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="small-container">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <p style="font-weight: bold;">X</p>
            </button>
        </div>
    @endif
        <p style="font-weight: bold; font-size:32px;">Your Cart</p>
        <a href=""></a>
        <table class="table table-bordered">
            <thead style="background-color: #ff523b">
                <tr>
                    <th class="fw-bold" style="color: white;">Product Name</th>
                    <th class="fw-bold" style="color: white;">Quantity</th>
                    <th class="fw-bold" style="color: white;">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @if($cartItems->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center">Your cart is empty.</td>
                    </tr>
                @else
                    @foreach($cartItems as $cartItem)
                    <tr>
                        <td>
                            <div class="d-flex">
                                <div class="mr-2">
                                    <img src="{{ asset($cartItem->image) }}" alt="{{ $cartItem->name }}"
                                        style="width: 200px; height: 200px;">
                                </div>
                                <div class="d-block">
                                    <p>{{ $cartItem->name }}</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p>Price: {{ $cartItem->price }}</p>
                                        <form method="POST"
                                            action="{{ route('cart.removeFromCart', ['cartId' => $cartItem->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <!-- Simulate a DELETE request -->
                                            <button type="submit" class="link ml-2"
                                                style="width: 100px; font-size:16px; color:#ff523b;">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('cart.updateCart', ['cartId' => $cartItem->id]) }}">
                                @csrf
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="number" name="quantity" class="form-control mr-10" style="width: 100px;"
                                        value="{{ $cartItem->quantity }}" aria-label="Quantity" min="1" id="quantityInput">
                                    <button class="btn btn-primary" style="width: 100px;">Update</button>
                                </div>

                            </form>
                        </td>
                        <td>₱{{ $cartItem->quantity * $cartItem->price }}</td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        @if($cartItems->isNotEmpty())
        <p class="text-end fw-bold" id="total">Total: ₱{{ $cartItems->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->price;
            }) }}</p>
        @endif
    </div>
</x-app-layout>

<script>
    function updateSubtotal(price, input) {
        const quantity = input.value;
        const subtotal = price * quantity;
        const row = input.closest('tr');
        const subtotalCell = row.querySelector('td:last-child');
        subtotalCell.textContent = '₱' + subtotal;

        // Recalculate the total
        const allSubtotals = document.querySelectorAll('tbody td:last-child');
        let total = 0;
        allSubtotals.forEach(function(subtotalCell) {
            total += parseFloat(subtotalCell.textContent.replace('₱', ''));
        });
        const totalElement = document.getElementById('total');
        totalElement.textContent = 'Total: ₱' + total;
    }
</script>
