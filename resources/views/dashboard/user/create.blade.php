@extends('Dashboard.layouts.app')
@section('title', 'Tạo Tài Khoản')

@php
$breadcrumbs = [
[
'name' => 'Danh sách tài khoản',
'url' => route('user.index'),
'active' => false
],
[
'name' => 'Tạo tài khoản',
'url' => route('user.create'),
'active' => true,
]
];
@endphp

@section('content')
<div class="py-4">
    <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
    <x-Dashboard.Forms.FormCreate name="Tài Khoản" route="user.store">
        <div class="row">
            <div class="col">
                <x-Dashboard.Forms.Input name="Họ" property="lastname" placeholder="Nhập họ"
                    value="{{ old('lastname') }}" />
            </div>
            <div class="col">
                <x-Dashboard.Forms.Input name="Tên" property="firstname" placeholder="Nhập tên"
                    value="{{ old('firstname') }}" />
            </div>
        </div>

        <div class="row">
            <div class="col">
                <x-Dashboard.Forms.Input name="Email" property="email" type="email" placeholder="Nhập email"
                    value="{{ old('email') }}" />
            </div>
            <div class="col">
                <x-Dashboard.Forms.Input name="Điện Thoại" property="telephone" placeholder="Nhập số điện thoại"
                    value="{{ old('telephone') }}" />
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

        <x-Dashboard.Forms.InputImage name="Ảnh đại diện" property="avatar" :value="old('avatar')" />

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
    </x-Dashboard.Forms.FormCreate>
</div>
@endsection

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endpush