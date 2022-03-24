<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo-1.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/solid.min.css') }}" />
    <script src="{{ asset('assets/js/main-nav.js') }}" defer></script>
    <script src="{{ asset('assets/js/back-to-top.js') }}" defer></script>
    <script src="{{ asset('assets/js/new-products-slider.js') }}" defer></script>
    <script src="{{ asset('assets/js/featured-products-slider.js') }}" defer></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>KOLLIN'SHOP</title>
</head>

<body>
    <div id="main-container">
        <!-- Back to top button -->
        {{-- <i class="fas fa-angle-double-up" id="back-to-top"></i> --}}

        <!-- Main header -->
        <header id="main-header">
            <div>
                <a href="#" id="website-logo"><img src="{{ asset('assets/images/logo-1.png') }}" alt="Logo" width="55"
                        height="55" /></a>
                <div id="page-title">
                    <h1>Kollin'Shop</h1>
                    <h2>Mon vêtement, Ma marque</h2>
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
                <li><a href="#homme">Vètements Homme</a></li>
                <li><a href="#femme">Vètements Femme</a></li>
                <li><a href="#enfant">Vètements Enfants</a></li>
            </menu>

        </nav>

        <main>
            <form action="#" class="col-md-3 col-10" style="float: right">
                <div class="row" style="display: flex">
                    <input class="form-control col-10" type="search" name="search"
                        placeholder="Chercher un produit ..." />
                    <button type="submit" class="btn btn-primary col-1"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <br>
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

            <!-- Style Homme -->
            <section id="featured-products" class="slider-container">
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
            </section>


            <!-- Style Femme -->
            <section id="featured-products" class="slider-container">
                <header class="slider-arrows" id="femme">
                    <h2>Style Femme</h2>
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

        <!-- Footer -->
        <footer class="py-5 bg-primary">
            <div class="container">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <div class="text-center">
                    <h2>Contactez Nous</h2>
                    <address>
                        <ul class="list-unstyled list-inline uppercase">
                            <li style="border-right: solid;">
                                <a href="tel:+237 6 55 22 76 77">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                        viewBox="0 0 50 50" style=" fill:#000000;">
                                        <path
                                            d="M 14 3.9902344 C 8.4886661 3.9902344 4 8.4789008 4 13.990234 L 4 35.990234 C 4 41.501568 8.4886661 45.990234 14 45.990234 L 36 45.990234 C 41.511334 45.990234 46 41.501568 46 35.990234 L 46 13.990234 C 46 8.4789008 41.511334 3.9902344 36 3.9902344 L 14 3.9902344 z M 18.005859 12.033203 C 18.633859 12.060203 19.210594 12.414031 19.558594 12.957031 C 19.954594 13.575031 20.569141 14.534156 21.369141 15.785156 C 22.099141 16.926156 22.150047 18.399844 21.498047 19.589844 L 20.033203 21.673828 C 19.637203 22.237828 19.558219 22.959703 19.824219 23.595703 C 20.238219 24.585703 21.040797 26.107203 22.466797 27.533203 C 23.892797 28.959203 25.414297 29.761781 26.404297 30.175781 C 27.040297 30.441781 27.762172 30.362797 28.326172 29.966797 L 30.410156 28.501953 C 31.600156 27.849953 33.073844 27.901859 34.214844 28.630859 C 35.465844 29.430859 36.424969 30.045406 37.042969 30.441406 C 37.585969 30.789406 37.939797 31.366141 37.966797 31.994141 C 38.120797 35.558141 35.359641 37.001953 34.556641 37.001953 C 34.000641 37.001953 27.316344 37.761656 19.777344 30.222656 C 12.238344 22.683656 12.998047 15.999359 12.998047 15.443359 C 12.998047 14.640359 14.441859 11.879203 18.005859 12.033203 z">
                                        </path>
                                    </svg>

                                    <span
                                        style="color: white; font-weight:bold; font-size:20px; position: relative; top:-20px;">Phone</span>
                                </a>
                            </li>
                            <li style="border-right: solid;">
                                <a href="https://m.facebook.com/kollinshopower">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                        viewBox="0 0 48 48" style=" fill:#000000;">
                                        <path fill="#3F51B5"
                                            d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z">
                                        </path>
                                        <path fill="#FFF"
                                            d="M34.368,25H31v13h-5V25h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H35v4h-2.287C31.104,17,31,17.6,31,18.723V21h4L34.368,25z">
                                        </path>
                                    </svg>


                                    <span
                                        style="color: white; font-weight:bold; font-size:20px; position: relative; top:-20px;">Facebook</span>
                                </a>
                            </li>
                            <li style="border-right: solid;">
                                <a href="https://wa.me/+237655227677">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64"
                                        viewBox="0 0 64 64" style=" fill:#000000;">
                                        <radialGradient id="AhngXQ8Zf2VLA52L6fLwQa" cx="32.5" cy="32.5" r="30.516"
                                            gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#eed7a2"></stop>
                                            <stop offset=".106" stop-color="#f1dcab"></stop>
                                            <stop offset=".437" stop-color="#f8e8c3"></stop>
                                            <stop offset=".744" stop-color="#fcefd2"></stop>
                                            <stop offset="1" stop-color="#fef2d7"></stop>
                                        </radialGradient>
                                        <path fill="url(#undefined)"
                                            d="M59,21h1.5c2.168,0,3.892-1.998,3.422-4.243C63.58,15.122,62.056,14,60.385,14L53,14 c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2h3.385c1.67,0,3.195-1.122,3.537-2.757C60.392,4.998,58.668,3,56.5,3H34.006H32.5h-24 C6.575,3,5,4.575,5,6.5S6.575,10,8.5,10H10c1.105,0,2,0.895,2,2c0,1.105-0.895,2-2,2l-5.385,0c-1.67,0-3.195,1.122-3.537,2.757 C0.608,19.002,2.332,21,4.5,21H18v12L4.615,33c-1.67,0-3.195,1.122-3.537,2.757C0.608,38.002,2.332,40,4.5,40H5 c1.105,0,2,0.895,2,2c0,1.105-0.895,2-2,2H4.5c-2.168,0-3.892,1.998-3.422,4.243C1.42,49.878,2.945,51,4.615,51H10 c1.105,0,2,0.895,2,2c0,1.105-0.895,2-2,2l-1.385,0c-1.67,0-3.195,1.122-3.537,2.757C4.608,60.002,6.332,62,8.5,62h22.494H32.5h23 c1.925,0,3.5-1.575,3.5-3.5S57.425,55,55.5,55H55c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2h4.385c1.67,0,3.195-1.122,3.537-2.757 C63.392,45.998,61.668,44,59.5,44H47V32h12.385c1.67,0,3.195-1.122,3.537-2.757C63.392,26.998,61.668,25,59.5,25H59 c-1.105,0-2-0.895-2-2C57,21.895,57.895,21,59,21z">
                                        </path>
                                        <path fill="#fff"
                                            d="M29.947,7.082C17.733,8.057,7.89,18.032,7.059,30.256c-0.309,4.552,0.603,8.865,2.44,12.647 L6.134,55.69c-0.507,1.926,1.25,3.683,3.176,3.176l13.598-3.579c3.66,1.43,7.733,2.034,11.999,1.546 c11.801-1.349,21.144-11.084,22.021-22.93C58.067,18.55,45.318,5.855,29.947,7.082z">
                                        </path>
                                        <linearGradient id="AhngXQ8Zf2VLA52L6fLwQb_OlCQeBlsSdb9_gr1" x1="32.001"
                                            x2="32.001" y1="11" y2="53.984" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#00d772"></stop>
                                            <stop offset=".996" stop-color="#00b26e"></stop>
                                            <stop offset="1" stop-color="#00b26e"></stop>
                                        </linearGradient>
                                        <path fill="url(#AhngXQ8Zf2VLA52L6fLwQb_OlCQeBlsSdb9_gr1)"
                                            d="M13.556,43.205c0.122-0.462,0.074-0.952-0.135-1.382l-0.323-0.666 c-1.59-3.274-2.298-6.95-2.047-10.629c0.698-10.274,8.959-18.64,19.215-19.458C30.843,11.023,31.426,11,32,11 c5.817,0,11.428,2.447,15.391,6.715c4.018,4.326,5.988,9.97,5.55,15.894c-0.73,9.854-8.678,18.129-18.486,19.251 C33.638,52.953,32.812,53,32,53l0,0c-2.624,0-5.192-0.484-7.635-1.438l-0.607-0.237c-0.394-0.154-0.827-0.179-1.237-0.071 l-10.25,2.697c-0.741,0.195-1.416-0.481-1.222-1.222L13.556,43.205z">
                                        </path>
                                        <path fill="#fff" fill-rule="evenodd"
                                            d="M25.611,21.115c-0.479-1.06-0.983-1.082-1.44-1.101 C23.798,19.999,23.372,20,22.946,20c-0.426,0-1.119,0.16-1.706,0.797S19,22.974,19,26.107s2.292,6.16,2.612,6.584 c0.32,0.424,4.426,7.058,10.928,9.611c5.403,2.121,6.503,1.699,7.677,1.593c1.173-0.106,3.785-1.539,4.318-3.026 s0.533-2.761,0.374-3.026c-0.16-0.266-0.587-0.424-1.226-0.744c-0.295-0.147-1.928-0.949-3.717-1.813 c-0.826-0.399-1.818-0.186-2.405,0.519c-0.242,0.29-0.708,0.848-1.229,1.469c-0.592,0.706-1.587,0.917-2.415,0.513 c-1.27-0.62-3.141-1.649-4.601-2.945c-1.046-0.928-2.253-2.566-3.04-3.711c-0.529-0.77-0.462-1.8,0.169-2.489 c0.279-0.305,0.561-0.613,0.765-0.851c0.487-0.569,0.617-1.36,0.334-2.054C26.964,24.321,25.998,21.971,25.611,21.115z"
                                            clip-rule="evenodd"></path>
                                        <linearGradient id="AhngXQ8Zf2VLA52L6fLwQc_OlCQeBlsSdb9_gr2" x1="43.455"
                                            x2="43.455" y1="11.14" y2="39.238" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#00e67a"></stop>
                                            <stop offset=".996" stop-color="#00c177"></stop>
                                            <stop offset="1" stop-color="#00c177"></stop>
                                        </linearGradient>
                                        <path fill="url(#AhngXQ8Zf2VLA52L6fLwQc_OlCQeBlsSdb9_gr2)"
                                            d="M52.91,30H44c-1.11,0-2-0.89-2-2.01v-0.05c0-1.07,0.87-1.94,1.94-1.94h0.56 c0.83,0,1.5-0.67,1.5-1.5S45.33,23,44.5,23h-8c-0.69,0-1.32-0.28-1.77-0.73C34.28,21.82,34,21.19,34,20.5c0-1.38,1.12-2.5,2.5-2.5 h1c0.83,0,1.5-0.67,1.5-1.5S38.33,15,37.5,15h-1c-0.69,0-1.32-0.28-1.77-0.73C34.28,13.82,34,13.19,34,12.5 c0-0.5,0.15-0.97,0.4-1.36c4.94,0.57,9.58,2.9,12.99,6.57C50.58,21.15,52.48,25.42,52.91,30z">
                                        </path>
                                        <linearGradient id="AhngXQ8Zf2VLA52L6fLwQd_OlCQeBlsSdb9_gr3" x1="8.646"
                                            x2="41.95" y1="42.071" y2="54.192" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#00c267"></stop>
                                            <stop offset=".996" stop-color="#009d61"></stop>
                                            <stop offset="1" stop-color="#009d61"></stop>
                                        </linearGradient>
                                        <path fill="url(#AhngXQ8Zf2VLA52L6fLwQd_OlCQeBlsSdb9_gr3)"
                                            d="M29.998,50.402c0.038,1.011-0.521,1.894-1.358,2.328c-1.46-0.23-2.88-0.63-4.27-1.17 l-0.61-0.24c-0.4-0.15-0.83-0.17-1.24-0.07l-10.251,2.703c-0.741,0.195-1.417-0.481-1.222-1.222L13.56,43.2 c0.12-0.46,0.07-0.95-0.14-1.38l-0.32-0.66c-0.94-1.94-1.57-4.02-1.88-6.16h7.28c0.83,0,1.5,0.67,1.5,1.5S19.33,38,18.5,38 S17,38.67,17,39.5s0.67,1.5,1.5,1.5H23c1.206,0,2.163,1.062,1.972,2.316C24.821,44.308,23.893,45,22.89,45l-1.39,0 c-0.83,0-1.5,0.67-1.5,1.5c0,0.83,0.67,1.5,1.5,1.5h5.857C28.725,48,29.946,49.035,29.998,50.402z">
                                        </path>
                                    </svg>


                                    <span
                                        style="color: white; font-weight:bold; font-size:20px; position: relative; top:-20px;">Whatsapp</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:ngojacky96@gmail.com">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                        viewBox="0 0 48 48" style=" fill:#000000;">
                                        <path fill="#4caf50"
                                            d="M45,16.2l-5,2.75l-5,4.75L35,40h7c1.657,0,3-1.343,3-3V16.2z"></path>
                                        <path fill="#1e88e5"
                                            d="M3,16.2l3.614,1.71L13,23.7V40H6c-1.657,0-3-1.343-3-3V16.2z"></path>
                                        <polygon fill="#e53935"
                                            points="35,11.2 24,19.45 13,11.2 12,17 13,23.7 24,31.95 35,23.7 36,17">
                                        </polygon>
                                        <path fill="#c62828"
                                            d="M3,12.298V16.2l10,7.5V11.2L9.876,8.859C9.132,8.301,8.228,8,7.298,8h0C4.924,8,3,9.924,3,12.298z">
                                        </path>
                                        <path fill="#fbc02d"
                                            d="M45,12.298V16.2l-10,7.5V11.2l3.124-2.341C38.868,8.301,39.772,8,40.702,8h0 C43.076,8,45,9.924,45,12.298z">
                                        </path>
                                    </svg>

                                    <span
                                        style="color: white; font-weight:bold; font-size:20px; position: relative; top:-20px;">Gmail</span>
                                </a>
                            </li>
                        </ul>
                    </address>
                </div>
            </div>
            <!-- /.container -->
        </footer>
    </div>
</body>

</html>
