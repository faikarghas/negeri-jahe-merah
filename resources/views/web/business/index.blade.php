@extends('components/layout.index')
@section('header')
    <header page="business">
        <menu>
            <div class="container-fluid g-0">
                @include('components/presentational/menu/index')
            </div>
        </menu>
    </header>
@endsection
@section('main')
    <main page="business">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="header-business">
                            <h2 class="p-white">Join Our Ecosystem</h2>
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
                                            <p>CONVENTIONAL & TISSUE CULTURE TECHNOLOGY</p>
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
                                            <p>EDUCATING, FACILITATING, PROCEDURE STANDARDIZATION METHODOLOGY DEVELOPMENT</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-profile-item">
                                    <div class="item-wrapper">
                                        <img src="{{asset('images/ekosistem_extraction_distillation.jpg')}}" width="100%" height="100%"/>
                                        <div class="info">
                                            <h5>Extraction & Distillation</h5>
                                            <p>TECHNOLOGY DEVELOPMENT 3RD PARTY COLLABORATION PILOT & SCALE UP RESEARCH</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-profile-item">
                                    <div class="item-wrapper">
                                        <img src="{{asset('images/ekosistem_pharmacology.jpg')}}" width="100%" height="100%"/>
                                        <div class="info">
                                            <h5>Pharmacology</h5>
                                            <p>PRE CLINICAL & CLINICAL STUDY 3RD PARTY COLLABORATION EVIDENCE BASED HERBAL MEDICINE</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-profile-item">
                                    <div class="item-wrapper">
                                        <img src="{{asset('images/ekosistem_commercialization.jpg')}}" width="100%" height="100%"/>
                                        <div class="info">
                                            <h5>Commercialization</h5>
                                            <p>SUSTAINABLE SUPPLY OF HERBAL MATERIAL SUSTAINABLE GROWTH GOING GLOBAL</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-profile-item">
                                    <div class="item-wrapper">
                                        <img src="{{asset('images/ekosistem_community_development.jpg')}}" width="100%" height="100%"/>
                                        <div class="info">
                                            <h5>Community Development</h5>
                                            <p>TRAINING, EDUTAINMENT, INCENTIVES, SCHOLARSHIP, RESEARCH SPONSORSHIP</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="arrow-right"><img style="transform: rotate( 180deg);" width="35px" src="{{asset('images/previous.svg_button.svg')}}" alt="" srcset=""></div>
                        </div>
                        <div class="container-fluid g-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-desc">
                                        <p class="p-white">Superior plants start from superior seeds From the initial process, namely nursery, we work together with BPPT, Inagro, and Ubaya, to be able to produce standardized superior red ginger seeds. We also conduct research on red ginger tissue culture technology. This technology will produce genetically consistent red ginger seeds.</p>
                                        <p class="p-white">With 10.000 farmers and their communities (all recorded in our database system), spread all over Indonesia, red ginger is cultivated with strict control. We carried out data collection, facilitation, education, preparation of procedures, and monitoring, including control of harvesting age, so that the rhizome was cultivated according to standards and was recorded (traceable & recorded).</p>
                                        <p class="p-white">Red ginger, which at 10 months old, is harvested and sent immediately to post harvest centers, including cooperation with local government agencies such as P4TO. At post harvest centers, red ginger is sorted, washed, sliced, dried, and packaged. Drying is done thoroughly, thus making the simplicia safe for consumption.</p>
                                        <p class="p-white">We collaborate with several qualified extraction and distillation partners to produce standardized red ginger extract and essential oil. The red ginger extract and essential oil produced are controlled so that they have the levels of the active substances gingerol and zingiberene according to specifications. This is a significant advantage of Redgine extract, that its active substance marker levels are controlled.</p>
                                        <p class="p-white">Research and pharmacological studies, making Redgine red ginger raw material and its ecosystem have a strong scientific foundation. This includes the efficacy test, safety test, toxicity test, test as an immunomodulator, etc. In carrying out this study, we collaborated with leading institutions and goverment.</p>
                                        <p class="p-white">Redgine are marketed to the pharmaceutical, herbal, food and beverage, cosmetic, supplement and nutraceutical industries. Raw material preparations are adjusted according the needs of related industries (simplicia powder, extract powder, liquid extract, oil). To support commercialization, Redgine was also introduced via various raw material exhibition events, both at home and abroad.</p>
                                        <p class="p-white">Community Development is part of the sustainability initiatives to implement ESG. In this program, all stake holders, namely researchers, farmers, post harvest teams, outsourcing, and consumers are given guidance through periodic training, education, including rewards by supporting our partners to carry out various research related to red ginger as well as edutainment in the form of mini ecosystems to consumers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact__business">
                            <div class="contact__business-left slider-eco">
                                <div class="slider-eco-item">
                                    <img src="{{asset('images/ekosistem_nursery.jpg')}}" width="100%" height="100%"/>
                                    <h5>> Nursery</h5>
                                    <p>We are glad to welcome you to the Red Ginger Country family to work together and have a hand in the nursery process.</p>
                                </div>
                                <div class="slider-eco-item">
                                    <img src="{{asset('images/ekosistem_cultivation.jpg')}}" width="100%" height="100%"/>
                                    <h5>> Cultivation</h5>
                                    <p>We are glad to welcome you to the Red Ginger Country family to work together and have a hand in the cultivation process.</p>
                                </div>
                                <div class="slider-eco-item">
                                    <img src="{{asset('images/ekosistem_post_harvest.jpg')}}" width="100%" height="100%"/>
                                    <h5>> Post Harvest</h5>
                                    <p>We are glad to welcome you to the Red Ginger Country family to work together and have a hand in the post-harvest process.</p>
                                </div>
                                <div class="slider-eco-item">
                                    <h5>> Extraction & Distillation</h5>
                                    <img src="{{asset('images/ekosistem_extraction_distillation.jpg')}}" width="100%" height="100%"/>
                                    <p>We are glad to welcome you to the Red Ginger Country family to work together and have a hand in the extraction/distillation process.</p>
                                </div>
                                <div class="slider-eco-item">
                                    <h5>> Pharmacology</h5>
                                    <img src="{{asset('images/ekosistem_pharmacology.jpg')}}" width="100%" height="100%"/>
                                    <p>We are glad to welcome you to the Red Ginger Country family to cooperate and have a hand in the pharmacological process.</p>
                                </div>
                                <div class="slider-eco-item">
                                    <h5>> Commercialization</h5>
                                    <img src="{{asset('images/ekosistem_commercialization.jpg')}}" width="100%" height="100%"/>
                                    <p>We are glad to welcome you to the Red Ginger Country family to cooperate and have a hand in the commercialization process.</p>
                                </div>
                                <div class="slider-eco-item">
                                    <h5>> Community Development</h5>
                                    <img src="{{asset('images/ekosistem_community_development.jpg')}}" width="100%" height="100%"/>
                                    <p>We are glad to welcome you to the Red Ginger Country family to work together and have a hand in the community development process.</p>
                                </div>
                            </div>
                            <div class="contact__business-right">
                                <div class="arrow_rec-left d-none"></div>
                                <div class="arrow_rec forDesktop">
                                    <img src="{{asset('images/arrow.svg')}}" width="20px" alt="" srcset="">
                                </div>
                                <h3 class="p-yellow">Be a Part of Our Community!</h3>
                                <div class="slider-form">
                                    <div>
                                        <div class="download-qr">
                                            <div class="container-fluid g-0">
                                                <div class="row">
                                                    <div class="col-6 br-bt p-0">
                                                        <p class="mb-5">Scan to join!</p>
                                                    </div>
                                                    <div class="col-6 br-bt p-0">
                                                        <p class="mb-5">Download and join now!</p>
                                                    </div>
                                                    <div class="col-6 p-0">
                                                        <div class="pt-5">
                                                            <img src="{{asset('images/qrcode.png')}}" width="200px" alt="" srcset="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 p-0 d-flex align-items-center">
                                                        <div class="pt-5">
                                                            <img src="{{asset('images/googleplay.png')}}" width="200px" alt="" srcset="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="download-qr">
                                            <div class="container-fluid g-0">
                                                <div class="row">
                                                    <div class="col-6 br-bt p-0">
                                                        <p class="mb-5">Scan to join!</p>
                                                    </div>
                                                    <div class="col-6 br-bt p-0">
                                                        <p class="mb-5">Download and join now!</p>
                                                    </div>
                                                    <div class="col-6 p-0">
                                                        <div class="pt-5">
                                                            <img src="{{asset('images/qrcode.png')}}" width="200px" alt="" srcset="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 p-0 d-flex align-items-center">
                                                        <div class="pt-5">
                                                            <img src="{{asset('images/googleplay.png')}}" width="200px" alt="" srcset="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="download-qr">
                                            <div class="container-fluid g-0">
                                                <div class="row">
                                                    <div class="col-6 br-bt p-0">
                                                        <p class="mb-5">Scan to join!</p>
                                                    </div>
                                                    <div class="col-6 br-bt p-0">
                                                        <p class="mb-5">Download and join now!</p>
                                                    </div>
                                                    <div class="col-6 p-0">
                                                        <div class="pt-5">
                                                            <img src="{{asset('images/qrcode.png')}}" width="200px" alt="" srcset="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 p-0 d-flex align-items-center">
                                                        <div class="pt-5">
                                                            <img src="{{asset('images/googleplay.png')}}" width="200px" alt="" srcset="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="p-3">
                                            <form action="">
                                                <div class="mb-3 form-gr">
                                                    <div class="box-icon">
            
                                                    </div>
                                                    <div class="box-input">
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="form-wr">
                                                    <div class="mb-3 form-gr form-50">
                                                        <div class="box-icon">
            
                                                        </div>
                                                        <div class="box-input">
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 form-gr form-50">
                                                        <div class="box-icon">
            
                                                        </div>
                                                        <div class="box-input">
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 form-gr">
                                                    <div class="box-icon">
            
                                                    </div>
                                                    <div class="box-input">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Choose Provinsi</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 form-gr">
                                                    <div class="box-icon">
            
                                                    </div>
                                                    <div class="box-input">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Choose Kabupaten</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 form-gr">
                                                    <div class="box-icon">
            
                                                    </div>
                                                    <div class="box-input">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Choose Kota</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 form-gr">
                                                    <div class="box-input-area">
                                                        <textarea class="form-control" aria-label="With textarea" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <div class="btn-njm-yellow">SEND</div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="p-3">
                                            <form action="">
                                                <div class="mb-3 form-gr">
                                                    <div class="box-icon">
            
                                                    </div>
                                                    <div class="box-input">
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="form-wr">
                                                    <div class="mb-3 form-gr form-50">
                                                        <div class="box-icon">
            
                                                        </div>
                                                        <div class="box-input">
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 form-gr form-50">
                                                        <div class="box-icon">
            
                                                        </div>
                                                        <div class="box-input">
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 form-gr">
                                                    <div class="box-icon">
            
                                                    </div>
                                                    <div class="box-input">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Choose Provinsi</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 form-gr">
                                                    <div class="box-icon">
            
                                                    </div>
                                                    <div class="box-input">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Choose Kabupaten</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 form-gr">
                                                    <div class="box-icon">
            
                                                    </div>
                                                    <div class="box-input">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Choose Kota</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 form-gr">
                                                    <div class="box-input-area">
                                                        <textarea class="form-control" aria-label="With textarea" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <div class="btn-njm-yellow">SEND</div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="p-3">
                                            <form action="">
                                                <div class="mb-3 form-gr">
                                                    <div class="box-icon">
            
                                                    </div>
                                                    <div class="box-input">
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="form-wr">
                                                    <div class="mb-3 form-gr form-50">
                                                        <div class="box-icon">
            
                                                        </div>
                                                        <div class="box-input">
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 form-gr form-50">
                                                        <div class="box-icon">
            
                                                        </div>
                                                        <div class="box-input">
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 form-gr">
                                                    <div class="box-icon">
            
                                                    </div>
                                                    <div class="box-input">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Choose Provinsi</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 form-gr">
                                                    <div class="box-icon">
            
                                                    </div>
                                                    <div class="box-input">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Choose Kabupaten</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 form-gr">
                                                    <div class="box-icon">
            
                                                    </div>
                                                    <div class="box-input">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Choose Kota</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 form-gr">
                                                    <div class="box-input-area">
                                                        <textarea class="form-control" aria-label="With textarea" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <div class="btn-njm-yellow">SEND</div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="download-qr">
                                            <div class="container-fluid g-0">
                                                <div class="row">
                                                    <div class="col-6 br-bt p-0">
                                                        <p class="mb-5">Scan to join!</p>
                                                    </div>
                                                    <div class="col-6 br-bt p-0">
                                                        <p class="mb-5">Download and join now!</p>
                                                    </div>
                                                    <div class="col-6 p-0">
                                                        <div class="pt-5">
                                                            <img src="{{asset('images/qrcode.png')}}" width="200px" alt="" srcset="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 p-0 d-flex align-items-center">
                                                        <div class="pt-5">
                                                            <img src="{{asset('images/googleplay.png')}}" width="200px" alt="" srcset="">
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
        </section>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function (params) {
            $(".slider-profile").on('init reInit', function(event, slick, currentSlide, nextSlide){
                var currentSlide = $(this).find('.slick-current .slider-profile-item');
                currentSlide.addClass('active')
            });

            $('.slider-profile').slick({
                dots: false,
                arrows: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor:$('.slider-eco, .slider-desc, .slider-form'),
                prevArrow: $('.arrow-left'),
                nextArrow: $('.arrow-right'),
                focusOnSelect: true,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                    }
                ]
            });

            $('.slider-eco').slick({
                dots: false,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                asNavFor: $('.slider-desc, .slider-profile, .slider-form'),
                prevArrow: $('.arrow_rec-left'),
                nextArrow: $('.arrow_rec'),
            })

            $('.slider-desc').slick({
                dots: false,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                asNavFor: $('.slider-profile, .slider-eco'),
                prevArrow: $('.arrow_rec-left'),
                nextArrow: $('.arrow_rec'),
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            adaptiveHeight: true

                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            adaptiveHeight: true
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            adaptiveHeight: true
                        }
                    }
                ]
            })

            $('.slider-form').slick({
                dots: false,
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            adaptiveHeight: true

                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            adaptiveHeight: true
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            adaptiveHeight: true
                        }
                    }
                ]
            })

        })
    </script>
@endsection