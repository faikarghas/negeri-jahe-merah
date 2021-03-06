
<div class="row g-0">
    <div class="col-3 col-lg-4">
        <div class="logo">
            <a href="{{route('home')}}">
                <img src="{{asset('images/negeri_jahe_merah_logo.png')}}" width="80px" alt="" srcset="">
            </a>
        </div>
    </div>
    <div class="col-lg-6 forDesktop">
        <div class="h-100 d-flex align-items-center">
            <div class="menu__wrapper position-relative w-100 forDesktop">
                <div class="menu__wrapper-top">
                    <ul>
                        <li>
                            <select name="" id="">
                                {{-- @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <option value=""><a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a></option>
                                    @endif
                                @endforeach --}}
                                <option value="">English</option>
                                <option value="">Indonesia</option>
                            </select>
                        </li>
                    </ul>
                    <img src="{{asset('images/search.png')}}" width="15px" alt="search icon" srcset="">
                </div>
                <div class="menu__wrapper-bottom">
                    <ul>
                        <li class="li-item {{ Request::is('profile') ? 'active' : '' }}"><a href="{{route('profile')}}">Profile</a></li>
                        <li class="sub-init li-item {{ Request::is('products') ? 'active' : '' }}">
                            <a href="{{route('products')}}">Products</a>
                            <div class="list_submenu">
                                <ul>
                                    <li><strong>Redgine Variant</strong></li>
                                    <ul class="pl-3">
                                        <li><strong>Red Ginger Product</strong></li>
                                        <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Red Ginger Powder Extract Premium</a></li>
                                        <li><a href="{{route('product-detail','red-ginger-powder-extract-standardized')}}">Red Ginger Powder Extract Standardized</a></li>
                                        <li><a href="{{route('product-detail','red-ginger-powder')}}">Red Ginger Powder</a></li>
                                        <li><a href="{{route('product-detail','red-ginger-instant-powder')}}">Red Ginger Instant Powder with Palm Sugar</a></li>
                                        <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Red Ginger Fresh</a></li>
                                        <li><a href="{{route('product-detail','red-ginger-simplicia')}}">Red Ginger Simplicia</a></li>
                                        <li><a href="{{route('product-detail','red-ginger-oil')}}">Red Ginger Oil</a></li>
                                        <li><a href="{{route('product-detail','red-ginger-liquid-extract-standardized')}}">Red Ginger Liquid Extract Standardized</a></li>

                                    </ul>
                                    <ul class="pl-3">
                                        <li><strong>Citronella Oil Products</strong></li>
                                        <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Redgine Citronella Oil</a></li>
                                    </ul>
                                </ul>
                                <ul>
                                    <li><strong>Made By Redgine</strong></li>
                                    <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Bejo Jahe Merah</a></li>
                                    <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Bejo Sujamer</a></li>
                                    <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Komix Herbal</a></li>
                                </ul>
                                {{-- <ul>
                                    <li><strong>Other Commodities</strong></li>
                                    <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Citronella Oil</a></li>
                                </ul> --}}
                            </div>
                        </li>
                        <li class="li-item {{ Request::is('business') ? 'active' : '' }}"><a href="{{route('business')}}">Business</a></li>
                        <li class="sub-init li-item {{ Request::is('latest-news') ? 'active' : '' }}">
                            <a href="{{route('latest-news')}}">News</a>
                            <div class="list_submenu">
                                <ul>
                                    <li><a href="{{route('latest-news')}}">Latest News</a></li>
                                    <li><a href="{{route('events')}}">Events</a></li>
                                    <li><a href="{{route('literatures')}}">Literatures</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="li-item {{ Request::is('visit-us') ? 'active' : '' }}"><a href="{{route('visit')}}">Visit Us</a></li>
                        <li class="li-item {{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="menu__showcase"></div>
            </div>
        </div>
    </div>
    <div class="col-9 col-lg-2">
        <div class="m-mobile">
            <div class="logo2">
                <img class="bt" src="{{asset('images/bintang_toedjoe_logo.png')}}" width="80px" alt="" srcset="">
            </div>
            <div id="menu-hamburger" class="forMobile">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>