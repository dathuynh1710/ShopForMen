<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('fassets/imgs/logo/logo1.png') }}" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Search for items…">
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <div class="main-categori-wrap mobile-header-border">
                    <a class="categori-button-active-2" href="#">
                        <span class="fi-rs-apps"></span> Browse Categories
                    </a>
                    <div class="categori-dropdown-wrap categori-dropdown-active-small">
                        <ul>

                            <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother & Kids</a>
                            </li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a></li>
                        </ul>
                    </div>
                </div>
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="{{ route('home') }}">Home</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="shop.html">shop</a>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Our
                                Collections</a>

                        </li>

                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="#">Language</a>
                            <ul class="dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a href="{{ route('contact') }}"> Our location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="{ route('user.dangnhap') }}">Log In </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="{{ route('user.dangky') }}">Sign Up</a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="#">(+84) 123-456-789 </a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="#"><img src="{{ asset('fassets/imgs/theme/icons/icon-facebook.svg') }}"
                        alt=""></a>
                <a href="#"><img src="{{ asset('fassets/imgs/theme/icons/icon-twitter.svg') }}"
                        alt=""></a>
                <a href="#"><img src="{{ asset('fassets/imgs/theme/icons/icon-instagram.svg') }}"
                        alt=""></a>
                <a href="#"><img src="{{ asset('fassets/imgs/theme/icons/icon-pinterest.svg') }}"
                        alt=""></a>
                <a href="#"><img src="{{ asset('fassets/imgs/theme/icons/icon-youtube.svg') }}"
                        alt=""></a>
            </div>
        </div>
    </div>
</div>
