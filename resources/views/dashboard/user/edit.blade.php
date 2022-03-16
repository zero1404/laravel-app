@extends('dashboard.layouts.app')
@section('title', 'Sửa Tài Khoản')

@section('content')
<x-Dashboard.Forms.FormEdit name="Tài Khoản" route="user.update" :id="$user->id">
  <div class="row">
    <div class="col">
      <x-Dashboard.Forms.Input name="Họ" property="lastname" placeholder="Nhập họ" value="{{ $user->lastname }}" />
    </div>
    <div class="col">
      <x-Dashboard.Forms.Input name="Tên" property="firstname" placeholder="Nhập tên" value="{{ $user->firstname }}" />
    </div>
  </div>

  <div class="row">
    <div class="col">
      <x-Dashboard.Forms.Input name="Email" property="email" type="email" placeholder="Nhập email"
        value="{{ $user->email }}" />
    </div>
    <div class="col">
      <x-Dashboard.Forms.Input name="Điện Thoại" property="telephone" placeholder="Nhập số điện thoại"
        value="{{ $user->telephone }}" />
    </div>
  </div>

  <div class="row">
    <div class="col">
      <x-Dashboard.Forms.Input name="Mật khẩu" property="password" type="password" placeholder="Nhập mật khẩu"
        value="" />
    </div>
    <div class="col">
      <x-Dashboard.Forms.Input name="Xác nhận mật khẩu" property="repassword" type="password"
        placeholder="Nhập lại mật khẩu" value="" />
    </div>
  </div>

  <x-Dashboard.Forms.InputImage name="Ảnh đại diện" property="avatar" :value="$user->avatar" />

  <div class="row">
    <div class="col">
      <x-Dashboard.Forms.Select name="Chức vụ" property="role">
        <option value="admin">Admin</option>
        <option value="employee">Nhân viên</option>
        <option value="customer">Khách hàng</option>
      </x-Dashboard.Forms.Select>
    </div>
    <div class="col">
      <x-Dashboard.Forms.Select name="Trạng thái" property="status">
        <option value="active" {{ old('status')=='active' ? 'selected' : '' }}>Hoạt động</option>
        <option value="inactive" {{ old('status')=='active' ? 'selected' : '' }}>Không hoạt động</option>
      </x-Dashboard.Forms.Select>
    </div>
  </div>
</x-Dashboard.Forms.FormEdit>
@endsection

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
<script>
  $('#lfm').filemanager();
</script>
@endpush