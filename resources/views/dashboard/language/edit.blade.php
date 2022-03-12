@extends('dashboard.layouts.app')
@section('title', 'Sửa Ngôn Ngữ')

@php
$breadcrumbs = [
[
'name' => 'Danh sách ngôn ngữ',
'url' => route('language.index'),
'active' => false,
],
[
'name' => 'Sửa ngôn ngữ',
'url' => route('language.edit', $language->id),
'active' => true,
]
];
@endphp

@section('content')
<div class='py-4'>
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
  <x-Dashboard.Forms.FormEdit name="Ngôn Ngữ" route="language.update" :id="$language->id">
    <x-Dashboard.Forms.Input name="Tên" property="name" placeholder="Nhập tên" value="{{ $language->name }}" />
  </x-Dashboard.Forms.FormEdit>
</div>
@endsection