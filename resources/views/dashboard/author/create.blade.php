@extends('dashboard.layouts.app')
@section('title', 'Tạo Tác Giả')

@php
$breadcrumbs = [
[
'name' => 'Danh sách tác giả',
'url' => route('author.index'),
'active' => false,
],
[
'name' => 'Tạo tác giả',
'url' => route('author.create'),
'active' => true,
]
];
@endphp

@section('content')
<div class='py-4'>
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
  <x-Dashboard.Forms.FormCreate name="Tác Giả" route="author.store">
    <x-Dashboard.Forms.Input name="Họ" property="lastname" placeholder="Nhập họ" value="{{ old('lastname') }}" />
    <x-Dashboard.Forms.Input name="Tên" property="firstname" placeholder="Nhập tên" value="{{ old('firstname') }}" />
    <x-Dashboard.Forms.Textarea name="Tiểu sử" property="biography" placeholder="" value="{{ old('biography') }}"
      placeholder="Nhập tiểu sử" rows="5" />
  </x-Dashboard.Forms.FormCreate>
</div>
@endsection