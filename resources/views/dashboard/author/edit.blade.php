@extends('dashboard.layouts.app')
@section('title', 'Sửa Tác Giả')

@php
$breadcrumbs = [
[
'name' => 'Danh sách tác giả',
'url' => route('author.index'),
'active' => true
],
[
'name' => 'Sửa tác giả',
'url' => route('author.create', $author->id),
'active' => true,
]
];
@endphp

@section('content')
<div class='py-4'>
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
  <x-Dashboard.Forms.FormEdit name="Tác Giả" route="author.update" :id="$author->id">
    <x-Dashboard.Forms.Input name="Họ" property="lastname" placeholder="Nhập họ" value="{{ $author->lastname }}" />
    <x-Dashboard.Forms.Input name="Tên" property="firstname" placeholder="Nhập tên" value="{{ $author->firstname }}" />
    <x-Dashboard.Forms.Textarea name="Tiểu sử" property="biography" placeholder="" value="{{ $author->biography }}"
      placeholder="Nhập tiểu sử" rows="5" />
  </x-Dashboard.Forms.FormEdit>
</div>
@endsection