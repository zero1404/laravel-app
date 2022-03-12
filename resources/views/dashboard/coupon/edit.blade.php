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
'name' => 'Sửa mã giảm giá',
'url' => route('coupon.edit', $coupon->id),
'active' => true,
]
];
@endphp

@section('content')
<div class='py-4'>
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
  <x-Dashboard.Forms.FormEdit name="Mã Giảm Giá" route="coupon.store" :id="$coupon->id">
    <x-Dashboard.Forms.Input name="Mã" property="code" placeholder="Nhập mã" value="{{ $coupon->code }}" />

    <x-Dashboard.Forms.Select name="Loại" property="type">
      <option value="fixed" {{ $coupon->type == 'fixed' ? 'selected' : '' }}>Giá tiền</option>
      <option value="percent" {{ $coupon->type == 'percent' ? 'selected' : '' }}>Phần trăm</option>
    </x-Dashboard.Forms.Select>

    <x-Dashboard.Forms.Input name="Giá trị" property="value" type="number" placeholder="Nhập giá trị"
      value="{{ $coupon->value }}" />

    <x-Dashboard.Forms.Input name="Số lượt sử dụng" property="times" type="number" placeholder="Nhập số lượt"
      value="{{ $coupon->times }}" />

    <x-Dashboard.Forms.Input name="Ngày hết hạn" property="expiration_date" type="date" placeholder="dd/MM/yyyy"
      value="{{date('Y-m-d', strtotime($coupon->expiration_date))}}" />

    <x-Dashboard.Forms.Select name="Trạng thái" property="status">
      <option value="active" {{ $coupon->status == 'active' ? 'selected' : '' }}>Còn hiệu lực</option>
      <option value="inactive" {{ $coupon->status == 'inactive' ? 'selected' : '' }}>Hết hạn</option>
    </x-Dashboard.Forms.Select>
  </x-Dashboard.Forms.FormEdit>
</div>
@endsection