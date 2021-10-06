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
                        <div class="slider-profile">
                            <div class="slider-profile-item">
                                <div class="item-wrapper">
                                   <img src="https://source.unsplash.com/random/200x401" width="100%" height="100%"/>
                                    <div class="info">
                                        <h5>Nursery</h5>
                                        <p>CONVENTIAL & TISSUE CULTURE TECHNOLOGY</p>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-profile-item">
                                <div class="item-wrapper">
                                    <img src="https://source.unsplash.com/random/200x402" width="100%" height="100%"/>
                                    <div class="info">
                                        <h5>Cultivation</h5>
                                        <p>EDUCATING, FACILITATING, MONITORING OPERATING PROCEDURES</p>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-profile-item">
                                <div class="item-wrapper">
                                    <img src="https://source.unsplash.com/random/200x403" width="100%" height="100%"/>
                                    <div class="info">
                                        <h5>Post Harvest</h5>
                                        <p>EDUCATING, FACILITATING, PROCEDURE STANDARIZATION METHODOLOGY DEVELOPMENT</p>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-profile-item">
                                <div class="item-wrapper">
                                    <img src="https://source.unsplash.com/random/200x404" width="100%" height="100%"/>
                                    <div class="info">
                                        <h5>Cultivation</h5>
                                        <p>CONVENTIAL & TISSUE CULTURE TECHNOLOGY</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid g-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-desc">
                                        <p class="p-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eius dolores rem, enim vitae eveniet maxime odit reprehenderit amet hic voluptatem, quasi eaque aperiam dolor doloribus ratione in a veritatis nesciunt? Reprehenderit similique illo sed vel, ad, eligendi quod non dignissimos minima alias quas omnis voluptatum officiis facilis modi cum!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact__business">
                            <div class="contact__business-left">
                                <img src="https://source.unsplash.com/random/200x401" width="100%" height="100%"/>
                            </div>
                            <div class="contact__business-right">
                                <h3 class="p-yellow">Be a Part of Our Community!</h3>
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
                                        <div class="btn-njm-yellow">LEARN MORE</div>
                                    </div>
                                </form>
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
            $('.slider-profile').slick({
                dots: false,
                arrows: false,
                slidesToShow: 3,
                slidesToScroll: 1,
            });
        })
    </script>
@endsection