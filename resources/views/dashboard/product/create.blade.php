@extends('dashboard.layouts.app')
@section('title', 'Tạo Sản Phẩm')

@php
$breadcrumbs = [
[
'name' => 'Danh sách sách',
'url' => route('product.index'),
'active' => false
],
[
'name' => 'Tạo sách',
'url' => route('product.create'),
'active' => true,
]
];
@endphp

@section('content')
<div class='py-4'>
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
  <x-Dashboard.Forms.FormCreate name='Sản Phẩm' route='product.store'>
    <x-Dashboard.Forms.Input name="Tiêu đề" property="title" placeholder="Nhập tiêu đề" value="{{ old('title') }}" />

    <x-Dashboard.Forms.Textarea name=" Mô tả" property="description" placeholder="" value="{{ old('description') }}"
      placeholder="Nhập mô tả" rows="5" />

    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Input name="Giá" property="price" type="number" placeholder="Nhập giá"
          value="{{ old('price') }}" />
      </div>
      <div class="col">
        <x-Dashboard.Forms.Input name="Số lượng" property="quantity" type="number" placeholder="Nhập số lượng"
          value="{{ old('quantity') }}" />
      </div>
    </div>

    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Input name="Chiết khấu(%)" property="discount" type="number" placeholder="Nhập chiết khấu"
          value="0" min="0" max="100" />
      </div>
      <div class="col">
        <x-Dashboard.Forms.Input name="Số Trang" property="page_number" type="number" placeholder="Nhập số trang"
          value="{{ old('page_number') }}" />
      </div>
    </div>
    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Input name="Ngày xuất bản" property="publication_date" type="date"
          placeholder="Nhập ngày xuất bản" value="{{ old('publication_date') }}" />
      </div>
      <div class="col">
        <x-Dashboard.Forms.Input name="Ngày Tái Bản" property="reprint_date" type="date" placeholder="Nhập ngày tái bản"
          value="{{ old('reprint_date') }}" />
      </div>
    </div>

    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Select name="Danh mục" property="category_id">
          @foreach ($categories as $parent)
          <optgroup label="{{ $parent->title }}">
            @foreach ($parent->children as $children)
            <option value="{{ $children->id }}">{{ $children->title }}</option>
            @endforeach
          </optgroup>
          @endforeach
        </x-Dashboard.Forms.Select>
      </div>
      <div class="col">
        <x-Dashboard.Forms.Select name="Tác Giả" property="author_id">
          @foreach ($authors as $author)
          <option value="{{ $author->id }}">{{ $author->fullname }}</option>
          @endforeach
        </x-Dashboard.Forms.Select>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Select name="Nhà Xuất Bản" property="publisher_id">
          @foreach ($publishers as $publisher)
          <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
          @endforeach
        </x-Dashboard.Forms.Select>
      </div>
      <div class="col">
        <x-Dashboard.Forms.Select name="Ngôn Ngữ" property="language_id">
          @foreach ($languages as $language)
          <option value="{{ $language->id }}">{{ $language->name }}</option>
          @endforeach
        </x-Dashboard.Forms.Select>
      </div>
    </div>

    <x-Dashboard.Forms.InputImage name="Ảnh" property="images" />

    <x-Dashboard.Forms.Select name="Trạng thái" property="status">
      <option value="active">Hiển thị</option>
      <option value="inactive">Ẩn</option>
    </x-Dashboard.Forms.Select>
  </x-Dashboard.Forms.FormCreate>
</div>
@endsection

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
  $('#lfm').filemanager('image');
</script>

<script>
  const selectStatusField = d.querySelector('#inputStatus');
  if(selectStatusField) {
    const choices = new Choices(selectStatusField); 
  }

  const selectCategoryField = d.querySelector('#inputCategory_id');
  if(selectCategoryField) {
    const choices = new Choices(selectCategoryField); 
  }

  const selectLanguageField = d.querySelector('#inputLanguage_id');
  if(selectLanguageField) {
    const choices = new Choices(selectLanguageField); 
  }

  const selectPubslisherField = d.querySelector('#inputPublisher_id');
  if(selectPubslisherField) {
    const choices = new Choices(selectPubslisherField); 
  }

  const selectAuthorField = d.querySelector('#inputAuthor_id');
  if(selectAuthorField) {
    const choices = new Choices(selectAuthorField); 
  }
</script>
@endpush