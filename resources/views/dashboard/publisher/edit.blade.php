@extends('dashboard.layouts.app')
@section('title', 'Sửa Nhà Xuất Bản')

@php
$breadcrumbs = [
[
'name' => 'Danh sách nhà xuất bản',
'url' => route('publisher.index'),
'active' => false,
],
[
'name' => 'Sửa nhà xuất bản',
'url' => route('publisher.edit', $publisher->id),
'active' => true,
]
];
@endphp

@section('content')
<div class='py-4'>
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
  <x-Dashboard.Forms.FormEdit name="Nhà Xuất Bản" route="publisher.update" :id="$publisher->id">
    <x-Dashboard.Forms.Input name="Tên" property="name" placeholder="Nhập tên" value="{{ $publisher->name}} " />
    <x-Dashboard.Forms.Textarea name="Mô tả" property="description" placeholder="" value="{{ $publisher->description }}"
      placeholder="Nhập mô tả" rows="5" />
  </x-Dashboard.Forms.FormEdit>
</div>
@endsection