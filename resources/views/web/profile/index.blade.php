@extends('components/layout.index')
@section('header')
    <header page="profile">
        <menu>
            <div class="container-fluid g-0">
                @include('components/presentational/menu/index')
            </div>
        </menu>
    </header>
@endsection
@section('main')
    <main page="profile">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="header__sec1">
                            <h2 class="p-white">Profile</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="proflie__sec1">
                            <div class="proflie__sec1-left">
                                <img src="{{asset('images/pr1.png')}}" alt="" srcset="">
                                <img src="{{asset('images/pr2.png')}}" alt="" srcset="">
                                <img src="{{asset('images/pr3.png')}}" alt="" srcset="">
                                <img src="{{asset('images/pr4.png')}}" alt="" srcset="">
                            </div>
                            <div class="proflie__sec1-right">
                                <h3 class="p-yellow">Negeri Jahe Merah for Indonesia and the world</h3>
                                <p>Negeri Jahe Merah is the realization of Indonesia's desire of introducing one of its natural treasures, Red Ginger, to the world. As a developer, Bintang Toedjoe is committed to creating the greatest goods from the best seeds. As a result, we will lead the way in the production of Red Ginger by providing better commodities to farmers and the general public, as well as by developing the Red Ginger community ecosystem throughout the country.

                                    We have also built herbal edutainment facilities in order to offer learning and experience to the younger generation. The herbal facilities are Taman Jahe Merah, Bumi Jahe Merah Aromatic, and Studio Jahe Merah.

                                    Celebrate Indonesia's pride in producing the best grade Red Ginger plant in the world's eyes.</p>
                                <h3 class="tag p-red">#JaheMerahkanIndonesia</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="section__second-left bg-grey">
                            <h3 class="p-red">BINA &<br/>Redgine</h3>
                            <p>BINA (Bintang Toedjoe Inovasi Natural) is a B2B division of Bintang Toedjoe which focuses on natural raw materials, to support its sustainability and availability.
                                Redgine is a trademark of natural raw materials derived from red ginger, which is produced from an ecosystem, initiated by BINA.
                                Redgine quality is controlled from upstream to downstream, with a traceable & recorded system.
                                Every purchase usage of Redgine red ginger raw material means welfare for thousands of farmers, seeders, post harvest
                                processors, researchers, and extractors distillators, who are members of the ecosystem.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="section__second-right">
                            <img src="{{asset('images/pr5.png')}}" alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="section__second-right">
                            <img src="{{asset('images/pr6.png')}}" alt="" width="100%">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="section__second-left">
                            <h3 class="p-red">Traceable &<br/>Recorded</h3>
                            <p>The advantages of Redgine's red ginger raw material are its controlled quality and the clarity of its natural origin (traceable & recorded) because it resulted from one ecosystem.
                                This ecosystem allows natural raw materials to be controlled, from planting, harvesting, processing, to packaging, thus ensuring that the natural raw materials produced are the best quality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__third">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-4">
                        <div class="top-img">
                            <img src="{{asset('images/eco-redgine.png')}}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="top-desc">
                            <div>
                                <h3 class="p-yellow">Redgine Ecosystem</h3>
                                <p class="p-white">An ecosystem to support Redgine's raw material B2B business, departs from our vision that business is not only for the welfare of ourselves, but also the welfare of others . "Blessing the community and people through the ecosystem".
                                    For us, every drop of sweat from our farmers, post harvest processors, to researchers, through sharing the economy with extractor and distillator partners, enabling us to produce world quality natural products, based on scientific studies, which are also supported by the government, in collaboration with BPPT, LIPI, the Ministry of Health Ministry of Agriculture, Balitro, and other agencies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="slider-eco-top-wrapper">
                            <div class="arrow-left"><img width="35px" src="{{asset('images/previous.svg_button.svg')}}" alt="" srcset=""></div>
                            <div class="slider-profile">
                                <div class="slider-profile-item">
                                    <div class="item-wrapper">
                                       <img src="{{asset('images/ekosistem_nursery.jpg')}}" width="100%" height="100%"/>
                                        <div class="info">
                                            <h5>Nursery</h5>
                                            <p>CONVENTIAL & TISSUE CULTURE TECHNOLOGY</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-profile-item">
                                    <div class="item-wrapper">
                                        <img src="{{asset('images/ekosistem_cultivation.jpg')}}" width="100%" height="100%"/>
                                        <div class="info">
                                            <h5>Cultivation</h5>
                                            <p>EDUCATING, FACILITATING, MONITORING OPERATING PROCEDURES</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-profile-item">
                                    <div class="item-wrapper">
                                        <img src="{{asset('images/ekosistem_post_harvest.jpg')}}" width="100%" height="100%"/>
                                        <div class="info">
                                            <h5>Post Harvest</h5>
                                            <p>EDUCATING, FACILITATING, PROCEDURE STANDARIZATION METHODOLOGY DEVELOPMENT</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-profile-item">
                                    <div class="item-wrapper">
                                        <img src="{{asset('images/ekosistem_extraction_distillation.jpg')}}" width="100%" height="100%"/>
                                        <div class="info">
                                            <h5>Extraction & Distillation</h5>
                                            <p>EDUCATING, FACILITATING, MONITORING OPERATING PROCEDURES</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-profile-item">
                                    <div class="item-wrapper">
                                        <img src="{{asset('images/ekosistem_pharmacology.jpg')}}" width="100%" height="100%"/>
                                        <div class="info">
                                            <h5>Pharmacology</h5>
                                            <p>EDUCATING, FACILITATING, MONITORING OPERATING PROCEDURES</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-profile-item">
                                    <div class="item-wrapper">
                                        <img src="{{asset('images/ekosistem_commercialization.jpg')}}" width="100%" height="100%"/>
                                        <div class="info">
                                            <h5>Commercialization</h5>
                                            <p>EDUCATING, FACILITATING, MONITORING OPERATING PROCEDURES</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-profile-item">
                                    <div class="item-wrapper">
                                        <img src="{{asset('images/ekosistem_community_development.jpg')}}" width="100%" height="100%"/>
                                        <div class="info">
                                            <h5>Community Development</h5>
                                            <p>EDUCATING, FACILITATING, MONITORING OPERATING PROCEDURES</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="arrow-right"><img style="transform: rotate( 180deg);" width="35px" src="{{asset('images/previous.svg_button.svg')}}" alt="" srcset=""></div>
                        </div>

                        <div class="container-fluid g-0">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="slider-desc">
                                        <p class="p-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eius dolores rem, enim vitae eveniet maxime odit reprehenderit amet hic voluptatem, quasi eaque aperiam dolor doloribus ratione in a veritatis nesciunt? Reprehenderit similique illo sed vel, ad, eligendi quod non dignissimos minima alias quas omnis voluptatum officiis facilis modi cum!</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="slider-desc">
                                        <a href="{{route('business')}}" class="btn-njm-yellow">JOIN US</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__fourth">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="section__fourth-desc">
                            <h3>Why Red <br/>Ginger?</h3>
                            <p>Red ginger is an indigenous Indonesian plant that has been used for centuries to boost endurance. Red ginger, which includes gingerols, zingerones, and active substances, can also be used to treat digestive issues, muscular discomfort, and to avoid chronic illnesses like cancer and diabetes.
                                With beneficial substances for the body, the demand for red ginger grows year after year, allowing it to help strengthen the community, absorb market output, and enhance the regional and national economies.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('images/jahe.png')}}" width="100%" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function (params) {
            $('.slider-profile').slick({
                dots: false,
                arrows: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: $('.arrow-left'),
                nextArrow: $('.arrow-right'),
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