@extends('components/layout.index')
@section('header')
    <header page="home">
        <menu>
            <div class="container-fluid g-0">
                @include('components/presentational/menu/index')
            </div>
        </menu>
        <div class="background__header">
            <div class="slide-img">
                <img data-slider="1" class="firstimg  init" src="{{asset('images/memperkenalkan_negeri_jahe_merah.jpg')}}"/>
                <img data-slider="2" class="pos1 animate-box btn-act" src="{{asset('images/herbal_edutainment.jpg')}}"/>
                <img data-slider="3" class="pos2 animate-box btn-act" src="{{asset('images/inovasi_redgine.jpg')}}"/>
                <img data-slider="1" class="pos3 animate-box btn-act" src="{{asset('images/memperkenalkan_negeri_jahe_merah.jpg')}}"/>
            </div>

            <div class="slide-text">
                <div data-slider="2" class="pos1 slide-text--items">
                    <p>Innovation<br/>by Redgine</p>
                    <div class="line"></div>
                </div>
                <div data-slider="3" class="pos2 slide-text--items">
                    <p>Herbal Edutainment<br/>Experiences</p>
                    <div class="line"></div>
                </div>
                <div data-slider="1" class="pos3 slide-text--items">
                    <p>Innovation<br/>by Redgine</p>
                    <div class="line"></div>
                </div>
            </div>

            <div class="caption">
                <div class="caption-line">
                    <div data-slider="1" class="caption-item active">
                        <h1 class="el">Introducing <br/> Negeri Jahe Merah</h1>
                        <a href={{route('profile')}} class="btn-njm-red el">LEARN MORE</a>
                        <p class="el">#JaheMerahkanIndonesia</p>
                    </div>
                    <div data-slider="2" class="caption-item">
                        <h1>Introducing <br/> Negeri Jahe Merah 2</h1>
                        <a href={{route('profile')}} class="btn-njm-red">LEARN MORE</a>
                        <p>#JaheMerahkanIndonesia</p>
                    </div>
                    <div data-slider="3" class="caption-item">
                        <h1>Introducing <br/> Negeri Jahe Merah 3</h1>
                        <a href={{route('profile')}} class="btn-njm-red">LEARN MORE</a>
                        <p>#JaheMerahkanIndonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('main')
    <main page="home">
        <section class="section__first">
            <div class="slider-who">
                <div class="container-fluid g-0">
                    <div class="row g-0">
                        <div class="col-lg-9">
                            <div class="section__first-left">
                                <div class="section__first-left--yt">
                                    <div class="yt-cover">
                                        <p class="num-float">O1</p>
                                        <img src="{{asset('images/youtube.jpg')}}" width="100%" height="100%"/>
                                    </div>
                                </div>
                                <div class="section__first-left--desc">
                                    <div>
                                        <h3 class="p-yellow">Who We Are</h3>
                                        <h3>Negeri Jahe Merah</h3>
                                    </div>
                                    <div>
                                        <p class="p-grey">Negeri Jahe Merah is the realization of Indonesia's desire of introducing one of its natural treasures, Red Ginger, to the world. As a developer, Bintang Toedjoe is committed to creating the greatest goods from the best seeds.</p>
                                    </div>
                                    <a href={{route('profile')}} class="btn-njm-red">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="section__first-right">
                                <p class="num-float">O2</p>
                                <img src="{{asset('images/visi_misi.jpg')}}" width="100%" height="100%"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid g-0">
                    <div class="row g-0">
                        <div class="col-lg-9">
                            <div class="section__first-left">
                                <div class="section__first-left--yt">
                                    <div class="yt-cover">
                                        <img src="{{asset('images/visi_misi.jpg')}}" width="100%" height="100%"/>
                                    </div>
                                </div>
                                <div class="section__first-left--desc">
                                    <div>
                                        <h3 class="p-yellow mb-4">Our Mission</h3>
                                        <p class="p-grey mb-4">Become a world class provider of natural raw materials, realized through a natural ecosystem, and supported by a traceable & well recorded system.</p>
                                        <h3 class="p-yellow mb-4">Our Vision</h3>
                                        <p class="p-grey mb-4">Provide innovative natural raw materials, of the highest quality, efficacious, and safe to support all industries at local and abroad.</p>
                                    </div>
                                    <a href={{route('profile')}} class="btn-njm-red">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="section__first-right">
                                <img src="{{asset('images/visi_misi_2.jpg')}}" width="100%" height="100%"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-5">
                        <div class="section__second-left">
                            <img src="{{asset('images/ekosistem_map.png')}}" alt="">
                            <div>
                                <h2>Redgine</h2>
                                <h2>Ecosystem</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="section__second-right">
                            <div class="img">
                                <img class="test3" src="{{asset('images/ekosistem_negeri_jahe_merah.jpg')}}"/>
                            </div>
                            <div class="content">
                                <p class="p-white">An ecosystem to support Redgine's raw material B2B business, departs from our vision that business is not only for the welfare of ourselves, but also the welfare of others . "Blessing the community and people through the ecosystem".

                                    For us, every drop of sweat from our farmers, post harvest processors, to researchers, through sharing the economy with extractor and distillator partners, enabling us to produce world quality natural products, based on scientific studies, which are also supported by the government, in collaboration with BPPT, LIPI, the Ministry of Health Ministry of Agriculture, Balitro, and other agencies.</p>
                                <a href="{{route('profile')}}" class="btn-njm-yellow">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__third">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="header-news">
                            <h4>Latest News</h4>
                            <a href="">SEE ALL NEWS ></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="header__boxWrapper">
                            <div class="header__boxWrapper-item">
                                <div class="news-cover">
                                    <img src="https://source.unsplash.com/random/200x104" width="100%" height="100%"/>
                                </div>
                                <div class="news-desc">
                                    <h5>Opening Tour Ginger Walk On December 2022</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum architecto deleniti explicabo vitae aperiam earum. Nulla ipsam impedit minima odit.</p>
                                    <a href="{{route('news-detail','lorem-ipsum')}}" class="btn-read-more">READ MORE ></a>
                                </div>
                            </div>
                            <div class="header__boxWrapper-item">
                                <div class="news-cover">
                                    <img src="https://source.unsplash.com/random/200x105" width="100%" height="100%"/>
                                </div>
                                <div class="news-desc">
                                    <h5>Opening Tour Ginger Walk On December 2022</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum architecto deleniti explicabo vitae aperiam earum. Nulla ipsam impedit minima odit.</p>
                                    <a href="{{route('news-detail','lorem-ipsum')}}" class="btn-read-more">READ MORE ></a>
                                </div>
                            </div>
                            <div class="header__boxWrapper-item">
                                <div class="news-cover">
                                    <img src="https://source.unsplash.com/random/200x106" width="100%" height="100%"/>
                                </div>
                                <div class="news-desc">
                                    <h5>Opening Tour Ginger Walk On December 2022</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum architecto deleniti explicabo vitae aperiam earum. Nulla ipsam impedit minima odit.</p>
                                    <a href="{{route('news-detail','lorem-ipsum')}}" class="btn-read-more">READ MORE ></a>
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
                    <div class="col-12">
                        <div class="header-products">
                            <h4>Products</h4>
                        </div>
                    </div>
                </div>
            </div>
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
                        <p class="p-red text-center">Red Ginger Powder Extract Standardized</p>
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
                <div class="product-item">
                    <img src="{{asset('images/fresh-ginger.jpg')}}" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Fresh</p>
                        <a href="{{route('product-detail','red-ginger')}}" class="btn-njm-yellow btn-product-item">MORE INFORMATION</a>
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
        </section>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function (params) {

            var slideBox = $('.slide-img'),
                items    = slideBox.find('li'),
                len      = items.length,
                current  = 1,

                fullImg = {
                    "width": "100%",
                    "height": "100%",
                    "bottom": "0",
                    "right": "0",
                    "border-radius" : "0"
                }

            slideBox.on('click','.btn-act',function (params) {
                let indeximg = $(this).index()
                let image = $(this).attr('src')
                let dataSlider = $(this).data('slider')


                if (indeximg == 1) {

                    $(this).css(fullImg)
                    $(this).addClass('init')

                    slideBox.append(`<img data-slider="${dataSlider}" class="pos3 animate-box btn-act" src="${image}"/>`)

                    $('.caption-item').each(function (params) {
                        let dataCaption = $(this).data('slider')
                        if (dataSlider == dataCaption) {
                            $(this).addClass('active')
                            $('.caption-item').not($(this)).removeClass('active')
                        }
                    })

                    setTimeout(() => {
                        slideBox.find('img').first().remove()
                    }, 1000);


                    $(this).next().css('right','260px')
                    $(this).next().next().css('right','20px')

                    // let playAn = anime({
                    //     targets: '.caption-item .el',
                    //     translateY: 65,
                    //     delay: anime.stagger(100, {from: 'first'}),
                    //     autoplay: false
                    // });

                    // playAn.play();

                }


            })

            $('.slider-who').slick({
                dots: false,
                arrows: false
            });

            $('.slider-products').slick({
                dots: false,
                arrows: false,
                slidesToShow: 5,
                slidesToScroll: 1,
            });

            // anime({
            //     targets: '.caption-item .el',
            //     translateY: 65,
            //     delay: anime.stagger(100, {from: 'first'})
            // });
        })
    </script>
@endsection
