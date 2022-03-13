@extends('shop.layouts.auth')
@section('title', 'Đăng Ký')

@section('content')
<main class="login-bg">

  <div class="register-form-area">
    <div class="register-form text-center">

      <div class="register-heading">
        <span>{{ __('Đăng Ký') }}</span>
      </div>

      <div class="input-box">
        <div class="single-input-fields">
          <label>Full name</label>
          <input type="text" placeholder="Enter full name">
        </div>
        <div class="single-input-fields">
          <label>Email Address</label>
          <input type="email" placeholder="Enter email address">
        </div>
        <div class="single-input-fields">
          <label>Password</label>
          <input type="password" placeholder="Enter Password">
        </div>
        <div class="single-input-fields">
          <label>Confirm Password</label>
          <input type="password" placeholder="Confirm Password">
        </div>
      </div>

      <div class="register-footer">
        <p> Already have an account? <a href="login.html"> Login</a> here</p>
        <button class="submit-btn3">Sign Up</button>
      </div>
    </div>
  </div>

</main>

@endsection