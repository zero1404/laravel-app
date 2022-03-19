@extends('dashboard.layouts.app')
@section('title', 'Danh Sách Mã Giảm Giá')

@php
$breadcrumbs = [
[
'name' => 'Danh sách mã giảm giá',
'url' => route('coupon.index'),
'active' => true
]
];

$columns = [
'id' => 'ID',
'code' => 'Mã',
'type' => 'Loại',
'value' => 'Giá Trị',
'time' => 'Số lượt còn lại',
'status' => 'Trạng Thái',
'action' => '',
];
@endphp

@section('content')

<div class="py-4">
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
  <x-Dashboard.Shared.ButtonCreate name='Tạo Mã Giảm Giá' url='coupon.create' />
</div>

<x-Dashboard.Tables.Table name="mã giảm giá" :columns="$columns" create="coupon.create" :value="$coupons">
  @foreach ($coupons as $coupon)
  <tr>
    <td>{{ $coupon->id }}</td>
    <td>{{ $coupon->code }}</td>
    <td>
      @if ($coupon->type == 'fixed')
      <span class="badge badge-sm bg-primary ms-1">Giá tiền</span>
      @else
      <span class="badge badge-sm bg-info ms-1">Phần trăm</span>
      @endif
    </td>
    <td>
      @if ($coupon->type == 'fixed')
      {{ Helpers::formatCurrency($coupon->value) }}
      @else
      {{ $coupon->value }}%
      @endif
    </td>
    <td>{{ $coupon->times }} lượt</td>
    <td>
      @if ($coupon->status == 'active')
      <span class="badge badge-sm bg-info ms-1">Còn hiệu lực</span>
      @else
      <span class="badge badge-sm bg-danger ms-1">Hết hạn</span>
      @endif
    </td>
    <td class="col-sm-1">
      <x-Dashboard.Shared.ButtonAction :id="$coupon->id" show="coupon.show" edit="coupon.edit"
        delete="coupon.destroy" />
    </td>
  </tr>
  @endforeach
</x-Dashboard.Tables.Table>
@endsection