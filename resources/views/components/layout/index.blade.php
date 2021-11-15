<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Negeri Jahe Merah</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">

        @yield('custom-css')

    </head>
    <body>
        @yield('header')
        <div class="menu__mobile">
            <ul class="ul_menu">
                <li><input type="text" placeholder="search" class="search"></li>
                <li><a class="fs-big" href="{{route('profile')}}"><strong>Profile</strong></a></li>
                <li class="hasSub">
                    <span class="fs-big"><strong>Products</strong></span>
                    <ul class="ul_submenu">
                        <li><strong>Redgine Variant</strong></li>
                        <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Red Ginger Powder Extract Premium</a></li>
                        <li><a href="{{route('product-detail','red-ginger-powder-extract-standardized')}}">Red Ginger Powder Extract Standardized</a></li>
                        <li><a href="{{route('product-detail','red-ginger-powder')}}">Red Ginger Powder</a></li>
                        <li><a href="{{route('product-detail','red-ginger-instant-powder')}}">Red Ginger Instant Powder with Palm Sugar</a></li>
                        <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Red Ginger Fresh</a></li>
                        <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Citronella Oil</a></li>
                        <li><strong>Made By Redgine</strong></li>
                        <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Bejo Jahe Merah</a></li>
                        <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Bejo Sujamer</a></li>
                        <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Komix Herbal</a></li>
                        {{-- <li><strong>Other Commodities</strong></li> --}}
                        {{-- <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Citronella Oil</a></li> --}}
                    </ul>
                </li>
                <li><a class="fs-big" href="{{route('business')}}"><strong>Business</strong></a></li>
                <li class="hasSub">
                    <span class="fs-big"><strong>News</strong></span>
                    <ul class="ul_submenu">
                        <li><a href="{{route('latest-news')}}">Latest News</a></li>
                        <li><a href="{{route('events')}}">Events</a></li>
                        <li><a href="{{route('literatures')}}">Literatures</a></li>
                    </ul>
                </li>
                <li><a class="fs-big" href="{{route('visit')}}"><strong>Visit Us</strong></a></li>
                <li><a class="fs-big" href="{{route('contact')}}"><strong>Contact Us</strong></a></li>
            </ul>
        </div>
        @yield('main')

        <footer>
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12">
                        @if (Request::segment(1) == 'products')
                            <div class="faq__wrapper bg-yellow">
                        @else
                            <div class="faq__wrapper">
                        @endif
                            <div class="faq__box">
                                <h4 class="p-white">FAQ</h4>
                                <div class="faq__box-collapseBox">
                                    <div class="faq__box-collapseBox--item">
                                        <a class="cl p-white" data-bs-toggle="collapse" href="#coll-faq1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Di mana produk Redgine dapat dibeli?
                                        </a>
                                        <div class="collapse" id="coll-faq1">
                                            <div class="collapse-box">
                                                <p class="p-white">Melalui e-commerce favorit Anda dan dapat diakses melalui Ejol App yang dapat diunduh di Play Store dan App Store.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq__box-collapseBox--item">
                                        <a class="cl p-white" data-bs-toggle="collapse" href="#coll-faq2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Apakah produk Redgine aman untuk semua kalangan?
                                        </a>
                                        <div class="collapse" id="coll-faq2">
                                            <div class="collapse-box">
                                                <p class="p-white">Ya, Anda dapat merasakan khasiat jahe merah dengan takaran yang tepat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq__box-collapseBox--item">
                                        <a class="cl p-white" data-bs-toggle="collapse" href="#coll-faq3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Bagaimana cara bergabung di ekosistem Negeri Jahe Merah?
                                        </a>
                                        <div class="collapse" id="coll-faq3">
                                            <div class="collapse-box">
                                                <p class="p-white">Anda cukup mengisi form di halaman kategori yang Anda minati, dan tim kami akan segera menghubungi Anda.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq__box-collapseBox--item">
                                        <a class="cl p-white" data-bs-toggle="collapse" href="#coll-faq4" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Apakah dapat menjadi reseller produk BEJO?
                                        </a>
                                        <div class="collapse" id="coll-faq4">
                                            <div class="collapse-box">
                                                <p class="p-white">Ya. Anda bisa mengisi form di bagian Kontak Kami, dan tim kami akan segera menghubungi Anda.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq__box-collapseBox--item">
                                        <a class="cl p-white" data-bs-toggle="collapse" href="#coll-faq5" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Berapa harga tiket Taman Jahe Merah dan bagaimana cara membeli tiketnya?
                                        </a>
                                        <div class="collapse" id="coll-faq5">
                                            <div class="collapse-box">
                                                <p class="p-white">Weekday: Rp00.000</p>
                                                <p class="p-white">Weekend: Rp00.000</p>
                                                <p class="p-white">Tiket dapat dibeli secara langsung di booth tiket Taman Jahe Merah</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="black-bg"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="footerMenu__wrapper">
                            <div class="footerMenu__wrapper-left">
                                <h4 class="p-white">Get In Touch</h4>
                                <p class="p-white pt">PT Bintang Toedjoe</p>
                                <p class="addr">Jl. Jend. A. Yani no. 2.</p>
                                <p class="addr">Pulomas, Jakarta 13210,</p>
                                <p class="addr">Indonesia</p>
                            </div>
                            <div class="footerMenu__wrapper-right">
                                <ul>
                                    <li><a class="sitemap" href="">Sitemap</a></li>
                                    <li><a href="{{route('profile')}}">PROFILE</a></li>
                                    <li><a href="{{route('products')}}">PRODUCTS</a></li>
                                    <li><a href="{{route('business')}}">BUSINESS</a></li>
                                    <li><a href="{{route('latest-news')}}">NEWS</a></li>
                                    <li><a href="{{route('visit')}}">VISIT US</a></li>
                                    <li><a href="{{route('contact')}}">CONTACT US</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="footerMenu__wrapper">
                            <div class="footerMenu__wrapper-left tpc">
                                <ul>
                                    <li><a href="">Term & Conditions</a></li>
                                    <li><a href="">Privacy Policy</a></li>
                                    <li><a href="">Cookie Policy</a></li>
                                </ul>
                            </div>
                            <div class="footerMenu__wrapper-right">
                                <p class="copyright">2021 - PT Bintang Toedjoe - All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="{{ asset('/js/vendor/anime-master/lib/anime.min.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
        @yield('script')


        </body>
</html>


