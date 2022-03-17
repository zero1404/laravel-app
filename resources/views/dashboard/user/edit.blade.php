@extends('dashboard.layouts.app')
@section('title', 'Sửa Tài Khoản')

@php
$breadcrumbs = [
[
'name' => 'Danh sách tài khoản',
'url' => route('user.index'),
'active' => false
],
[
'name' => 'Tạo tài khoản',
'url' => route('user.edit', $user->id),
'active' => true,
]
];
@endphp

@section('content')
<div class="py-4">
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />

  {{-- <div class="py-2">
    <div class="dropdown"><button class="btn btn-gray-800 d-inline-flex align-items-center me-2 dropdown-toggle"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg class="icon icon-xs me-2" fill="none"
          stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg> Thêm</button>
      <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1" style=""><a
          class="dropdown-item d-flex align-items-center" href="#"><svg class="dropdown-icon text-gray-400 me-2"
            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
            </path>
          </svg> Thêm địa chỉ </a><a class="dropdown-item d-flex align-items-center" href="#"><svg
            class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
            </path>
          </svg> </a><a class="dropdown-item d-flex align-items-center" href="#"><svg
            class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
            </path>
            <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
          </svg> Upload Files </a><a class="dropdown-item d-flex align-items-center" href="#"><svg
            class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
              clip-rule="evenodd"></path>
          </svg> Preview Security</a>
        <div role="separator" class="dropdown-divider my-1"></div><a class="dropdown-item d-flex align-items-center"
          href="#"><svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
              clip-rule="evenodd"></path>
          </svg> Upgrade to Pro</a>
      </div>
    </div>
  </div> --}}

  <x-Dashboard.Forms.FormEdit name="Tài Khoản" route="user.update" :id="$user->id">
    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Input name="Họ" property="lastname" placeholder="Nhập họ" value="{{ $user->lastname }}" />
      </div>
      <div class="col">
        <x-Dashboard.Forms.Input name="Tên" property="firstname" placeholder="Nhập tên"
          value="{{ $user->firstname }}" />
      </div>
    </div>

    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Input name="Email" property="email" type="email" placeholder="Nhập email"
          value="{{ $user->email }}" />
      </div>
      <div class="col">
        <x-Dashboard.Forms.Input name="Điện Thoại" property="telephone" placeholder="Nhập số điện thoại"
          value="{{ $user->telephone }}" />
      </div>
    </div>

    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Input name="Mật khẩu" property="password" type="password" placeholder="Nhập mật khẩu"
          value="" />
      </div>
      <div class="col">
        <x-Dashboard.Forms.Input name="Xác nhận mật khẩu" property="repassword" type="password"
          placeholder="Nhập lại mật khẩu" value="" />
      </div>
    </div>

    <x-Dashboard.Forms.InputImage name="Ảnh đại diện" property="avatar" :value="$user->avatar" />

    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Select name="Chức vụ" property="role">
          <option value="admin" {{ $user->role == 'admin' ? 'selected' : ''}}>Admin</option>
          <option value="employee" {{ $user->role == 'employee' ? 'selected' : ''}}>Nhân viên</option>
          <option value="customer" {{ $user->role == 'customer' ? 'selected' : ''}}>Khách hàng</option>
        </x-Dashboard.Forms.Select>
      </div>
      <div class="col">
        <x-Dashboard.Forms.Select name="Trạng thái" property="status">
          <option value="active" {{ $user->status=='active' ? 'selected' : '' }}>Hoạt động</option>
          <option value="inactive" {{ $user->status=='inactive' ? 'selected' : '' }}>Không hoạt động</option>
        </x-Dashboard.Forms.Select>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Input name="Địa chỉ" property="address" type="text" placeholder="Nhập địa chỉ"
          value="{{ $user->address ? $user->address->address : '' }}" />
      </div>
      <div class="col mt-2">
        <x-Dashboard.Forms.Select name="Tỉnh" property="province">
          @foreach (Helpers::getAllProvince() as $province)
          <option value="{{ $province->id }}" {{ $user->address && $user->address->province->id == $province->id ? '
            selected' : '' }}>
            {{ $province->name_with_type }}</option>
          @endforeach
        </x-Dashboard.Forms.Select>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <x-Dashboard.Forms.Select name="Thành phố/quận" property="district">
          @if ($user->address)
          @foreach (Helpers::getDistricts($user->address->province->id) as $district)
          <option value="{{ $district->id }}" {{ $district->id == $user->address->district->id ? ' selected' : '' }}>
            {{ $district->name_with_type }}</option>
          @endforeach
          @endif
        </x-Dashboard.Forms.Select>
      </div>
      <div class="col">
        <x-Dashboard.Forms.Select name="Phường/Xã" property="ward">
          @if ($user->address)
          @foreach (Helpers::getWards($user->address->district->id) as $ward)
          <option value="{{ $ward->id }}" {{ $ward->id == $user->address->ward->id ? ' selected' : '' }}>
            {{ $ward->name_with_type }}</option>
          @endforeach
          @endif
        </x-Dashboard.Forms.Select>
      </div>
    </div>
  </x-Dashboard.Forms.FormEdit>
</div>
@endsection

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
  $('#lfm').filemanager('image');
</script>
@endpush