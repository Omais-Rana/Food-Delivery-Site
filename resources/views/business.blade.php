@extends('layouts.app')
<link href="{{ asset('assets/css/business.css') }}" rel="stylesheet" />

<nav class="navbar bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/img/logo_b.png') }}" alt="Liefer Logo" width="105" height="35">
        </a>
        <div class="d-flex">
            <button class="btn" style="color: #f58201">Admin Log in</button>
            <button class="btn" style="background-color: #f58201; color: whitesmoke">Get Started</button>
        </div>
    </div>
</nav>
@section('content')
    <header>
        <section>
            <img src="{{ asset('assets/img/bg_business.png') }}" alt="" style="width: 100%;height: 800px;">
            <div class="header_text">
                <h1>Drive your business</h1>
                <h1>forward with Lieferfood</h1>
                <h6 style="margin-top: 20px;">Access Millions of Customers Every Day with LieferFood.</h6>
            </div>
            <div class="container form">
                <h5 class="mb-4 text-left">Prepared to Scale Your Business?</h5>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Restaurant Name *" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email *" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password *" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password *" required>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/1200px-Flag_of_Pakistan.svg.png"
                                        alt="Pakistan Flag">
                                    +92
                                </span>
                            </div>
                            <input type="tel" class="form-control" placeholder="Phone Number *" required>
                        </div>
                    </div>
                    <div class="btn-wrapper">
                        <button type="submit" class="btn btn-primary btn-block register">Register</button>
                    </div>
                </form>
            </div>
        </section>
    </header>

    <section class="opportunity">
        <div class="container">
            <div class="text-center section-header mb-5">
                <h1 style="font-weight: 650; font-size: 2rem"><span style="color: #f58201;">Lieferfood opens up</span> <span
                        style="color: #2d2d2d">new
                        opportunities</span></h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card p-4">
                        <i class="fa-solid fa-building fa-3x"></i>
                        <h4 class="card-title">Boost your orders</h4>
                        <p class="card-text">Reach millions on Lieferando with targeted marketing and business insights.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-4">
                        <i class="fa-solid fa-leaf fa-3x"></i>
                        <h4 class="card-title">Risk-free</h4>
                        <p class="card-text">No registration fee, commission-based. Enjoy discounts and promotions. Cancel
                            anytime.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-4">
                        <i class="fa-solid fa-truck fa-3x"></i>
                        <h4 class="card-title">Tailored Delivery</h4>
                        <p class="card-text">We customize services, options, and support to fit your needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 portion">
            <div class="row">
                <!-- First Part: Image -->
                <div class="col-md-6 section" style="padding-right: 0px;">
                    <img src="{{ asset('assets/img/banner1.png') }}" alt="Placeholder Image 1">
                </div>
                <!-- Second Part: Text -->
                <div class="col-md-6 section divider">
                    <p>Figma ipsum component variant main layer. Italic flows layer select move link slice select move. Mask
                        inspect boolean pixel union flows prototype boolean image. Edit content style move bold figma list
                        fill pen.
                    </p>
                    <h5>Jason Bourne</h5>
                    <h6>Brand Name</h6>
                </div>
            </div>
            <div class="row">
                <!-- Third Part: Text -->
                <div class="col-md-6 section">
                    <p>Figma ipsum component variant main layer. Italic flows layer select move link slice select move. Mask
                        inspect boolean pixel union flows prototype boolean image. Edit content style move bold figma list
                        fill pen.</p>
                    <h5>Jason Bourne</h5>
                    <h6>Brand Name</h6>
                </div>
                <!-- Fourth Part: Image -->
                <div class="col-md-6 section" style="padding-left: 0px;">
                    <img src="{{ asset('assets/img/banner2.png') }}" alt="Placeholder Image 4">
                </div>
            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
