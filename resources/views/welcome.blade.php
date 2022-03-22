<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo-1.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/brands.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/solid.min.css') }}" />
    <script src="{{ asset('assets/js/main-nav.js') }}" defer></script>
    <script src="{{ asset('assets/js/back-to-top.js') }}" defer></script>
    <script src="{{ asset('assets/js/new-products-slider.js') }}" defer></script>
    <script src="{{ asset('assets/js/featured-products-slider.js') }}" defer></script>
    <title>KOLLIN'SHOP</title>
</head>

<body>
    <div id="main-container">
        <!-- Back to top button -->
        <i class="fas fa-angle-double-up" id="back-to-top"></i>

        <!-- Main header -->
        <header id="main-header">
            <div>
                <a href="#" id="website-logo"><img src="{{ asset('assets/images/logo-1.png') }}" alt="Logo" width="55"
                        height="55" /></a>
                <div id="page-title">
                    <h1>Kollin'Shop</h1>
                    <h2>Kollin'Shop Boutique Mon vêtement, Ma marque</h2>
                </div>
            </div>
        </header>

        <!-- Main navigation bar -->
        <a href="javascript:void(0)" id="open-main-nav-btn">
            <i class="fas fa-bars"></i>
        </a>

        <nav id="main-nav">
            <a href="javascript:void(0)" id="close-main-nav-btn">
                <i class="fas fa-times"></i>
            </a>
            <menu>
                <li><a href="#homme">VètementsHomme</a></li>
                <li><a href="#femme">Vètements Femme</a></li>
                <li><a href="#enfant">Vètements Enfants</a></li>
            </menu>
        </nav>

        <main>
            <form action="#">
                <input type="search" name="search" placeholder="Chercher un produit ..." />
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
            <!-- New products -->
            <section id="new-products" class="slider-container">
                <header class="slider-arrows">
                    <h2>Nouveaux Produits</h2>
                    <div>
                        <a class="slider-arrow-prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="slider-arrow-next"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </header>

                <ul class="slider-list">
                    <li class="slider-item">
                        <a href="#">
                            <div class="overlay"></div>
                            <img src="{{ asset('assets/images/new-product-1.jpg') }}" alt="Product Title" />
                        </a>

                    </li>

                    <li class="slider-item">
                        <a href="#">
                            <div class="overlay"></div>
                            <img src="{{ asset('assets/images/new-product-2.jpg') }}" alt="Product Title" />
                        </a>

                    </li>

                    <li class="slider-item">
                        <a href="#">
                            <div class="overlay"></div>
                            <img src="{{ asset('assets/images/new-product-3.jpg') }}" alt="Product Title" />
                        </a>

                    </li>

                    <li class="slider-item">
                        <a href="#">
                            <div class="overlay"></div>
                            <img src="{{ asset('assets/images/new-product-4.jpg') }}" alt="Product Title" />
                        </a>

                    </li>

                    <li class="slider-item">
                        <a href="#">
                            <div class="overlay"></div>
                            <img src="{{ asset('assets/images/new-product-5.jpg') }}" alt="Product Title" />
                        </a>

                    </li>

                    <li class="slider-item">
                        <a href="#">
                            <div class="overlay"></div>
                            <img src="{{ asset('assets/images/new-product-6.jpg') }}" alt="Product Title" />
                        </a>

                    </li>
                </ul>
            </section>

            <!-- Featured products -->
            <section id="featured-products" class="slider-container" >
                <header class="slider-arrows" id="homme">
                    <h2>Style homme</h2>
                    <div>
                        <a class="slider-arrow-prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="slider-arrow-next"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </header>

                <ul class="slider-list">
                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-1.jpg') }}" alt="Product Title" />
                            </a>
                            <span class="off">Stock Epuisé</span>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-2.jpg') }}" alt="Product Title" />
                            </a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-3.jpg') }}" alt="Product Title" />
                            </a>
                            <span class="new">New</span>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-4.jpg') }}" alt="Product Title" />
                                <span class="new" style="background-color: orange">Solde</span></a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-5.jpg') }}" alt="Product Title" />
                            </a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-6.jpg') }}" alt="Product Title" />
                            </a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-7.jpg') }}" alt="Product Title" />
                            </a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-8.jpg') }}" alt="Product Title" />
                            </a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>
                </ul>
                <br><br>
                <header class="slider-arrows" id="femme">
                    <h2>Style femme</h2>
                    <div>
                        <a class="slider-arrow-prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="slider-arrow-next"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </header>

                <ul class="slider-list">
                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-1.jpg') }}" alt="Product Title" />
                            </a>
                            <span class="off">Stock Epuisé</span>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-2.jpg') }}" alt="Product Title" />
                            </a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-3.jpg') }}" alt="Product Title" />
                            </a>
                            <span class="new">New</span>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-4.jpg') }}" alt="Product Title" />
                                <span class="new" style="background-color: orange">Solde</span></a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-5.jpg') }}" alt="Product Title" />
                            </a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-6.jpg') }}" alt="Product Title" />
                            </a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-7.jpg') }}" alt="Product Title" />
                            </a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>

                    <li class="slider-item">
                        <div class="p-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/featured-product-8.jpg') }}" alt="Product Title" />
                            </a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam
                            </h4>
                        </div>
                    </li>
                </ul>
            </section>
        </main>

        <!-- Main footer -->
        <footer id="main-footer">
            <div class="widget">
                <h2>shopping with us</h2>
                <nav>
                    <ul>
                        <li><a href="#">why shop with us?</a></li>
                        <li><a href="#">how it works</a></li>
                        <li><a href="#">delivery</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">where's my order</a></li>
                        <li><a href="#">contact & help</a></li>
                        <li><a href="#">wedding list</a></li>
                        <li><a href="#">wishlists</a></li>
                        <li><a href="#">gift vouchers</a></li>
                    </ul>
                </nav>
            </div>

            <div class="widget">
                <h2>about us</h2>
                <nav>
                    <ul>
                        <li><a href="#">our story</a></li>
                        <li><a href="#">customer contact</a></li>
                        <li><a href="#">awards</a></li>
                        <li><a href="#">press centre</a></li>
                        <li><a href="#">work with us</a></li>
                        <li><a href="#">terms & conditions</a></li>
                        <li><a href="#">privacy & cookies</a></li>
                    </ul>
                </nav>
            </div>

            <div class="widget">
                <h2>selling with us</h2>
                <nav>
                    <ul>
                        <li><a href="#">why join?</a></li>
                        <li><a href="#">faqs</a></li>
                        <li><a href="#">apply to sell with us</a></li>
                        <li><a href="#">affiliates</a></li>
                    </ul>
                </nav>
            </div>

            <div class="widget">
                <div class="newsletter">
                    <h2>Signup newsletter</h2>
                    <form action="#">
                        <input type="email" name="email" placeholder="e.g.: abc@domain.com" /><br />
                        <input type="submit" value="Subscribe now" />
                    </form>
                </div>

                <div class="socials">
                    <h2>Keep in touch</h2>
                    <address>
                        <ul>
                            <li class="tooltip">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <div class="tooltip-text">Facebook</div>
                            </li>
                            <li class="tooltip">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <div class="tooltip-text">Instagram</div>
                            </li>
                            <li class="tooltip">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <div class="tooltip-text">Twitter</div>
                            </li>
                            <li class="tooltip">
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                <div class="tooltip-text">Pinterest</div>
                            </li>
                            <li class="tooltip">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <div class="tooltip-text">Linkedin</div>
                            </li>
                        </ul>
                    </address>
                </div>
            </div>
        </footer>

        <!-- Bottom footer -->
        <footer id="bottom-footer">
            <small id="copyright">@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif</small>
            <nav id="bottom-nav">
                <menu>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Jobs</a></li>
                </menu>
            </nav>
        </footer>

        <noscript>Your web browser does not support JavaScript or this feature is turned
            off. Please open the page in another browser or turn on JavaScript to
            use the full capabilities of this website.</noscript>
    </div>
</body>

</html>
