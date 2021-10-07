@extends('components/layout.index')
@section('header')
    <header page="news-detail">
        <menu>
            <div class="container-fluid g-0 position-relative z-2">
                @include('components/presentational/menu/index')
            </div>
            <div class="bg-yellow-right"></div>
        </menu>
        <div class="bg-yellow-right"></div>
    </header>
@endsection
@section('main')
    <main page="news-detail">
        <section class="section__first">
            <div class="section__first-left">
                <a href=""><- BACK</a>
            </div>
            <div class="section__first-right">

            </div>
        </section>
        <section class="section__second">
            <div class="section__second-left">
            </div>
            <div class="section__second-right">

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