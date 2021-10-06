@extends('components/layout.index')
@section('header')
    <header page="news">
        <menu>
            <div class="container-fluid g-0">
                @include('components/presentational/menu/index')
            </div>
        </menu>
    </header>
@endsection
@section('main')
    <main page="literatures">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="header__sec1">
                            <h2 class="p-white">Literatures</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-4">
                        <div class="literature__item">
                            <div class="literature__item-img">
                                <img src="https://source.unsplash.com/random/200x201" width="100%" height="100%"/>
                            </div>
                            <div class="literature__item-text">
                                <div class="title">
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, officiis?</h4>
                                </div>
                                <div class="shortDesc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur enim amet in velit dolor, expedita minima ducimus. Enim nobis dicta earum nemo maxime qui accusamus beatae sit laboriosam, ex labore culpa harum? Cum vitae facere aperiam ducimus obcaecati quidem libero!</p>
                                </div>
                                <a href="" class="btn-read-more">MORE INFORMATION</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="literature__item">
                            <div class="literature__item-img">
                                <img src="https://source.unsplash.com/random/200x201" width="100%" height="100%"/>
                            </div>
                            <div class="literature__item-text">
                                <div class="title">
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, officiis?</h4>
                                </div>
                                <div class="shortDesc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur enim amet in velit dolor, expedita minima ducimus. Enim nobis dicta earum nemo maxime qui accusamus beatae sit laboriosam, ex labore culpa harum? Cum vitae facere aperiam ducimus obcaecati quidem libero!</p>
                                </div>
                                <a href="" class="btn-read-more">MORE INFORMATION</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="literature__item">
                            <div class="literature__item-img">
                                <img src="https://source.unsplash.com/random/200x201" width="100%" height="100%"/>
                            </div>
                            <div class="literature__item-text">
                                <div class="title">
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, officiis?</h4>
                                </div>
                                <div class="shortDesc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur enim amet in velit dolor, expedita minima ducimus. Enim nobis dicta earum nemo maxime qui accusamus beatae sit laboriosam, ex labore culpa harum? Cum vitae facere aperiam ducimus obcaecati quidem libero!</p>
                                </div>
                                <a href="" class="btn-read-more">MORE INFORMATION</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="literature__item">
                            <div class="literature__item-img">
                                <img src="https://source.unsplash.com/random/200x201" width="100%" height="100%"/>
                            </div>
                            <div class="literature__item-text">
                                <div class="title">
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, officiis?</h4>
                                </div>
                                <div class="shortDesc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur enim amet in velit dolor, expedita minima ducimus. Enim nobis dicta earum nemo maxime qui accusamus beatae sit laboriosam, ex labore culpa harum? Cum vitae facere aperiam ducimus obcaecati quidem libero!</p>
                                </div>
                                <a href="" class="btn-read-more">MORE INFORMATION</a>
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
            $('.slider-upcoming-events').slick({
                dots: false,
                arrows: false,
                slidesToShow: 4,
                slidesToScroll: 1,
            });
            $('.slider-past-events').slick({
                dots: false,
                arrows: false,
                slidesToShow: 4,
                slidesToScroll: 1,
            });
        })
    </script>
@endsection