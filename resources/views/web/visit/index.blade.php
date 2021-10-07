@extends('components/layout.index')
@section('header')
    <header page="visit">
        <menu>
            <div class="container-fluid g-0 position-relative z-2">
                @include('components/presentational/menu/index')
            </div>
            <div class="bg-red-right"></div>
        </menu>
        <div class="bg-red-right"></div>
        <div class="head_content">
            <div class="head_content-text">
                <div class="header-text-wrapper">
                    <h4 class="hashtag-text">#BelajarDariJaheMerah</h4>
                    <h4>Welcome to <br/>Herbal Edutainment<br/>Experience</h4>
                    <div class="download_on">
                        <p>Get more updates and promo!</p>
                    </div>
                </div>
            </div>
            <div class="head_content-img">
                <img src="{{asset('images/negeri_jahe_merah_visit_us.png')}}" alt="">
            </div>
        </div>
    </header>
@endsection
@section('main')
    <main page="visit">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="go__det">
                            <img src="{{asset('images/taman_jahe_merah.jpg')}}" width="100%" height="100%"/>
                            <div class="go__det-content">
                                <h4 class="p-white">Taman Jahe Merah</h4>
                                <p class="p-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nostrum, esse fugit numquam velit alias doloremque perferendis repellat odio recusandae.</p>
                                <div class="btn-njm-yellow">GO DETAIL</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="go__det">
                            <img src="{{asset('images/bumi-jahe-merah--aromatik.jpg')}}" width="100%" height="100%"/>
                            <div class="go__det-content">
                                <h4 class="p-white">Bumi Jahe Merah Aromatik</h4>
                                <p class="p-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nostrum, esse fugit numquam velit alias doloremque perferendis repellat odio recusandae.</p>
                                <div class="btn-njm-yellow">GO DETAIL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 position-relative space-bg">
                        <div class="bg-red-right"></div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="section__second-text">
                            <div class="content">
                                <img src="{{asset('images/tmj-logo2.png')}}" alt="" srcset="">
                                <h4 >Taman Jahe Merah</h4>
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nostrum, esse fugit numquam velit alias doloremque perferendis repellat odio recusandae.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="container-fluid g-0">
                            <div class="row g-0">
                                <div class="col-12 col-lg-6">
                                    <img src="{{asset('images/tanam_bibit_jahe_merah.jpg')}}" width="100%" height="100%"/>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <img src="{{asset('images/anak_tanam_bibit_jahe_merah.jpg')}}" width="100%" height="100%"/>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <img src="{{asset('images/tanam_bibit_jahe_merah.jpg')}}" width="100%" height="100%"/>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <img src="{{asset('images/tanam_bibit_jahe_merah.jpg')}}" width="100%" height="100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__fullSlider">
            <div class="slider-visit-1">
                <img src="https://source.unsplash.com/random/800x501" width="100%" height="100%"/>
                <img src="https://source.unsplash.com/random/800x502" width="100%" height="100%"/>
                <img src="https://source.unsplash.com/random/800x503" width="100%" height="100%"/>
                <img src="https://source.unsplash.com/random/800x504" width="100%" height="100%"/>
                <img src="https://source.unsplash.com/random/800x505" width="100%" height="100%"/>
            </div>
        </section>
        <section class="section__third"></section>
        <section class="section__fourth">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <img src="https://source.unsplash.com/random/400x305" width="100%" height="100%"/>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="section__fourth-text">
                            <div class="content">
                                <h4 class="p-white">Bumi Jahe Merah Aromatik</h4>
                                <p class="p-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quae, a earum praesentium iste nemo quia maiores sed magnam aspernatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__fullSlider">
            <div class="slider-visit-2">
                <img src="https://source.unsplash.com/random/800x506" width="100%" height="100%"/>
                <img src="https://source.unsplash.com/random/800x507" width="100%" height="100%"/>
                <img src="https://source.unsplash.com/random/800x508" width="100%" height="100%"/>
                <img src="https://source.unsplash.com/random/800x509" width="100%" height="100%"/>
                <img src="https://source.unsplash.com/random/800x510" width="100%" height="100%"/>
            </div>
        </section>
        <section class="section__fifth">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <img src="https://source.unsplash.com/random/800x511" width="100%" height="100%"/>
                    </div>
                    <div class="col-12 col-lg-3">
                        <img src="https://source.unsplash.com/random/800x512" width="100%" height="100%"/>
                    </div>
                    <div class="col-12 col-lg-3">
                        <img src="https://source.unsplash.com/random/800x513" width="100%" height="100%"/>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function (params) {
            $('.slider-visit-1').slick({
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            });
            $('.slider-visit-2').slick({
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            });
        })
    </script>
@endsection