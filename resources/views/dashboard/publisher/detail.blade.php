@extends('dashboard.layouts.app')
@section('title', 'Chi Tiết Nhà Xuất Bản')

@php
$breadcrumbs = [
[
'name' => 'Danh sách nhà xuất bản',
'url' => route('publisher.index'),
'active' => false,
],
[
'name' => 'Chi tiết nhà xuất bản',
'url' => route('publisher.show', $publisher->id),
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
          <h5 class="mt-2 font-weight-bold text-primary float-left">Nhà Xuất Bản
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
                <td>{{ $publisher->id }}</td>
              </tr>
              <tr>
                <td>Tên</td>
                <td>{{ $publisher->name }}</td>
              </tr>
              <tr>
                <td>Mô tả</td>
                <td>{{ $publisher->description ?? '...' }}</td>
              </tr>
              <tr>
                <td>Ngày tạo</td>
                <td>{{ $publisher->created_at->format('d-m-Y') }}
                  - {{ $publisher->created_at->format('g: i a') }}</td>
              </tr>
              <tr>
                <td>Ngày cập nhật</td>
                <td>{{ $publisher->updated_at->format('d-m-Y') }}
                  - {{ $publisher->updated_at->format('g: i a') }}
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="card-footer d-flex">
          <x-Dashboard.Shared.ButtonDetail :id="$publisher->id" edit="publisher.edit" delete="publisher.destroy" />
        </div>
      </div>
    </div>
  </div>
</div>
@endsection