<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Address;
use App\Libraries\General;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Auth::user()->role;
        $users = $role == 'admin' ? User::orderBy('id', 'DESC')->get() : User::where('role', 'customer')->orderBy('id', 'DESC')->get();
        return view('dashboard.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'firstname.string' => 'Tên phải là chuỗi kí tự',
            'firstname.required' => 'Tên không được bỏ trống',
            'firstname.max' => 'Tên không được vượt quá 100 kí tự',
            'lastname.string' => 'Họ phải là chuỗi kí tự',
            'lastname.required' => 'Họ không được bỏ trống',
            'lastname.max' => 'Họ không được vượt quá 100 kí tự',
            'email.required' => 'Email không được bỏ trống',
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Email không có sẵn',
            'telephone.required' => 'Số điện thoại không được bỏ trống',
            'telephone.string' => 'Số điện thoại phải là chuỗi kí tự',
            'telephone.min' => 'Số điện thoại không được nhỏ hơn 10 kí tự',
            'telephone.max' => 'Số điện thoại không được lớn hơn 10 kí tự',
            'password.required' => 'Mật khẩu thoại không được bỏ trống',
            'password.string' => 'Mật khẩu phải là chuỗi kí tự',
            'repassword.required' => 'Mật khẩu xác nhận không được bỏ trống',
            'repassword.string' => 'Mật khẩu xác nhận phải là chuỗi kí tự',
            'repassword.same' => 'Mật khẩu xác nhận không giống với mật khẩu',
            'role.required' => 'Chưa chọn vai trò',
            'role.in' => 'Vai trò không hợp lệ',
            'status.required' => 'Chưa chọn trạng thái',
            'status.in' => 'Trạng thái không hợp lệ',
        ];

        $this->validate(
            $request,
            [
                'firstname' => 'required|string|max:100',
                'lastname' => 'required|string|max:100',
                'password' => 'required|string',
                'repassword' => 'required|string|same:password',
                'avatar' => 'nullable|string',
                'email' => 'required|email|unique:users',
                'telephone' => 'required|string|max:10',
                'role' => 'required|in:admin,employee,customer',
                'status' => 'required|in:active,inactive',
            ],
            $messages
        );
        $data = $request->all();

        if ($request->input('address')) {
            $this->validate($request, [
                'province' => 'required|string',
                'district' => 'required|string',
                'ward' => 'required|string',
            ]);

            $address = new Address();
            $address->address = $data['address'];
            $address->province_id = $data['province'];
            $address->district_id = $data['district'];
            $address->ward_id = $data['ward'];
            $address->save();
            $data['address_id'] = $address->id;
        }

        $data['password'] = Hash::make($request->password);
        $status = User::create($data);
        if ($status) {
            request()->session()->flash('success', 'Tạo tài khoản thành công.');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.user.detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        // $roles = General::getEnumValues('users', 'role');
        return view('dashboard.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $messages = [
            'firstname.string' => 'Tên phải là chuỗi kí tự',
            'firstname.required' => 'Tên không được bỏ trống',
            'firstname.max' => 'Tên không được vượt quá 100 kí tự',
            'lastname.string' => 'Họ phải là chuỗi kí tự',
            'lastname.required' => 'Họ không được bỏ trống',
            'lastname.max' => 'Họ không được vượt quá 100 kí tự',
            'email.required' => 'Email không được bỏ trống',
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Email không có sẵn',
            'telephone.required' => 'Số điện thoại không được bỏ trống',
            'telephone.string' => 'Số điện thoại phải là chuỗi kí tự',
            'telephone.min' => 'Số điện thoại không được nhỏ hơn 10 kí tự',
            'telephone.max' => 'Số điện thoại không được lớn hơn 10 kí tự',
            'password.required' => 'Mật khẩu thoại không được bỏ trống',
            'password.string' => 'Mật khẩu phải là chuỗi kí tự',
            'repassword.required' => 'Mật khẩu xác nhận không được bỏ trống',
            'repassword.string' => 'Mật khẩu xác nhận phải là chuỗi kí tự',
            'repassword.same' => 'Mật khẩu xác nhận không giống với mật khẩu',
            'role.required' => 'Chưa chọn vai trò',
            'role.in' => 'Vai trò không hợp lệ',
            'status.required' => 'Chưa chọn trạng thái',
            'status.in' => 'Trạng thái không hợp lệ',
        ];

        $this->validate($request, [
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'avatar' => 'nullable|string',
            'telephone' => 'required|string|max:10',
            'role' => 'required|in:admin,employee,customer',
            'status' => 'required|in:active,inactive',
        ], $messages);

        if ($request->input('email') != $user->email) {
            $this->validate($request, [
                'email' => 'required|email|unique:users',
            ], $messages);
        }


        $data = $request->all();

        if ($request->input('password')) {
            $this->validate($request, [
                'password' => 'required|string',
                'repassword' => 'required|string|same:password',
            ]);
        }

        $data['password'] = Hash::make($request->password);

        $status = $user->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Cập nhật tài khoản thành công.');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findorFail($id);
        $status = $user->delete();
        if ($status) {
            request()->session()->flash('success', 'Xoá tài khoản thành công.');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
        return redirect()->route('user.index');
    }
}
