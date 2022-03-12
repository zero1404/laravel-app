@extends('dashboard.layouts.app')
@section('title', 'Tạo Nhà Xuất Bản')

@php
$breadcrumbs = [
[
'name' => 'Danh sách nhà xuất bản',
'url' => route('publisher.index'),
'active' => false,
],
[
'name' => 'Tạo nhà xuất bản',
'url' => route('publisher.create'),
'active' => true,
]
];
@endphp

@section('content')
<div class='py-4'>
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
  <x-Dashboard.Forms.FormCreate name="Nhà Xuất Bản" route="publisher.store">
    <x-Dashboard.Forms.Input name="Tên" property="name" placeholder="Nhập tên" value="{{ old('name') }}" />
    <x-Dashboard.Forms.Textarea name="Mô tả" property="description" placeholder="" value="{{ old('description') }}"
      placeholder="Nhập mô tả" rows="5" />
  </x-Dashboard.Forms.FormCreate>
</div>
@endsection