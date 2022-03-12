@extends('dashboard.layouts.app')
@section('title', 'Danh sách tác giả')

@php
$breadcrumbs = [
[
'name' => 'Danh sách tác giả',
'url' => route('author.index'),
'active' => true
]
];

$columns = [
'id' => 'ID',
'fullname' => 'Họ Tên',
'biography' => 'Tiểu Sử',
'action' => '',
];
@endphp
@section('content')
<div class="py-4">
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
  <x-Dashboard.Shared.ButtonCreate name='Taọ Tác Giả' url='author.create' />
</div>

<x-Dashboard.Tables.Table name="Tác Giả" :value="$authors" :columns="$columns">
  @foreach ($authors as $author)
  <tr>
  <tr>
    <td>{{ $author->id }}</td>
    <td>{{ $author->fullname }}</td>
    <td>{{ $author->biography }}</td>
    <td class="col-sm-1">
      <x-Dashboard.Shared.ButtonAction :id="$author->id" show="author.show" edit="author.edit"
        delete="author.destroy" />
    </td>
  </tr>
  </tr>
  @endforeach
</x-Dashboard.Tables.Table>
</div>
@endsection

@push('scripts')
<script>
  const dataTableEl = d.getElementById('datatable');
  if(dataTableEl) {
    const dataTable = new simpleDatatables.DataTable(dataTableEl,
    {
      labels: {
        placeholder: "Tìm kiếm...",
        perPage: "{select} mục trên mỗi trang",
        noRows: "Danh sách trống",
        noResults: "Không có kết quả nào phù hợp với truy vấn tìm kiếm của bạn",
        info: "Showing {start} to {end} of {rows} entries" //
    }
  });
  }
</script>
@endpush