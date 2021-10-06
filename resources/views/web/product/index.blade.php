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
                                <img src="https://source.unsplash.com/random/200x424" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                                    <a href="{{route('product-detail','red-ginger')}}" class="btn-njm-yellow btn-product-item">MORE INFORMATION</a>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="https://source.unsplash.com/random/200x424" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                                    <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="https://source.unsplash.com/random/200x424" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                                    <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="https://source.unsplash.com/random/200x424" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                                    <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="slider-products m-2">
                            <div class="product-item">
                                <img src="https://source.unsplash.com/random/200x424" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                                    <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="https://source.unsplash.com/random/200x424" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                                    <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="https://source.unsplash.com/random/200x424" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                                    <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="https://source.unsplash.com/random/200x424" width="100%" height="100%"/>
                                <div class="product-item--text">
                                    <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                                    <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
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