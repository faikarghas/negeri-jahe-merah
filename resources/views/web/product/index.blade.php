@extends('components/layout.index')
@section('header')
    <header page="product">
        <menu>
            <div class="container-fluid g-0">
                @include('components/presentational/menu/index')
            </div>
        </menu>
        <div class="bg-yellow"></div>
    </header>
@endsection
@section('main')
    <main page="product">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="header__sec1">
                            <h2 class="p-white">Our Products</h2>
                            <div class="bg-yellow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second bg-grey">
            <div class="container-fluid g-0 position-relative z-1">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-products">
                            <div class="product-item">
                                <img src="{{asset('images/red-ginger-powder-extract--premium.jpg')}}" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                                    <a href="{{route('product-detail','red-ginger-powder-extract-premium')}}" class="btn-njm-yellow btn-product-item">MORE INFORMATION</a>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="{{asset('images/red-ginger--powder-extract--standardized.jpg')}}" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Red Ginger Powder Extract Standarized</p>
                                    <a href="{{route('product-detail','red-ginger-powder-extract-standardized')}}" class="btn-njm-yellow btn-product-item">MORE INFORMATION</a>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="{{asset('images/red-ginger-powder.jpg')}}" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Red Ginger Powder</p>
                                    <a href="{{route('product-detail','red-ginger-powder')}}" class="btn-njm-yellow btn-product-item">MORE INFORMATION</a>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="{{asset('images/red-ginger-with palm-sugar.jpg')}}" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Red Ginger Instant Powder with Palm Sugar</p>
                                    <a href="{{route('product-detail','red-ginger-instant-powder')}}" class="btn-njm-yellow btn-product-item">MORE INFORMATION</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="slider-products m-2">
                            <div class="product-item">
                                <img src="{{asset('images/fresh-ginger.jpg')}}" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Red Ginger Fresh</p>
                                    <a href="{{route('product-detail','bejo-red-ginger-flavored-milk')}}" class="btn-njm-yellow btn-product-item">MORE INFORMATION</a>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="{{asset('images/bejo-jahe-merah.jpg')}}" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Bejo Jahe Merah</p>
                                    <a href="{{route('product-detail','bejo-red-ginger')}}" class="btn-njm-yellow btn-product-item">MORE INFORMATION</a>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="{{asset('images/bejo-sujamer.jpg')}}" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Bejo Sujamer</p>
                                    <a href="{{route('product-detail','bejo-red-ginger-flavored-milk')}}" class="btn-njm-yellow btn-product-item">MORE INFORMATION</a>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="{{asset('images/komix-herbal.jpg')}}" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">KOMIX Herbal</p>
                                    <a href="{{route('product-detail','komi- herbal')}}" class="btn-njm-yellow btn-product-item">MORE INFORMATION</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-yellow-sc"></div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function (params) {
            $('.slider-profile').slick({
                dots: false,
                arrows: false,
                slidesToShow: 3,
                slidesToScroll: 1,
            });
        })
    </script>
@endsection