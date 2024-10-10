<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lieferfood</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo2.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- Main body -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer_area section_padding_130_0" style="padding-left: 0px;padding-right: 0px; padding-bottom: 0px">
        <div class="container pb-4">
            <div class="row">
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget section_padding_0_130 text-center">
                        <!-- Footer Logo-->
                        <div class="footer-logo mb-3"></div>
                        <a href="#">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="Liefer Logo" width="170"
                                height="50">
                        </a>
                        <!-- Follows Us Text-->
                        <div class="copywrite-text mb-3 mt-4">
                            <p class="mb-0" style="font-weight: 600">Follow Us</p>
                        </div>
                        <!-- Footer Social Area-->
                        <div class="footer_social_area"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="" data-original-title="Facebook"><i
                                    class="fa-brands fa-facebook-f"></i></a><a href="#" data-toggle="tooltip"
                                data-placement="top" title="" data-original-title="Pinterest"><i
                                    class="fa-brands fa-twitter"></i></a><a href="#" data-toggle="tooltip"
                                data-placement="top" title="" data-original-title="Skype"><i
                                    class="fa-brands fa-whatsapp"></i></a><a href="#" data-toggle="tooltip"
                                data-placement="top" title="" data-original-title="Twitter"><i
                                    class="fa-brands fa-instagram"></i></a></div>
                    </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg">
                    <div class="single-footer-widget section_padding_0_130">
                        <!-- Widget Title-->
                        <h5 class="widget-title">About</h5>
                        <!-- Footer Menu-->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Menu</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg">
                    <div class="single-footer-widget section_padding_0_130">
                        <!-- Widget Title-->
                        <h5 class="widget-title">Company</h5>
                        <!-- Footer Menu-->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Why Liefer?</a></li>
                                <li><a href="#">Partner With Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg">
                    <div class="single-footer-widget section_padding_0_130">
                        <!-- Widget Title-->
                        <h5 class="widget-title">Support</h5>
                        <!-- Footer Menu-->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Accessibility</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget section_padding_0_130">
                        <!-- Widget Title-->
                        <h5 class="widget-title">Get in Touch</h5>
                        <!-- Footer Menu-->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Question or Feedback?</a></li>
                                <li><a href="#">We'd love to hear from you</a></li>
                                <div class="search">
                                    <input type="text" class="search__input" placeholder="Email Address">
                                    <button class="search__button" style="color: #f58201">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center copyright">
            © {{ date('Y') }} Lieferfood
        </div>
    </footer>
</body>

</html>
