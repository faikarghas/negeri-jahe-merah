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
            <div class="section__second-left ">
                <div class="slider-detail-news">
                    <div class="item">
                        <img src="https://source.unsplash.com/random/1200x401" alt="">
                        <div class="text">
                            <span>15 Januari 2021</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente similique nemo alias facere, saepe esse!</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://source.unsplash.com/random/1200x402" alt="">
                        <div class="text">
                            <span>15 Januari 2021</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente similique nemo alias facere, saepe esse!</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://source.unsplash.com/random/1200x403" alt="">
                        <div class="text">
                            <span>15 Januari 2021</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente similique nemo alias facere, saepe esse!</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://source.unsplash.com/random/1200x404" alt="">
                        <div class="text">
                            <span>15 Januari 2021</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente similique nemo alias facere, saepe esse!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__second-right">
                <p class="share"><strong>SHARE THIS ARTICLE</strong></p>
                <ul class="sosmed">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                </ul>
                <div class="title">
                    <h5>LITERATURES</h5>
                    <p>SEE ALL</p>
                </div>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita numquam illum voluptates excepturi facere, voluptatem doloremque inventore fuga incidunt dolores.
                </p>
                <div class="goto">
                    <a href="">GO TO LINK</a>
                </div>
            </div>
        </section>
        <section class="section__third slider-nav">
            <div class="item">
                <img src="https://source.unsplash.com/random/1200x401" alt="">
            </div>
            <div class="item">
                <img src="https://source.unsplash.com/random/1200x402" alt="">
            </div>
            <div class="item">
                <img src="https://source.unsplash.com/random/1200x403" alt="">
            </div>
            <div class="item">
                <img src="https://source.unsplash.com/random/1200x404" alt="">
            </div>
        </section>
        <section class="section__fourth">
            <div class="section__fourth-left">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure fuga culpa eum velit. Reiciendis asperiores amet nulla incidunt ipsum nostrum, est possimus facere iste, recusandae ullam in, repellat fugit optio hic voluptatum aperiam? Odit consequuntur libero deserunt incidunt perferendis omnis nam. Fugit ab minus sequi voluptatum excepturi officiis voluptates, quaerat provident obcaecati nisi consequatur reiciendis suscipit laboriosam eius odio iste quos praesentium? Ut quae explicabo ipsum, repellendus nulla molestias voluptatibus ipsa quaerat iste. Mollitia deleniti repudiandae maxime iure neque dolorem nostrum quidem, amet perspiciatis, temporibus rem iste nesciunt, incidunt fugiat saepe magnam? Esse mollitia repellendus fugit temporibus sunt necessitatibus laborum, quos accusantium beatae quis dolores perspiciatis illo reprehenderit incidunt similique, ut praesentium consequuntur labore harum. Nihil nemo, tenetur itaque ratione ipsum ipsa nesciunt voluptas delectus deserunt facere unde sed deleniti necessitatibus exercitationem minus reiciendis aliquid, aspernatur ab id facilis! Explicabo quas similique dolorem quibusdam ipsam sit quasi adipisci veniam consequatur ullam deleniti numquam ratione sequi laborum, dolores recusandae doloremque porro qui. Doloremque voluptates illo quasi debitis consectetur pariatur, incidunt commodi fugiat porro labore ut dicta repellat esse ab voluptatum, est reprehenderit. Voluptatum labore dolorem, nemo id, dolore provident aliquam laboriosam ut dolor laudantium saepe temporibus! Sint, voluptatibus! Error, facilis odit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure fuga culpa eum velit. Reiciendis asperiores amet nulla incidunt ipsum nostrum, est possimus facere iste, recusandae ullam in, repellat fugit optio hic voluptatum aperiam? Odit consequuntur libero deserunt incidunt perferendis omnis nam. Fugit ab minus sequi voluptatum excepturi officiis voluptates, quaerat provident obcaecati nisi consequatur reiciendis suscipit laboriosam eius odio iste quos praesentium? Ut quae explicabo ipsum, repellendus nulla molestias voluptatibus ipsa quaerat iste. Mollitia deleniti repudiandae maxime iure neque dolorem nostrum quidem, amet perspiciatis, temporibus rem iste nesciunt, incidunt fugiat saepe magnam? Esse mollitia repellendus fugit temporibus sunt necessitatibus laborum, quos accusantium beatae quis dolores perspiciatis illo reprehenderit incidunt similique, ut praesentium consequuntur labore harum. Nihil nemo, tenetur itaque ratione ipsum ipsa nesciunt voluptas delectus deserunt facere unde sed deleniti necessitatibus exercitationem minus reiciendis aliquid, aspernatur ab id facilis! Explicabo quas similique dolorem quibusdam ipsam sit quasi adipisci veniam consequatur ullam deleniti numquam ratione sequi laborum, dolores recusandae doloremque porro qui. Doloremque voluptates illo quasi debitis consectetur pariatur, incidunt commodi fugiat porro labore ut dicta repellat esse ab voluptatum, est reprehenderit. Voluptatum labore dolorem, nemo id, dolore provident aliquam laboriosam ut dolor laudantium saepe temporibus! Sint, voluptatibus! Error, facilis odit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure fuga culpa eum velit. Reiciendis asperiores amet nulla incidunt ipsum nostrum, est possimus facere iste, recusandae ullam in, repellat fugit optio hic voluptatum aperiam? Odit consequuntur libero deserunt incidunt perferendis omnis nam. Fugit ab minus sequi voluptatum excepturi officiis voluptates, quaerat provident obcaecati nisi consequatur reiciendis suscipit laboriosam eius odio iste quos praesentium? Ut quae explicabo ipsum, repellendus nulla molestias voluptatibus ipsa quaerat iste. Mollitia deleniti repudiandae maxime iure neque dolorem nostrum quidem, amet perspiciatis, temporibus rem iste nesciunt, incidunt fugiat saepe magnam? Esse mollitia repellendus fugit temporibus sunt necessitatibus laborum, quos accusantium beatae quis dolores perspiciatis illo reprehenderit incidunt similique, ut praesentium consequuntur labore harum. Nihil nemo, tenetur itaque ratione ipsum ipsa nesciunt voluptas delectus deserunt facere unde sed deleniti necessitatibus exercitationem minus reiciendis aliquid, aspernatur ab id facilis! Explicabo quas similique dolorem quibusdam ipsam sit quasi adipisci veniam consequatur ullam deleniti numquam ratione sequi laborum, dolores recusandae doloremque porro qui. Doloremque voluptates illo quasi debitis consectetur pariatur, incidunt commodi fugiat porro labore ut dicta repellat esse ab voluptatum, est reprehenderit. Voluptatum labore dolorem, nemo id, dolore provident aliquam laboriosam ut dolor laudantium saepe temporibus! Sint, voluptatibus! Error, facilis odit?</p>
                </div>
            </div>
            <div class="section__fourth-right">
                <h4>RELATED ARTICLES</h4>
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


{{-- home --}}
    {{-- 
    @media only screen and (max-width: 62em)
    header[page=home] .header__content {
        left: 4rem;
        width: 65%;
        top: 30%;
        height: 280px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
    } --}}


    

