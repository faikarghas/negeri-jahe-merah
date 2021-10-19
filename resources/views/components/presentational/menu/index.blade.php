
<div class="row g-0">
    <div class="col-lg-4">
        <div class="logo">
            <a href="{{route('home')}}">
                <img src="{{asset('images/negeri_jahe_merah_logo.png')}}" width="80px" alt="" srcset="">
            </a>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="h-100 d-flex align-items-center">        
            <div class="menu__wrapper position-relative w-100">
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
                        <li class="li-item"><a href="{{route('profile')}}">Profile</a></li>
                        <li class="sub-init li-item">
                            <a href="{{route('products')}}">Products</a>
                            <div class="list_submenu">
                                <ul>
                                    <li><strong>Redgine Variant</strong></li>
                                    <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Red Ginger Powder Extract Premium</a></li>
                                    <li><a href="{{route('product-detail','red-ginger-powder-extract-standardized')}}">Red Ginger Powder Extract Standardized</a></li>
                                    <li><a href="{{route('product-detail','red-ginger-powder')}}">Red Ginger Powder</a></li>
                                    <li><a href="{{route('product-detail','red-ginger-instant-powder')}}">Red Ginger Instant Powder with Palm Sugar</a></li>
                                    <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Red Ginger Fresh</a></li>
                                </ul>
                                <ul>
                                    <li><strong>Made By Redgine</strong></li>
                                    <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Bejo Jahe Merah</a></li>
                                    <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Bejo Sujamer</a></li>
                                    <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Komix Herbal</a></li>
                                </ul>
                                <ul>
                                    <li><strong>Other Commodities</strong></li>
                                    <li><a href="{{route('product-detail','red-ginger-powder-extract-premium')}}">Citronella Oil</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="li-item"><a href="{{route('business')}}">Business</a></li>
                        <li class="sub-init li-item">
                            <a href="{{route('latest-news')}}">News</a>
                            <div class="list_submenu">
                                <ul>
                                    <li><a href="{{route('latest-news')}}">Latest News</a></li>
                                    <li><a href="{{route('events')}}">Events</a></li>
                                    <li><a href="{{route('literatures')}}">Literatures</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="li-item"><a href="{{route('visit')}}">Visit Us</a></li>
                        <li class="li-item"><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="menu__showcase"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="logo2">
            <img class="bt" src="{{asset('images/bintang_toedjoe_logo.png')}}" width="80px" alt="" srcset="">
        </div>
    </div>
</div>