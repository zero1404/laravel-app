@extends('dashboard.layouts.app')
@section('title', 'Tạo Mã Giảm Giá')

@php
$breadcrumbs = [
[
'name' => 'Danh sách mã giảm giá',
'url' => route('coupon.index'),
'active' => false,
],
[
'name' => 'Tạo mã giảm giá',
'url' => route('coupon.create'),
'active' => true,
]
];
@endphp

@section('content')
<div class='py-4'>
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
  <x-Dashboard.Forms.FormCreate name="Mã Giảm Giá" route="coupon.store">
    <x-Dashboard.Forms.Input name="Mã" property="code" placeholder="Nhập mã" value="{{ old('code') }}" />

    <x-Dashboard.Forms.Select name="Loại" property="type">
      <option value="fixed">Giá tiền</option>
      <option value="percent">Phần trăm</option>
    </x-Dashboard.Forms.Select>

    <x-Dashboard.Forms.Input name="Giá trị" property="value" type="number" placeholder="Nhập giá trị"
      value="{{ old('value') }}" />

    <x-Dashboard.Forms.Input name="Số lượt sử dụng" property="times" type="number" placeholder="Nhập số lượt"
      value="{{ old('times') }}" />

    <x-Dashboard.Forms.Input name="Ngày hết hạn" property="expiration_date" type="date" placeholder="dd/MM/yyyy"
      value="{{ old('expiration_date') }}" />

    <x-Dashboard.Forms.Select name="Trạng thái" property="status">
      <option value="active">Còn hiệu lực</option>
      <option value="inactive">Hết hạn</option>
    </x-Dashboard.Forms.Select>
  </x-Dashboard.Forms.FormCreate>
</div>
@endsection