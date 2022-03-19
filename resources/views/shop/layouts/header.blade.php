<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__close">+</div>
    <ul class="offcanvas__widget">
        <li><span class="icon_search search-switch"></span></li>
        <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
        <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
    </ul>
    <div class="offcanvas__logo">
        <a href="./index.html"><img src="{{asset('shop/img/logo.png') }}" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__auth">
        <a href="#">Đăng nhập</a>
        <a href="#">Đăng ký</a>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <a href="/"><img src="{{asset('shop/img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li><a href="/">Trang chủ</a></li>
                        <li><a href="/products">Sản phẩm</a></li>
                        <li><a href="">Nhà xuất bản</a>
                            <ul class="dropdown">
                                @foreach ($nxb as $item)
                                    <li><a href="">{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">Loại sách</a>
                            <ul class="dropdown">
                                @foreach ($loai as $item)
                                    <li><a href="">{{$item->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4">
                <div class="header__right">
                    <ul class="header__right__widget">
                        <li>
                            <div class="d-flex justify-content-center h-100">
                                <form method="get" action="/search" class="form-inline mr-auto">
                                    <div class="searchbar">
                                        <input type="text" name="key" class="search_input" placeholder="Search..." aria-label="Search">
                                        <button class="search_icon" type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        <li><a href="/cart"><span class="icon_bag_alt"></span>
                            @if (session('cart'))
                                <div class="tip">{{ count($cart) }}</div>
                            @else
                                <div class="tip">0</div>
                            @endif
                                
                            </a></li>
                    </ul>
                    <div style="padding-left: 20px;" class="header__right__auth">
                        <a href="#">Login</a>
                        <a href="#">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->