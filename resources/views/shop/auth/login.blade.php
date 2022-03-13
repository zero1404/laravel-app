@extends('shop.layouts.auth')
@section('title', 'Đăng Nhập')

@section('content')
<main class="login-bg">

  <div class="login-form-area">
    <div class="login-form">
      <form method="POST" action="{{ route('login') }}" class="mt-4">
        @csrf
        <div class="login-heading">
          <span>{{ __('Đăng Nhập') }}</span>
        </div>

        <div class="input-box">
          <div class="single-input-fields">
            <label for='email'>{{ __('Email') }}</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="single-input-fields">
            <label>{{ __('Mật khẩu:') }}</label>
            <input type="password" id="password" name="password" placeholder="********">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="single-input-fields login-check">
            <input type="checkbox" value="" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember"> {{ __('Lưu đăng nhập') }}</label>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="f-right">{{ __('Quên
              mật khẩu?') }}</a>
            @endif
          </div>
        </div>

        <div class="login-footer">
          <p> {{ __('Không có tài khoản? ') }}<a href="{{ route('shop.register') }}">{{ __('Đăng ký') }}</a> ngay</p>
          <button class="submit-btn3">{{ __('Đăng nhập') }}</button>
        </div>
      </form>
    </div>
  </div>

</main>

@endsection