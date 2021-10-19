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
    <main page="news">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="header__sec1">
                            <h2 class="p-white">Latest News</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="wrapper">
                            <div class="container-fluid g-0">
                                <div class="row g-0">
                                    <div class="col-12">
                                        <div class="latestNews__item">
                                            <div class="latestNews__item-img first-item">
                                                <img src="https://source.unsplash.com/random/500x501" width="100%" height="100%"/>
                                            </div>
                                            <div class="latestNews__item-title">
                                                <h4 class="first-title-item">Opening Tour Ginger Walk On December 2022</h4>
                                                <a href="{{route('news-detail','lorem-ipsum')}}" class="btn-read-more">READ MORE ></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="latestNews__item">
                                            <div class="latestNews__item-img">
                                                <img src="https://source.unsplash.com/random/500x501" width="100%" height="100%"/>
                                            </div>
                                            <div class="latestNews__item-title">
                                                <h4>Opening Tour Ginger Walk On December 2022</h4>
                                                <a href="{{route('news-detail','lorem-ipsum')}}" class="btn-read-more">READ MORE ></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="latestNews__item">
                                            <div class="latestNews__item-img">
                                                <img src="https://source.unsplash.com/random/500x501" width="100%" height="100%"/>
                                            </div>
                                            <div class="latestNews__item-title">
                                                <h4>Opening Tour Ginger  2022</h4>
                                                <a href="{{route('news-detail','lorem-ipsum')}}" class="btn-read-more">READ MORE ></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="latestNews__item">
                                            <div class="latestNews__item-img">
                                                <img src="https://source.unsplash.com/random/500x501" width="100%" height="100%"/>
                                            </div>
                                            <div class="latestNews__item-title">
                                                <h4>Opening Tour Ginger Walk On December 2022</h4>
                                                <a href="{{route('news-detail','lorem-ipsum')}}" class="btn-read-more">READ MORE ></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="latestNews__item">
                                            <div class="latestNews__item-img">
                                                <img src="https://source.unsplash.com/random/500x501" width="100%" height="100%"/>
                                            </div>
                                            <div class="latestNews__item-title">
                                                <h4>Opening Tour Ginger </h4>
                                                <a href="{{route('news-detail','lorem-ipsum')}}" class="btn-read-more">READ MORE ></a>
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
            $('.slider-profile').slick({
                dots: false,
                arrows: false,
                slidesToShow: 3,
                slidesToScroll: 1,
            });
        })
    </script>
@endsection