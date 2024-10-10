@extends('layouts.app')
<link href="{{ asset('assets/css/home.css') }}" rel="stylesheet" />
<style>
    .blog {
        background-image: url("{{ asset('assets/img/bg_blog.png') }}");
    }

    .navbar {
        box-shadow: -5px 5px 10px #c5c5c5, 5px -5px 10px #fbfbfb;
    }
</style>
{{-- Navbar --}}
<nav class="navbar bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Liefer Logo" width="105" height="30">
        </a>
        <a class="navbar-brand" href="{{ url('/business') }}" class="d-flex">
            <img src="{{ asset('assets/img/business.png') }}" alt="Liefer Logo" width="190" height="20">
        </a>
    </div>
</nav>

{{-- Body --}}
@section('content')
    <header>
        <img src="{{ asset('assets/img/header.png') }}" alt="" style="width: 100%;height: 800px;">
        <div class="header_text">
            <h1>Get your favorite meals delivered</h1>
            <h1>right to your door</h1>
            <h6 style="margin-top: 20px;">Stay updated with LieferFood! Subscribe now for the latest news and exclusive
                offers.</h6>
            <div class="input-container">
                <i class="fas fa-envelope email-icon"></i>
                <input required="" placeholder="Email Address" type="email">
                <button class="invite-btn" type="button">
                    Subscribe
                </button>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="text-center section-header mb-5">
                <h6>How to Place Your Order</h6>
                <h1 style="color: #f58201">It's simple and quick.</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card p-4">
                        <i class="fa-solid fa-map-location-dot fa-3x"></i>
                        <h4 class="card-title">Tell us your current location</h4>
                        <p class="card-text">Discover nearby restaurants to order from.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-4">
                        <i class="fa-solid fa-burger fa-3x"></i>
                        <h4 class="card-title">Choose your favourite meal</h4>
                        <p class="card-text">Search for items, dishes or cuisines.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-4">
                        <i class="fa-solid fa-truck fa-3x"></i>
                        <h4 class="card-title">Get it Delivered or Pick it Up</h4>
                        <p class="card-text">Get updates on your order's progress.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <h3 class="mb-4" style="font-weight: 700">Put us in your pocket</h3>
            <div class="custom-section row align-items-center">
                <div class="col-md-8">
                    <h4 style="color: whitesmoke; font-weight:700; margin-top: 10px">Order the food that you love from your
                        home</h4>
                    <p class="pocket-text" style="color: whitesmoke; width: 70%;margin-top: 15px">Download the LieferFood
                        app for a seamless
                        food
                        delivery
                        experience! Browse menus, place orders, and
                        track deliveries in real-time. Enjoy exclusive app-only offers. Get the app today!</p>
                    <a href="#" class="playstore-button apple">
                        <span class="icon">
                            <svg fill="currentcolor" viewBox="-52.01 0 560.035 560.035" xmlns="http://www.w3.org/2000/svg"
                                stroke="#ffffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M380.844 297.529c.787 84.752 74.349 112.955 75.164 113.314-.622 1.988-11.754 40.191-38.756 79.652-23.343 34.117-47.568 68.107-85.731 68.811-37.499.691-49.557-22.236-92.429-22.236-42.859 0-56.256 21.533-91.753 22.928-36.837 1.395-64.889-36.891-88.424-70.883-48.093-69.53-84.846-196.475-35.496-282.165 24.516-42.554 68.328-69.501 115.882-70.192 36.173-.69 70.315 24.336 92.429 24.336 22.1 0 63.59-30.096 107.208-25.676 18.26.76 69.517 7.376 102.429 55.552-2.652 1.644-61.159 35.704-60.523 106.559M310.369 89.418C329.926 65.745 343.089 32.79 339.498 0 311.308 1.133 277.22 18.785 257 42.445c-18.121 20.952-33.991 54.487-29.709 86.628 31.421 2.431 63.52-15.967 83.078-39.655">
                                    </path>
                                </g>
                            </svg>
                        </span>
                        <span class="texts">
                            <span class="text-1">Download from</span>
                            <span class="text-2">App store</span>
                        </span>
                    </a>
                    <a href="#" class="playstore-button">
                        <span class="icon">
                            <svg fill="currentcolor" viewBox="-52.01 0 560.035 560.035" xmlns="http://www.w3.org/2000/svg"
                                stroke="#ffffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z">
                                    </path>
                                </g>
                            </svg>
                        </span>
                        <span class="texts">
                            <span class="text-1">GET IT ON</span>
                            <span class="text-2">Google Play</span>
                        </span>
                    </a>


                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/iphone.png') }}" alt="Mobile Image" class="custom-image">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="fluid-container blog text-center">
            <h2>Explore the Latest Food and Lifestyle Trends on
                Our
                Blog!</h2>
            <button class="button">Visit blog</button>
        </div>
    </section>
@endsection
