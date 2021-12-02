@extends('components/layout.index')
@section('header')
    <header page="visit">
        <menu>
            <div class="container-fluid g-0 position-relative z-2">
                @include('components/presentational/menu/index')
            </div>
            <div class="bg-red-right forDesktop"></div>
        </menu>
        <div class="bg-red-right forDesktop"></div>
        <div class="head_content">
            <div class="head_content-text">
                <div class="header-text-wrapper">
                    <h4 class="hashtag-text">#BelajarDariJaheMerah</h4>
                    <h4>Welcome to <br/>Herbal Edutainment<br/>Experience</h4>
                    <div class="download_on">
                        <p>Get more updates and promo!</p>
                    </div>
                    <ul>
                        <li><a href=""><img src="{{asset('images/googleplay.png')}}" alt=""></a></li>
                        <li><a href=""><img src="{{asset('images/appstore.png')}}" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="head_content-img forDesktop">
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
                            <div class="bg-red-hover"></div>
                            <img src="{{asset('images/taman_jahe_merah.jpg')}}" width="100%" height="100%"/>
                            <div class="go__det-content">
                                <h4 class="p-white">Taman Jahe Merah</h4>
                                <p class="p-white">Taman Jahe Merah, located in the independent town of Deltamas, Cikarang, is a miniature of the BINA environment that serves as a symbol of Indonesia's herbal treasure. At Taman Jahe Merah, you may learn over 300 herbal plants, from nurseries to the production of premium herbal goods. All of these procedures may be learnt in a simple and enjoyable manner using the resources of Taman Jahe Merah, such as the Augmented Reality facility. This is the moment to acknowledge and comprehend Indonesia's natural treasures.</p>
                                <div class="btn-njm-yellow">GO DETAIL</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="go__det">
                            <div class="bg-red-hover"></div>
                            <img src="{{asset('images/bumi-jahe-merah--aromatik.jpg')}}" width="100%" height="100%"/>
                            <div class="go__det-content">
                                <h4 class="p-white">Bumi Jahe Merah Aromatik</h4>
                                <p class="p-white">Bumi Jahe Merah Aromatic, which is spread across 60 hectares in Ciganea, Purwakarta, is the upstream of high-quality herbal goods with its expanse of aromatic citronella and scarlet ginger. Citronella distillation, proceed with a distillation capacity of more than 100 tons, is also available here, ready to create premium products for you.</p>
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
                    <div class="col-12 position-relative space-bg forDesktop">
                        <div class="bg-red-right"></div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="section__second-text">
                            <div class="content">
                                <img src="{{asset('images/tmj-logo2.png')}}" alt="" srcset="">
                                <h4 >Taman Jahe Merah</h4>
                                <p >Taman Jahe Merah, located in the independent town of Deltamas, Cikarang, is a miniature of the BINA environment that serves as a symbol of Indonesia's herbal treasure. At Taman Jahe Merah, you may learn over 300 herbal plants, from nurseries to the production of premium herbal goods. All of these procedures may be learnt in a simple and enjoyable manner using the resources of Taman Jahe Merah, such as the Augmented Reality facility. This is the moment to acknowledge and comprehend Indonesia's natural treasures.</p>
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
                                    <img src="{{asset('images/edukasi_taman_jahe_merah.jpg')}}" width="100%" height="100%"/>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <img src="{{asset('images/pengembangan_produk_taman_jahe_merah.jpg')}}" width="100%" height="100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__fullSlider">
            <div class="slider-visit-1">
                <img src="{{asset('images/taman_jahe_merah_konsep.jpg')}}" width="100%" height="100%"/>
                <img src="{{asset('images/taman_jahe_merah_konsep.jpg')}}" width="100%" height="100%"/>
            </div>
        </section>
        <section class="section__third">
            <div class="section__third-legenda">
                <h5>Legenda Taman Jahe Merah</h5>
                <ol>
                    <li>Amphiteatre</li>
                    <li>Nursery Class</li>
                    <li>Parking Area</li>
                    <li>Taman Nusantara</li>
                    <li>Out Nursery</li>
                    <li>Cultivation</li>
                    <li>Composting</li>
                    <li>Herbal Galery</li>
                    <li>Green House</li>
                    <li>Kls Pengolahan</li>
                    <li>Aquaculture</li>
                    <li>Taman Produk B7</li>
                    <li>Gift Shop & Office</li>
                    <li>Kantin Herbal</li>
                    <li>Taman F and B</li>
                    <li>Taman Recycle</li>
                    <li>Taman Zen</li>
                    <li>Taman Aquatik</li>
                    <li>Taman Labirin</li>
                    <li>Taman Aroma</li>
                    <li>Taman Padang Pasir</li>
                    <li>Taman Lebah</li>
                    <li>Taman Asrama</li>
                    <li>Taman Floral</li>
                    <li>Mnr Kantong Semar</li>
                    <li>Taman Fauna</li>
                    <li>Outbound Court</li>
                </ol>
            </div>
            <div class="section__third-img">
                <img  src="{{asset('images/taman_jahe_merah_map.png')}}" alt="" srcset="">
            </div>
        </section>
        <section class="section__fourth">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('images/bumi_jahe_merah.jpg')}}" width="100%" height="100%"/>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="section__fourth-text">
                            <div class="content">
                                <h4 class="p-white">Bumi Jahe Merah Aromatik</h4>
                                <p class="p-white">Bumi Jahe Merah Aromatic, which is spread across 60 hectares in Ciganea, Purwakarta, is the upstream of high-quality herbal goods with its expanse of aromatic citronella and scarlet ginger. Citronella distillation, proceed with a distillation capacity of more than 100 tons, is also available here, ready to create premium products for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__fullSlider">
            <div class="slider-visit-2">
                <img src="{{asset('images/bumi_jahe_merah_petani.jpg')}}" width="100%" height="100%"/>
                <img src="{{asset('images/bumi_jahe_merah_petani.jpg')}}" width="100%" height="100%"/>
            </div>
        </section>
        <section class="section__fifth">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('images/bumi_jahe_merah_peneliti.jpg')}}" width="100%" height="100%"/>
                    </div>
                    <div class="col-12 col-lg-3">
                        <img src="{{asset('images/bumi_jahe_merah_pabrik.jpg')}}" width="100%" height="100%"/>
                    </div>
                    <div class="col-12 col-lg-3">
                        <img src="{{asset('images/bumi_jahe_merah_farm.jpg')}}" width="100%" height="100%"/>
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