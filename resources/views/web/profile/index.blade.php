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
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus doloremque perspiciatis eum quod debitis fugit consequatur consequuntur, omnis molestiae delectus ullam repellendus reprehenderit explicabo reiciendis iste in illum enim dolore minima? Ad maxime dolorem laudantium harum est beatae soluta tempora?</p>
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
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum voluptatibus quidem quos, doloribus animi nesciunt itaque nobis quisquam? Sed asperiores ullam quos nesciunt dolores nam fugit repudiandae vero laboriosam? Recusandae.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam doloremque nesciunt ipsum animi alias veritatis.</p>
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
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum voluptatibus quidem quos, doloribus animi nesciunt itaque nobis quisquam? Sed asperiores ullam quos nesciunt dolores nam fugit repudiandae vero laboriosam? Recusandae.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam doloremque nesciunt ipsum animi alias veritatis.</p>
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
                                <p class="p-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, itaque fugiat ipsam reprehenderit nam molestiae adipisci error debitis dicta? Voluptas consectetur dicta quasi eveniet debitis beatae quae architecto saepe natus earum accusantium, pariatur, quidem officiis. Totam omnis est minima qui neque laborum reprehenderit itaque suscipit eius consequuntur et, deleniti nihil, numquam praesentium. Eum consequatur, quos distinctio quis praesentium aut cum consectetur eligendi temporibus rem commodi error unde expedita in nemo!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
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
                        <div class="container-fluid g-0">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="slider-desc">
                                        <p class="p-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eius dolores rem, enim vitae eveniet maxime odit reprehenderit amet hic voluptatem, quasi eaque aperiam dolor doloribus ratione in a veritatis nesciunt? Reprehenderit similique illo sed vel, ad, eligendi quod non dignissimos minima alias quas omnis voluptatum officiis facilis modi cum!</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="slider-desc">
                                        <div class="btn-njm-yellow">JOIN US</div>
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum fugit eligendi minus error dolores aliquam molestiae! Est optio hic aperiam, praesentium voluptatum accusantium exercitationem aliquam labore dolorem corrupti rem cum nesciunt amet excepturi quo explicabo esse aspernatur in. Odit, consequatur dicta maiores officia possimus dolor eum, nam delectus maxime necessitatibus consequuntur neque aperiam iusto unde nulla quod autem? Nisi, officiis?</p>
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
                arrows: false,
                slidesToShow: 3,
                slidesToScroll: 1,
            });
        })
    </script>
@endsection