<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shop.layouts.head')

<body>

  <!-- Start header -->
  @include('shop.layouts.header')
  <!-- End header -->

  <!-- Start content -->
  @yield('content')
  <!-- End content -->

  <!-- Start footer -->
  @include('shop.layouts.footer')
  <!-- End footer -->

  @include('shop.layouts.scripts')
</body>

</html>