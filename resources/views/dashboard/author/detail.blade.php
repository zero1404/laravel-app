@extends('dashboard.layouts.app')
@section('title', 'Chi Tiết Tác Giả')

@php
$breadcrumbs = [
[
'name' => 'Danh sách tác giả',
'url' => route('author.index'),
'active' => false,
],
[
'name' => 'Chi tiết tác giả',
'url' => route('author.show', $author->id),
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
          <h5 class="mt-2 font-weight-bold text-primary float-left">Tác Giả
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
                <td>{{ $author->id }}</td>
              </tr>
              <tr>
                <td>Họ tên</td>
                <td>{{ $author->fullname }}</td>
              </tr>
              <tr>
                <td>Tiểu sử</td>
                <td>{{ $author->biography ?? '...' }}</td>
              </tr>
              <tr>
                <td>Ngày tạo</td>
                <td>{{ $author->created_at->format('d-m-Y') }}
                  - {{ $author->created_at->format('g: i a') }}</td>
              </tr>
              <tr>
                <td>Ngày cập nhật</td>
                <td>{{ $author->updated_at->format('d-m-Y') }}
                  - {{ $author->updated_at->format('g: i a') }}
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="card-footer d-flex">
          <x-Dashboard.Shared.ButtonDetail :id="$author->id" edit="author.edit" delete="author.destroy" />
        </div>
      </div>
    </div>
  </div>
</div>
@endsection