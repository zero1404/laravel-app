@extends('dashboard.layouts.app')
@section('title', 'Chi Tiết Mã Giảm Giá')

@php
$breadcrumbs = [
[
'name' => 'Danh sách mã giảm giá',
'url' => route('coupon.index'),
'active' => false,
],
[
'name' => 'Chi tiết mã giảm giá',
'url' => route('coupon.show', $coupon->id),
'active' => true,
]
];
@endphp


@section('content')
<div class="py-4">
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="card">
        <div class="card-header">
          <h5 class="mt-2 font-weight-bold text-primary float-left">Mã Giảm Giá
          </h5>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="col-sm-3">#</th>
                <th class="col-sm-9">Thông tin</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ID</td>
                <td>{{ $coupon->id }}</td>
              </tr>
              <tr>
                <td>Mã</td>
                <td>{{ $coupon->code }}</td>
              </tr>

              <tr>
                <td>Loại</td>
                <td>{{ $coupon->type == 'fixed' ? 'Giá tiền' : 'Phần trăm' }}</td>
              </tr>
              <tr>
                <td>Giá trị</td>
                <td>{{ $coupon->type == 'fixed' ? Helpers::formatCurrency($coupon->value) : $coupon->value . '%' }}
                </td>
              </tr>
              <tr>
                <td>Số lượt còn lại</td>
                <td>{{ $coupon->times }} lượt</td>
              </tr>
              <tr>
                <td>Hạn sử dụng: </td>
                <td>{{ date('d-m-Y', strtotime($coupon->expiration_date)) }}</td>
              </tr>
              <tr>
                <td>Trạng thái</td>
                <td>{{ $coupon->status == 'active' ? 'Còn hiệu lực' : 'Hết hạn' }}</td>
              </tr>

              <tr>
                <td>Ngày tạo</td>
                <td>{{ $coupon->created_at->format('d-m-Y') }}
                  - {{ $coupon->created_at->format('g: i a') }}</td>
              </tr>
              <tr>
                <td>Ngày cập nhật</td>
                <td>{{ $coupon->updated_at->format('d-m-Y') }}
                  - {{ $coupon->updated_at->format('g: i a') }}
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="card-footer d-flex">
          <x-Dashboard.Shared.ButtonDetail :id="$coupon->id" edit="coupon.edit" delete="coupon.destroy" />
        </div>
      </div>
    </div>
  </div>
</div>
@endsection