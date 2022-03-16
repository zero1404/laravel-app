@extends('dashboard.layouts.app')
@section('title', 'Sửa Danh Mục Sản Phẩm')

@php
$breadcrumbs = [
[
'name' => 'Danh sách danh mục',
'url' => route('category.index'),
'active' => false,
],
[
'name' => 'Sửa danh mục',
'url' => route('category.edit', $category->id),
'active' => true,
]
];
@endphp

@section('content')
<div class='py-4'>
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />

  <x-Dashboard.Forms.FormEdit name="Danh Mục" route="category.update" :id="$category->id">
    <x-Dashboard.Forms.Input name="Tiêu đề" property="title" placeholder="Nhập tiêu đề"
      value="{{ $category->title }}" />

    <x-Dashboard.Forms.Textarea name="Mô tả" property="description" placeholder="Nhập mô tả"
      value="{{ $category->description }}" placeholder="Nhập mô tả" />

    @if ($category->parent_id != null)
    <x-Dashboard.Forms.Select name="Danh mục cha" property="parent_id">
      @foreach ($parent_categories as $key => $parent_category)
      <option value='{{ $parent_category->id }}' {{ $parent_category->id == $category->parent_id ? 'selected' : '' }}>
        {{ $parent_category->title }}
      </option>
      @endforeach
    </x-Dashboard.Forms.Select>
    @endif
  </x-Dashboard.Forms.FormEdit>
</div>
@endsection

@push('scripts')
<script>
  const selectParentField = d.querySelector('#inputParent_id');
  if(selectParentField) {
    const choices = new Choices(selectParentField); 
  }
</script>
@endpush