<div>
    <div class="navbar">
        <div class="logo">
            <a href="#">
                <img src="{{ asset('Image/Logo.jpg') }}" width="180px">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home.show') }}" style="text-decoration: none;">Home</a></li>
                <li><a href="{{ route('products.showAllProducts') }}">Products</a></li>
                <li><a href="{{ route('contact.show') }}">Contract Us</a></li>
                <li><a href="{{ route('login') }}">Log in</a></li>
                <li><a href="{{ route('register') }}">Sign up</a></li>
            </ul>
        </nav>
    </div>
</div>

