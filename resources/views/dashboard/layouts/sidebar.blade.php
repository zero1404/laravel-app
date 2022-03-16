<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
  <a class="navbar-brand me-lg-5" href="../../index.html">
    <img class="navbar-brand-dark" src="{{ asset('admin/img/brand/light.svg') }}" alt="logo" />
    <img class="navbar-brand-light" src="{{ asset('admin/img/brand/dark.svg') }}" alt="logo" />
  </a>
  <div class="d-flex align-items-center">
    <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
  <div class="sidebar-inner px-4 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="avatar-lg me-4">
          <img src="../../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
            alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h5 mb-3">Hi, Jane</h2>
          <a href="../../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
            </svg>
            Sign Out
          </a>
        </div>
      </div>

      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
          aria-expanded="true" aria-label="Toggle navigation">
          <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
    </div>

    <ul class="nav flex-column pt-3 pt-md-0">
      <li class="nav-item">
        <a href="../../index.html" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="{{ asset('admin/img/brand/light.svg') }}" height="20" width="20" alt="Volt Logo">
          </span>
          <span class="mt-1 ms-1 sidebar-text">BOOK STORE</span>
        </a>
      </li>

      <li class="nav-item {{Route::currentRouteName() == 'dashboard.index' ? 'active' : ''}}">
        <a href="{{route('dashboard.index')}}" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
              <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
            </svg>
          </span>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        SHOP
      </div>
      <li class="nav-item {{Route::currentRouteName() == 'order.index' ? 'active' : ''}}">
        <a href="{{route('order.index')}}" class="nav-link">
          <span class="sidebar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-xs me-2" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </span>
          <span class="sidebar-text">Đơn hàng</span>
        </a>
      </li>

      <li class="nav-item {{Route::currentRouteName() == 'coupon.index' ? 'active' : ''}}">
        <a href="{{ route('coupon.index')}}" class="nav-link">
          <span class="sidebar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-xs me-2" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
            </svg>
          </span>
          <span class="sidebar-text">Mã giảm giá</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        THÔNG TIN
      </div>

      <li class="nav-item {{Route::currentRouteName() == 'product.index' ? 'active' : ''}}">
        <a href="{{ route('product.index')}}" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </span>
          <span class="sidebar-text">Sách</span>
        </a>
      </li>

      <li class="nav-item {{Route::currentRouteName() == 'category.index' ? 'active' : ''}}">
        <a href="{{ route('category.index')}}" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
              <path fill-rule="evenodd"
                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                clip-rule="evenodd"></path>
            </svg>
          </span>
          <span class="sidebar-text">Danh mục</span>
        </a>
      </li>

      <li class="nav-item {{Route::currentRouteName() == 'author.index' ? 'active' : ''}}">
        <a href="{{ route('author.index')}}" class="nav-link">
          <span class="sidebar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-xs me-2" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
          </span>
          <span class="sidebar-text">Tác giả</span>
        </a>
      </li>

      <li class="nav-item {{Route::currentRouteName() == 'language.index' ? 'active' : ''}}">
        <a href="{{ route('language.index')}}" class="nav-link">
          <span class="sidebar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-xs me-2" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
            </svg>
          </span>
          <span class="sidebar-text">Ngôn ngữ</span>
        </a>
      </li>

      <li class="nav-item {{Route::currentRouteName() == 'publisher.index' ? 'active' : ''}}">
        <a href="{{ route('publisher.index')}}" class="nav-link">
          <span class="sidebar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-xs me-2" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
          </span>
          <span class="sidebar-text">Nhà xuất bản</span>
        </a>
      </li>

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        CHUNG
      </div>

      <li class="nav-item {{Route::currentRouteName() == 'user.index' ? 'active' : ''}}">
        <a href="{{ route('user.index')}}" class="nav-link">
          <span class="sidebar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-xs me-2" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
          </span>
          <span class="sidebar-text">Tài khoản</span>
        </a>
      </li>

      <li class="nav-item {{Route::currentRouteName() == 'dashboard.file-manager' ? 'active' : ''}}">
        <a href="{{ route('dashboard.file-manager')}}" class="nav-link">
          <span class="sidebar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-xs me-2" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
            </svg>
          </span>
          <span class="sidebar-text">Quản Lý Tập Tin</span>
        </a>
      </li>

    </ul>
  </div>
</nav>