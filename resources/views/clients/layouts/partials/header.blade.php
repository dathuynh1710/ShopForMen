<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li>
                                <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i>
                                    English <i class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li><a href="#"><img src="{{ asset('fassets/imgs/theme/flag-fr.png') }}"
                                                alt="">Français</a></li>
                                    <li><a href="#"><img src="{{ asset('fassets/imgs/theme/flag-dt.png') }}"
                                                alt="">Deutsch</a></li>
                                    <li><a href="#"><img src="{{ asset('fassets/imgs/theme/flag-ru.png') }}"
                                                alt="">Pусский</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Nhận giảm giá lên đến 50% <a href="{{ route('shop') }}">Xem chi tiết</a></li>
                                <li>Ưu đãi đặc biệt - Tiết kiệm với mã giảm giá</li>
                                <li>Tiết kiệm tới 35% trong hôm nay <a href="{{ route('shop') }}">Mua ngay</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="{{ route('home') }}"><img src="{{ asset('fassets/imgs/logo/logo1.png') }}"
                            alt="logo"></a>
                </div>
                <div class="header-right">
                    {{-- @livewire('header-search-component') --}}
                    <div class="search-style-1">
                        <form action="{{ route('search') }}">
                            <input id="search" name="search" id="search-input" type="text"
                                placeholder="Search for items..." value="{{ request('search') }}">
                        </form>
                    </div>

                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div style="margin-right: 20px;">
                                @guest
                                    @if (Route::has('login'))
                                        <i class="fi-rs-key"></i>
                                        <a href="{{ route('user.dangnhap') }}"> Log In </a>
                                    @endif
                                    @if (Route::has('register'))
                                        /
                                        <a href="{{ route('user.dangky') }}">Sign Up</a>
                                    @endif
                                @else
                                    <a class="nav-link dropdown-toggle" href="#nguoidung" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-user"></i> {{ Auth::user()->hoten }}
                                    </a>
                                    <div class="dropdown-menu">
                                        <div style="display: flex; align-items: center;">
                                            <span style="padding-left: 10px"><i class="fa-regular fa-id-card "
                                                    style="margin-right: 10px;"></i></span>
                                            <a href="{{ route('user.hosocanhan') }}"
                                                style="color: rgb(66, 19, 42); display: flex; align-items: center; padding: 12px 0;">
                                                <i class="ci-user opacity-60 me-2"></i>Hồ sơ cá nhân
                                            </a>
                                        </div>


                                        <div style="display: flex; align-items: center;">
                                            <span style="padding-left: 10px"> <i class="fa-solid fa-right-from-bracket"
                                                    style="margin-right: 10px;"></i></span>
                                            <a href="{{ route('logout') }}"
                                                style="color: rgb(66, 19, 42); margin-left: -38px;"
                                                class="nav-link-style d-flex align-items-center px-4 py-3"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="fa-light fa-fw fa-sign-out-alt" style="margin-right: 5px;"></i>
                                                Đăng xuất
                                            </a>
                                        </div>

                                        <form id="logout-form" action="{{ route('user.dangxuat') }}" method="post"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>

                                @endguest
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{ route('giohang') }}">
                                    <img alt="Surfside Media"
                                        src="{{ asset('fassets/imgs/theme/icons/icon-cart.svg') }}">
                                    <span class="pro-count blue">{{ Cart::count() ?? 0 }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="{{ route('home') }}"><img src="{{ asset('fassets/imgs/logo/logo1.png') }}"
                            alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categori-button-active" href="#">
                            <span class="fi-rs-apps"></span> Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-large">
                            <ul>
                                <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer &
                                        Office</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer
                                        Electronics</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-diamond"></i>Jewelry &
                                        Accessories</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother &
                                        Kids</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a>
                                </li>

                            </ul>
                            <div class="more_categories">Show more...</div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>

                                <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}"
                                        href="{{ route('home') }}">Home</a></li>

                                <li><a class="{{ request()->routeIs('shop') ? 'active' : '' }}"
                                        href="{{ route('shop') }}">Shop</a></li>

                                <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}"
                                        href="{{ route('about') }}">About</a></li>

                                <li>
                                    <a class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                                        href="{{ route('contact') }}">Contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="hotline d-none d-lg-block">
                    <p><i class="fi-rs-smartphone"></i><span>Toll Free</span> (+84) 123-456-789 </p>
                </div>
                <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%
                </p>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.php">
                                <img alt="Surfside Media"
                                    src="{{ asset('fassets/imgs/theme/icons/icon-heart.svg') }}">
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="{{ route('giohang') }}">
                                <img alt="Surfside Media"
                                    src="{{ asset('fassets/imgs/theme/icons/icon-cart.svg') }}">
                                <span class="pro-count white">{{ Cart::count() ?? 0 }}</span>
                            </a>
                            {{-- <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <div id="change-item-cart">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt="Surfside Media"
                                                        src="{{ asset('fassets/imgs/shop/thumbnail-3.jpg') }}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt="Surfside Media"
                                                        src="{{ asset('fassets/imgs/shop/thumbnail-4.jpg') }}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="{{ route('giohang') }}">View cart</a>
                                            <a href="shop-checkout.php">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
