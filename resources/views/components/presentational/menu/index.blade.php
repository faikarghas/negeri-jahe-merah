
<div class="row g-0">
    <div class="col-lg-4">
        <div class="logo">
            <img src="{{asset('images/negeri_jahe_merah_logo.png')}}" width="80px" alt="" srcset="">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="menu__wrapper">
            <div class="menu__wrapper-top">
                <ul>
                    <li>
                        <select name="" id="">
                            <option value="">English</option>
                            <option value="">Indonesia</option>
                        </select>
                    </li>
                </ul>
            </div>
            <div class="menu__wrapper-bottom">
                <ul>
                    <li><a href="{{route('profile')}}">Profile</a></li>
                    <li><a href="{{route('products')}}">Products</a></li>
                    <li><a href="{{route('business')}}">Business</a></li>
                    <li class="sub-init">
                        <a href="{{route('latest-news')}}">News</a>
                        <ul>
                            <li><a href="{{route('latest-news')}}">Latest News</a></li>
                            <li><a href="{{route('events')}}">Events</a></li>
                            <li><a href="{{route('literatures')}}">Literatures</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('visit')}}">Visit Us</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="logo2">
            <img class="bt" src="{{asset('images/bintang_toedjoe_logo.png')}}" width="80px" alt="" srcset="">
        </div>
    </div>
</div>