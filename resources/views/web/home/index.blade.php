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
                <img class="test1" src="https://source.unsplash.com/random/1200x801"/>
                <img class="test2" src="https://source.unsplash.com/random/1200x802"/>
                <img class="test3" src="https://source.unsplash.com/random/1200x803"/>
                <img class="test4" src="https://source.unsplash.com/random/1200x804"/>
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
                                        <img src="https://source.unsplash.com/random/200x403" width="100%" height="100%"/>
                                    </div>
                                </div>
                                <div class="section__first-left--desc">
                                    <div>
                                        <h3 class="p-yellow">Who We Are</h3>
                                        <h3>Negeri Jahe Merah</h3>
                                    </div>
                                    <div>
                                        <p class="p-grey">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo porro dignissimos aut magni, voluptates eos asperiores. Modi fugit optio, consequuntur odio aliquid nostrum, doloribus dolor dolorem pariatur, odit fugiat hic?</p>
                                    </div>
                                    <div class="btn-njm-red">LEARN MORE</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="section__first-right">
                                <p class="num-float">O2</p>
                                <img src="https://source.unsplash.com/random/200x404" width="100%" height="100%"/>
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
                                        <img src="https://source.unsplash.com/random/200x403" width="100%" height="100%"/>
                                    </div>
                                </div>
                                <div class="section__first-left--desc">
                                    <div>
                                        <h3 class="p-yellow mb-4">Our Mission</h3>
                                        <p class="p-grey mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo porro dignissimos aut magni, voluptates eos asperiores.</p>
                                        <h3 class="p-yellow mb-4">Our Vision</h3>
                                        <p class="p-grey mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo porro dignissimos aut magni, voluptates eos asperiores.</p>
                                    </div>
                                    <div class="btn-njm-red">LEARN MORE</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="section__first-right">
                                <img src="https://source.unsplash.com/random/200x404" width="100%" height="100%"/>
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
                            <img src="{{asset('images/redgine.png')}}" alt="">
                            <div>
                                <h2>Redgine</h2>
                                <h2>Ecosystem</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="section__second-right">
                            <div class="img">
                                <img class="test3" src="https://source.unsplash.com/random/700x303"/>
                            </div>
                            <div class="content">
                                <p class="p-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum hic qui quidem nihil, veniam corporis itaque incidunt soluta facere assumenda culpa explicabo consequatur quos optio nemo exercitationem cum minus labore numquam. Pariatur incidunt laudantium repellendus sed dolorum illum quasi officiis quod odit, nesciunt dolore accusantium aspernatur voluptatibus, placeat, architecto aliquam. Exercitationem, eos. Cum eaque odit odio necessitatibus. Dolorum saepe distinctio neque suscipit repellat esse possimus accusantium, ea, quisquam facere obcaecati velit quo aliquam nemo numquam exercitationem tempora provident nesciunt commodi.</p>
                                <div class="btn-njm-yellow">LEARN MORE</div>
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
                                    <a href="" class="btn-read-more">READ MORE ></a>
                                </div>
                            </div>
                            <div class="header__boxWrapper-item">
                                <div class="news-cover">
                                    <img src="https://source.unsplash.com/random/200x105" width="100%" height="100%"/>
                                </div>
                                <div class="news-desc">
                                    <h5>Opening Tour Ginger Walk On December 2022</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum architecto deleniti explicabo vitae aperiam earum. Nulla ipsam impedit minima odit.</p>
                                    <a href="" class="btn-read-more">READ MORE ></a>
                                </div>
                            </div>
                            <div class="header__boxWrapper-item">
                                <div class="news-cover">
                                    <img src="https://source.unsplash.com/random/200x106" width="100%" height="100%"/>
                                </div>
                                <div class="news-desc">
                                    <h5>Opening Tour Ginger Walk On December 2022</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum architecto deleniti explicabo vitae aperiam earum. Nulla ipsam impedit minima odit.</p>
                                    <a href="" class="btn-read-more">READ MORE ></a>
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
                    <img src="https://source.unsplash.com/random/200x424" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                        <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="https://source.unsplash.com/random/200x444" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                        <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="https://source.unsplash.com/random/200x414" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                        <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="https://source.unsplash.com/random/200x401" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                        <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="https://source.unsplash.com/random/200x402" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                        <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="https://source.unsplash.com/random/200x403" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                        <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="https://source.unsplash.com/random/200x404" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                        <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="https://source.unsplash.com/random/200x405" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                        <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="https://source.unsplash.com/random/200x406" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                        <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="https://source.unsplash.com/random/200x407" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                        <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="https://source.unsplash.com/random/200x408" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                        <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="https://source.unsplash.com/random/200x409" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                        <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="https://source.unsplash.com/random/200x410" width="100%" height="100%"/>
                    <div class="product-item--text">
                        <p class="p-red text-center">Red Ginger Powder Extract Premium</p>
                        <div class="btn-njm-yellow btn-product-item">MORE INFORMATION</div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function (params) {
            $('.test2').on('click',function(){
                $(this).toggleClass('active')
                $('.test3').toggleClass('active')
                $('.test4').toggleClass('active')
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
        })
    </script>
@endsection