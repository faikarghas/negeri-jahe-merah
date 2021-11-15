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
                <img src="{{asset('images')}}/{{$product[0]->image}}" width="100%" height="100%"/>
                <div class="other_product">
                    <h4>Other Product</h4>
                    <div class="slider-products">

                        @foreach ($otherProduct as $itemOther)
                        <div class="product-item">
                            <img src="{{asset('images')}}/{{$itemOther->image}}" width="100%" height="100%"/>
                            <div class="product-item--text">
                                <p class="p-red text-center">{{$itemOther->name}}</p>
                                <a href="{{route('product-detail',$itemOther->slug)}}" class="btn-njm-yellow btn-product-item">MORE INFORMATION</a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="product__detail-ct">
                <h4>{{$product[0]->name}}</h4>
                <div class="det__box-collapseBox">
                    <div class="det__box-collapseBox--item">
                        <a class="cl p-white" data-bs-toggle="collapse" href="#coll-description" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Description
                        </a>
                        <div class="collapse show" id="coll-description" data-parent="#myGroup">
                            <div class="collapse-box">
                                <p class="p-white">
                                    {{$product[0]->description_en}}
                                </p>
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
                                <p class="p-white">Red ginger is a unique Indonesian ginger variety,  that primarily cultivated and used for traditional medicine, health supplement, or beverages.  It has stronger aroma and warming sensation (due to its higher gingerol content),  compared to regular ginger.  Gingerol in red ginger, has benefit or efficacy as anti inflammatory, analgetic,  anti hyperglicemic, plasma lipid lowering, uric acid lowering, and wound healing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="buy__wrapper">
                        <a data-bs-toggle="modal" data-bs-target="#modal-product"  class="btn-njm-yellow text-red order-now">ORDER NOW</a>
                    </div>
                    <div class="modal fade" id="modal-product"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl ">
                          <div class="modal-content">
                            <div class="modal-body">
                                <div class="container-fluid g-0">
                                    <div class="row g-0">
                                        <div class="col-5">
                                            <div class="modal-img">
                                                <img src="{{asset('images')}}/{{$product[0]->image}}" width="100%" height="100%"/>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="modal-desc">
                                                <div class="modal-desc-title">
                                                    <h4>{{$product[0]->name}}</h4>
                                                    <p>Choose Online Store</p>
                                                </div>
                                                <div class="modal-desc-online">
                                                    <a href="">
                                                        <img src="{{asset('images/tokopedia.png')}}" alt="" srcset="">
                                                    </a>
                                                    <a href="">
                                                        <img src="{{asset('images/shopee.png')}}" alt="" srcset="">
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                responsive: [
                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ]
            });
        })
    </script>
@endsection