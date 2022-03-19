@extends('dashboard.layouts.app')
@section('title', 'Danh Sách Sản Phẩm')

@php
$breadcrumbs = [
[
'name' => 'Danh sách sách',
'url' => route('product.index'),
'active' => true
]
];

$columns = [
'id' => 'ID',
'images' => 'Ảnh',
'title' => 'Tên',
'category' => 'Danh Mục',
'price' => 'Giá',
'discount' => 'Chiết Khấu',
'quantity' => 'Số Lượng',
'sold' => 'Đã Bán',
'status' => 'Trạng Thái',
'action' => '',
];
@endphp
@section('content')
<div class="py-4">
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
  <x-Dashboard.Shared.ButtonCreate name='Taọ Sách' url='product.create' />
</div>

<x-Dashboard.Tables.Table name="sách" :columns="$columns" create="product.create" :value="$products">
  @foreach ($products as $product)
  <tr>
    <td>{{ $product->id }}</td>
    <td>
      @if ($product->images)
      @php
      $photo = explode(',', $product->images);
      @endphp
      <img src="{{ $photo[0] }}" class="img-fluid zoom" style="max-width:80px" alt="{{ $product->photo }}">
      @else
      <img src="{{ asset('admin/img/thumbnail-default.jpg') }}" class="img-fluid" style="max-width:80px"
        alt="{{ $product->title }}">
      @endif
    </td>
    <td>{{ $product->title }}</td>
    <td>{{ $product->category->title }}</td>
    <td>{{ Helpers::formatCurrency($product->price) }}</td>
    <td> {{ $product->discount }}%</td>
    <td>{{ $product->quantity }}</td>
    <td>{{ $product->sold }}</td>
    <td>
      @if ($product->status == 'active')
      <span class="badge badge-sm bg-success ms-1">Hiển thị</span>
      @else
      <span class="badge badge-sm bg-warning ms-1">Ẩn</span>
      @endif
    </td>
    <td class="col-sm-1">
      <x-Dashboard.Shared.ButtonAction :id="$product->id" show="product.show" edit="product.edit"
        delete="product.destroy" />
    </td>
  </tr>
  @endforeach
</x-Dashboard.Tables.Table>
@endsection