@extends('dashboard.layouts.app')
@section('title', 'Sửa Tài Khoản')

@php
$breadcrumbs = [
[
'name' => 'Danh sách tài khoản',
'url' => route('user.index'),
'active' => false
],
[
'name' => 'Tạo tài khoản',
'url' => route('user.edit', $user->id),
'active' => true,
]
];
@endphp

@section('content')
<div class="py-4">
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />

  <x-Dashboard.Forms.FormEdit name="Tài Khoản" route="user.update" :id="$user->id">
    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Input name="Họ" property="lastname" placeholder="Nhập họ" value="{{ $user->lastname }}" />
      </div>
      <div class="col">
        <x-Dashboard.Forms.Input name="Tên" property="firstname" placeholder="Nhập tên"
          value="{{ $user->firstname }}" />
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
        <x-Dashboard.Forms.InputDate name="Ngày sinh" property="birthday"
          value="{{ $user->birthday && Helpers::formatDate($user->birthday)}}" />
      </div>
      <div class="col">
        <x-Dashboard.Forms.Select name="Giới tính" property="gender">
          <option value="male" {{ $user->gender=='male' ? 'selected' : '' }}>Nam</option>
          <option value="female" {{ $user->gender=='female' ? 'selected' : '' }}>Nữ</option>
        </x-Dashboard.Forms.Select>
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
          <option value="admin" {{ $user->role == 'admin' ? 'selected' : ''}}>Admin</option>
          <option value="employee" {{ $user->role == 'employee' ? 'selected' : ''}}>Nhân viên</option>
          <option value="customer" {{ $user->role == 'customer' ? 'selected' : ''}}>Khách hàng</option>
        </x-Dashboard.Forms.Select>
      </div>
      <div class="col">
        <x-Dashboard.Forms.Select name="Trạng thái" property="status">
          <option value="active" {{ $user->status=='active' ? 'selected' : '' }}>Hoạt động</option>
          <option value="inactive" {{ $user->status=='inactive' ? 'selected' : '' }}>Không hoạt động</option>
        </x-Dashboard.Forms.Select>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Input name="Địa chỉ" property="address" type="text" placeholder="Nhập địa chỉ"
          value="{{ $user->address ? $user->address->address : '' }}" />
      </div>
      <div class="col mt-2">
        <x-Dashboard.Forms.Select name="Tỉnh" property="province">
          @foreach (Helpers::getAllProvince() as $province)
          <option value="{{ $province->id }}" {{ $user->address && $user->address->province->id == $province->id ? '
            selected' : '' }}>
            {{ $province->name_with_type }}</option>
          @endforeach
        </x-Dashboard.Forms.Select>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Select name="Thành phố/quận" property="district">
          @if ($user->address)
          @foreach (Helpers::getDistricts($user->address->province->id) as $district)
          <option value="{{ $district->id }}" {{ $district->id == $user->address->district->id ? ' selected' : '' }}>
            {{ $district->name_with_type }}</option>
          @endforeach
          @endif
        </x-Dashboard.Forms.Select>
      </div>
      <div class="col">
        <x-Dashboard.Forms.Select name="Phường/Xã" property="ward">
          @if ($user->address)
          @foreach (Helpers::getWards($user->address->district->id) as $ward)
          <option value="{{ $ward->id }}" {{ $ward->id == $user->address->ward->id ? ' selected' : '' }}>
            {{ $ward->name_with_type }}</option>
          @endforeach
          @endif
        </x-Dashboard.Forms.Select>
      </div>
    </div>
  </x-Dashboard.Forms.FormEdit>
</div>
@endsection

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
  $('#lfm').filemanager('image');
</script>
@endpush