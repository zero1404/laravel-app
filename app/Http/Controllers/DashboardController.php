<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = User::select(DB::raw("COUNT(*) as count"), DB::raw("DAYNAME(created_at) as day_name"), DB::raw("DAY(created_at) as day"))
            ->where('created_at', '>', Carbon::today()->subDay(6))
            ->groupBy('day_name', 'day')
            ->orderBy('day')
            ->get();

        $users[] = ['Name', 'Number'];
        foreach ($data as $key => $value) {
            $users[++$key] = [$value->day_name, $value->count];
        }
        return view('dashboard.home.index')->with('users', json_encode($users));
    }

    public function fileManager()
    {
        return view('dashboard.file-manager.index');
    }

    public function showProfile()
    {
        return view('dashboard.auth.profile');
    }

    public function updateProfile()
    {
    }

    public function showUpdatePassword()
    {
        return view('dashboard.auth.change-password');
    }

    public function updatePassword(Request $request)
    {
        $messages = [
            'oldpassword.required' => 'Mật khẩu hiện tại không được bỏ trống',
            'password.required' => 'Mật khẩu thoại không được bỏ trống',
            'password.string' => 'Mật khẩu phải là chuỗi kí tự',
            'repassword.required' => 'Mật khẩu xác nhận không được bỏ trống',
            'repassword.string' => 'Mật khẩu xác nhận phải là chuỗi kí tự',
            'repassword.same' => 'Mật khẩu xác nhận không giống với mật khẩu',
        ];

        $user = User::find(Auth::id());

        $data = $request->all();


        $this->validate(
            $request,
            [
                'oldpassword' => [
                    'required', function ($attribute, $value, $fail) {
                        if (!Hash::check($value, Auth::user()->password)) {
                            $fail('Mật khẩu hiện tại không chính xác');
                        }
                    },
                ],
                'password' => 'required|string',
                'repassword' => 'required|string|same:password',
            ],
            $messages
        );
        $status = $user->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Cập nhật mật khẩu thành công.');
            return redirect()->route('dashboard.profile');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
        return redirect()->route('dashboard.profile.show-update-password');
    }

    public function updateAvatar(Request $request)
    {
        $messages = [
            'avatar.required' => 'Ảnh đại diện không được bỏ trống',
            'avatar.string' => 'Ảnh đại diện phải là chuỗi'
        ];

        $this->validate(
            $request,
            [
                'avatar' => 'required|string',
            ],
            $messages
        );

        $user = User::find(Auth::id());

        $data = $request->all();

        $status = $user->fill($data)->save();

        if ($status) {
            request()->session()->flash('success', 'Cập nhật ảnh đại diện thành công.');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
        return redirect()->route('dashboard.profile');
    }
}
