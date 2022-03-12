@extends('dashboard.layouts.app')
@section('title', 'Danh Sách Nhà Xuất Bản')

@php
$breadcrumbs = [
[
'name' => 'Danh sách nhà xuất bản',
'url' => route('publisher.index'),
'active' => true
]
];

$columns = [
'id' => 'ID',
'name' => 'Tên',
'description' => 'Mô tả',
'action' => '',
];
@endphp
@section('content')

<div class="py-4">
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
  <x-Dashboard.Shared.ButtonCreate name='Tạo Nhà Xuất Bản' url='publisher.create' />
</div>

<x-Dashboard.Tables.Table name="nhà xuất bản" :columns="$columns" create="publisher.create" :value="$publishers">
  @foreach ($publishers as $publisher)
  <tr>
    <td>{{ $publisher->id }}</td>
    <td>{{ $publisher->name }}</td>
    <td>{{ $publisher->description }}</td>
    <td class="col-sm-1">
      <x-Dashboard.Shared.ButtonAction :id="$publisher->id" show="publisher.show" edit="publisher.edit"
        delete="publisher.destroy" />
    </td>
  </tr>
  @endforeach
</x-Dashboard.Tables.Table>
@endsection