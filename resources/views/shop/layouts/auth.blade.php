<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shop.layouts.head')

<body>

  <!-- Start content -->
  @yield('content')
  <!-- End content -->

  @include('shop.layouts.scripts')
</body>

</html>