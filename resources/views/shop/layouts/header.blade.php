<header>
  <div class="header-area">
    <div class="main-header ">
      <div class="header-top ">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="d-flex justify-content-between align-items-center flex-sm">
                <div class="header-info-left d-flex align-items-center">

                  <div class="logo">
                    <a href=""><img src="{{ asset('shop/img/logo/header.png') }}" alt="Logo"></a>
                  </div>

                  <form action="#" class="form-box">
                    <input type="text" name="Search" placeholder="Search book by author or publisher">
                    <div class="search-icon">
                      <i class="ti-search"></i>
                    </div>
                  </form>
                </div>
                <div class="header-info-right d-flex align-items-center">
                  <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Track Order</a></li>
                    <li class="shopping-card">
                      <a href="cart.html"><img src="{{ asset('shop/img/icon/cart.svg') }}" alt=""></a>
                    </li>
                    <li><a href="{{ route('shop.login') }}" class="btn header-btn">{{ __('Đăng Nhập') }}</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom  header-sticky">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-12">

              <div class="logo2">
                <a href=""><img src="{{ asset('shop/img/logo/header.png') }}" alt=""></a>
              </div>

              <div class="main-menu text-center d-none d-lg-block">
                <nav>
                  <ul id="navigation">
                    <li><a href="{{ route('shop.home')}}">{{ __('Trang Chủ') }}</a></li>
                    <li><a href="javascript:void(0)">{{ __('Thể Loại') }}</a>
                      <ul class="submenu">
                        @foreach(Helpers::getListMenuCategory() as $category)
                        <li><a href="">
                            {{$category->title}}
                          </a>
                        </li>
                        @endforeach
                      </ul>
                    </li>
                    <li><a href="{{ route('shop.about')}}">{{ __('Giới Thiệu') }}</a></li>
                  </ul>
                </nav>
              </div>
            </div>

            <div class="col-xl-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>