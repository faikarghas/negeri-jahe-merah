@extends('components/layout.index')
@section('header')
    <header page="product-detail">
        <menu>
            <div class="container-fluid g-0 position-relative z-2">
                @include('components/presentational/menu/index')
            </div>
        </menu>
        <div class="product__detail">
            <div class="product__detail-img">
                <img src="{{asset('images/red-ginger-powder.jpg')}}" width="100%" height="100%"/>
                <div class="other_product">
                    <h4>Other Product</h4>
                    <div class="slider-products">
                        <div class="product-item">
                            <img src="{{asset('images/red-ginger-powder-extract--premium.jpg')}}" width="100%" height="100%"/>
                            <div class="product-item--text">
                                <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                                <a href="{{route('product-detail','red-ginger')}}" class="btn-njm-yellow btn-product-item">MORE INFORMATION</a>
                            </div>
                        </div>
                        <div class="product-item">
                            <img src="{{asset('images/red-ginger--powder-extract--standardized.jpg')}}" width="100%" height="100%"/>
                            <div class="product-item--text">
                                <p class="p-red text-center">Red Ginger Powder Extract Standarized</p>
                                <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                            </div>
                        </div>
                        <div class="product-item">
                            <img src="{{asset('images/red-ginger-powder.jpg')}}" width="100%" height="100%"/>
                            <div class="product-item--text">
                                <p class="p-red text-center">Red Ginger Powder</p>
                                <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                            </div>
                        </div>
                        <div class="product-item">
                            <img src="{{asset('images/red-ginger-with palm-sugar.jpg')}}" width="100%" height="100%"/>
                            <div class="product-item--text">
                                <p class="p-red text-center">Red Ginger Instant Powder with Palm Sugar</p>
                                <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__detail-ct">
                <h4>Red Ginger Powder</h4>
                <div class="det__box-collapseBox">
                    <div class="det__box-collapseBox--item">
                        <a class="cl p-white" data-bs-toggle="collapse" href="#coll-description" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Description
                        </a>
                        <div class="collapse show" id="coll-description" data-parent="#myGroup">
                            <div class="collapse-box">
                                <p class="p-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam qui minima excepturi unde! Exercitationem aut beatae error eaque dolore quia laudantium eum sunt commodi veritatis.</p>
                                <br>
                                <p class="p-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam qui minima excepturi unde! Exercitationem aut beatae error eaque dolore quia laudantium eum sunt commodi veritatis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="det__box-collapseBox--item">
                        <a class="cl p-white" data-bs-toggle="collapse" href="#coll-users" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Users
                        </a>
                        <div class="collapse" id="coll-users">
                            <div class="collapse-box">
                                <p class="p-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam qui minima excepturi unde! Exercitationem aut beatae error eaque dolore quia laudantium eum sunt commodi veritatis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="det__box-collapseBox--item">
                        <a class="cl p-white" data-bs-toggle="collapse" href="#coll-benefits" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Benefits
                        </a>
                        <div class="collapse" id="coll-benefits">
                            <div class="collapse-box">
                                <p class="p-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam qui minima excepturi unde! Exercitationem aut beatae error eaque dolore quia laudantium eum sunt commodi veritatis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('main')
    <main page="product-detail">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function (params) {
            $('.slider-products').slick({
                dots: false,
                arrows: false,
                slidesToShow: 2,
                slidesToScroll: 1,
            });
        })
    </script>
@endsection