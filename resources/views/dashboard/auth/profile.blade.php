@extends('dashboard.layouts.app')
@section('title', 'Thông tin tài khoản')

@php
$breadcrumbs = [
[
'name' => 'Thông tin tài khoản',
'url' => route('dashboard.profile'),
'active' => true,
]
]
@endphp

@section('content')
<div class="pt-4">
  <x-Dashboard.Shared.Breadcrumb :breadcrumbs="$breadcrumbs" />
</div>
<x-Dashboard.Shared.FlashMessage />

<div class="row">
  <div class="col-12 col-xl-8">
    <div class="card card-body border-0 shadow mb-4">
      <h2 class="h5 mb-4">Thông tin chung</h2>
      <form>
        <div class="row">
          <div class="col-md-6">
            <x-Dashboard.Forms.Input name="Họ" property="lastname" placeholder="Nhập họ"
              value="{{ auth()->user()->lastname }}" />
          </div>

          <div class="col-md-6">
            <x-Dashboard.Forms.Input name="Tên" property="firstname" placeholder="Nhập tên"
              value="{{ auth()->user()->firstname }}" />
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6 mb-3">
            <x-Dashboard.Forms.InputDate name="Ngày sinh" property="birthday" value="{{ auth()->user()->birthday }}" />
          </div>
          <div class="col-md-6 mb-3">
            <x-Dashboard.Forms.Select name="Giới tính" property="gender">
              <option value="male" {{ auth()->user()->gender ? 'selected' : ''}}>Nam</option>
              <option value="female" {{ !auth()->user()->gender ? 'selected' : ''}}>Nữ</option>
            </x-Dashboard.Forms.Select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <x-Dashboard.Forms.Input name="Email" type="email" property="email" placeholder="Nhập email"
              value="{{ auth()->user()->email }}" />
          </div>
          <div class="col-md-6 mb-3">
            <x-Dashboard.Forms.Input name="Số điện thoại" type="phone" property="telephone"
              placeholder="Nhập số điện thoại" value="{{ auth()->user()->telephone }}" />
          </div>
        </div>
        <h2 class="h5 my-4">Địa chỉ</h2>
        <div class="row">
          <div class="col-sm-9 mb-3">
            <x-Dashboard.Forms.Input name="Địa chỉ" property="address" placeholder="Nhập email"
              value="{{ auth()->user()->email }}" />
          </div>
          <div class="col-sm-3 mb-3">
            <div class="form-group">
              <label for="number">Number</label>
              <input class="form-control" id="number" type="number" placeholder="No." required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 mb-3">
            <div class="form-group">
              <label for="city">City</label>
              <input class="form-control" id="city" type="text" placeholder="City" required>
            </div>
          </div>
          <div class="col-sm-4 mb-3">
            <label for="state">State</label>
            <select class="form-select w-100 mb-0" id="state" name="state" aria-label="State select example">
              <option selected>State</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="DC">District Of Columbia</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="zip">ZIP</label>
              <input class="form-control" id="zip" type="tel" placeholder="ZIP" required>
            </div>
          </div>
        </div>
        <div class="mt-3">
          <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save all</button>
        </div>
      </form>
    </div>
  </div>
  <div class="col-12 col-xl-4">
    <div class="row">
      <div class="col-12 mb-4">
        <div class="card shadow border-0 text-center p-0">
          <div class="profile-cover rounded-top" data-background="{{asset('admin/img/profile-cover.jpg')}}"></div>
          <div class="card-body pb-5">
            <img src="{{Helpers::getUserAvatar(auth()->user()->avatar)}}"
              class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
            <h4 class="h3">{{ auth()->user()->fullname }}</h4>
            <h5 class="fw-normal">{{ auth()->user()->email }}</h5>
            <p class="text-gray mb-4">{{ auth()->user()->birthday ? auth()->user()->birthday : 'dd/MM/yyyy' }} - {{
              auth()->user()->gender ? 'Nam' : 'Nữ' }}</p>
            <a href="{{ route('dashboard.profile.show-update-password') }}"
              class="btn btn-sm btn-secondary text-white">Đổi
              Mật Khẩu</a>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card card-body border-0 shadow mb-4">
          <form method="POST" action="{{ route('dashboard.profile.update-avatar') }}">
            <div class="d-flex justify-content-between align-items-center">
              <h2 class="h5 mb-4">Chọn ảnh đại diện</h2>
              <button type="submit" class="btn btm-sm btn-success text-white mb-4" id="btnUpdateAvatar" disabled>Cập
                nhật</button>
            </div>
            <div class="d-flex align-items-center">
              <div class="me-3">
                <!-- Avatar -->
                <img class="rounded avatar-xl" src="{{Helpers::getUserAvatar(auth()->user()->avatar)}}"
                  alt="change avatar" id="imgAvatar">
              </div>
              <div class="file-field">
                <div class="d-flex flex-row justify-content-xl-center ms-xl-3">
                  @csrf
                  <x-Dashboard.Forms.InputImage name="Ảnh đại diện" property="avatar" :value="auth()->user()->avatar" />
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
  let originAvatar = $('#inputAvatar').val();

  $('#lfm').filemanager('image');

  $('#inputAvatar').change(function() {
    const src = $(this).val();
    const isDisabled = originAvatar === src;
    $('#btnUpdateAvatar').prop('disabled', isDisabled);
    $('#imgAvatar').attr("src", src);
  });

</script>
@endpush