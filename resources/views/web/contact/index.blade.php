@extends('components/layout.index')
@section('header')
    <header page="contact">
        <menu>
            <div class="container-fluid g-0">
                @include('components/presentational/menu/index')
            </div>
        </menu>
    </header>
@endsection
@section('main')
    <main page="contact">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="header__sec1">
                            <h2 class="p-white">Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second">
            <div class="section__second-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6844123082337!2d106.8751086144928!3d-6.172990962209813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f51d6bdfb175%3A0x90ff5f26587394b5!2sPT.%20Bintang%20Toedjoe!5e0!3m2!1sid!2sid!4v1633393217376!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="section__second-form">
                <h4>Contact Us</h4>
                <p>Feel free to contact us any time. We will get back to you as soon as we can!</p>
                <form action="">
                    <div class="mb-3 form-gr">
                        <div class="box-input">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                        </div>
                    </div>
                    <div class="mb-3 form-gr">
                        <div class="box-input">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                        </div>
                    </div>
                    <div class="mb-3 form-gr">
                        <div class="box-input">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Message">
                        </div>
                    </div>
                    <div class="btn-form d-flex justify-content-center">
                        <div class="btn-njm-red">SEND</div>
                    </div>
                </form>
            </div>
        </section>
        <section class="section__third">
            <div class="contariner-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="addr">
                            <h6>Redgine Head Office</h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nobis quaerat cupiditate culpa accusamus corrupti!</p>
                            <ul>
                                <li>
                                    <span>Contact Person</span>
                                </li>
                                <li>
                                    <span>Whatsapp No.</span>
                                </li>
                                <li>
                                    <span>Email</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="addr">
                            
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="addr">
                            <h6>Redgine Head Office</h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nobis quaerat cupiditate culpa accusamus corrupti!</p>
                            <ul>
                                <li>
                                    <span>Contact Person</span>
                                </li>
                                <li>
                                    <span>Whatsapp No.</span>
                                </li>
                                <li>
                                    <span>Email</span>
                                </li>
                            </ul>
                            <p class="p-yellow op">Opening Hours</p>
                            <ul>
                                <li>
                                    <span>Weekdays</span>
                                </li>
                                <li>
                                    <span>Weekend</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="addr">
                            <h6>Redgine Head Office</h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nobis quaerat cupiditate culpa accusamus corrupti!</p>
                            <ul>
                                <li>
                                    <span>Contact Person</span>
                                </li>
                                <li>
                                    <span>Whatsapp No.</span>
                                </li>
                                <li>
                                    <span>Email</span>
                                </li>
                            </ul>
                            <p class="p-yellow op">Opening Hours</p>
                            <ul>
                                <li>
                                    <span>Weekdays</span>
                                </li>
                                <li>
                                    <span>Weekend</span>
                                </li>
                            </ul>
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