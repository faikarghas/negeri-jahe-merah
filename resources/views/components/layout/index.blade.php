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
                                            Link with href
                                        </a>
                                        <div class="collapse" id="coll-faq1">
                                            <div class="collapse-box">
                                                <p class="p-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam qui minima excepturi unde! Exercitationem aut beatae error eaque dolore quia laudantium eum sunt commodi veritatis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq__box-collapseBox--item">
                                        <a class="cl p-white" data-bs-toggle="collapse" href="#coll-faq2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Link with href
                                        </a>
                                        <div class="collapse" id="coll-faq2">
                                            <div class="collapse-box">
                                                <p class="p-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam qui minima excepturi unde! Exercitationem aut beatae error eaque dolore quia laudantium eum sunt commodi veritatis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq__box-collapseBox--item">
                                        <a class="cl p-white" data-bs-toggle="collapse" href="#coll-faq3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Link with href
                                        </a>
                                        <div class="collapse" id="coll-faq3">
                                            <div class="collapse-box">
                                                <p class="p-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam qui minima excepturi unde! Exercitationem aut beatae error eaque dolore quia laudantium eum sunt commodi veritatis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq__box-collapseBox--item">
                                        <a class="cl p-white" data-bs-toggle="collapse" href="#coll-faq4" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Link with href
                                        </a>
                                        <div class="collapse" id="coll-faq4">
                                            <div class="collapse-box">
                                                <p class="p-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam qui minima excepturi unde! Exercitationem aut beatae error eaque dolore quia laudantium eum sunt commodi veritatis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq__box-collapseBox--item">
                                        <a class="cl p-white" data-bs-toggle="collapse" href="#coll-faq5" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Link with href
                                        </a>
                                        <div class="collapse" id="coll-faq5">
                                            <div class="collapse-box">
                                                <p class="p-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam qui minima excepturi unde! Exercitationem aut beatae error eaque dolore quia laudantium eum sunt commodi veritatis.</p>
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
                                    <li><a href="">PROFILE</a></li>
                                    <li><a href="">PRODUCTS</a></li>
                                    <li><a href="">BUSINESS</a></li>
                                    <li><a href="">NEWS</a></li>
                                    <li><a href="">VISIT US</a></li>
                                    <li><a href="">CONTACT US</a></li>
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


