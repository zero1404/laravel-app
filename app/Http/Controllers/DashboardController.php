<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Address;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Language;
use App\Models\Publisher;
use App\Models\Author;

class DashboardController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $count_product = Product::getCountActiveProduct();
        $count_category = Category::getCountCategory();
        $count_order = Order::getCountActiveOrder();
        $count_user = User::getCountActiveUser();
        $count_coupon = Coupon::getCountActiveVoucher();
        $count_language = Language::getCountLanguage();
        $count_author = Author::getCountAuthor();
        $count_publisher = Publisher::getCountPublisher();

        $data = User::select(DB::raw("COUNT(*) as count"), DB::raw("DAYNAME(created_at) as day_name"), DB::raw("DAY(created_at) as day"))
            ->where('created_at', '>', Carbon::today()->subDay(6))
            ->groupBy('day_name', 'day')
            ->orderBy('day')
            ->get();

        $users[] = ['Name', 'Number'];
        foreach ($data as $key => $value) {
            $users[++$key] = [$value->day_name, $value->count];
        }
        return view('dashboard.home.index', compact(
            'count_product',
            'count_category',
            'count_order',
            'count_user',
            'count_coupon',
            'count_publisher',
            'count_language',
            'count_author'
        ))->with('users', json_encode($users));
    }

    public function fileManager()
    {
        return view('dashboard.file-manager.index');
    }

    public function showProfile()
    {
        return view('dashboard.auth.profile');
    }

    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::id());

        if (!$user) {
            Session::flush();
            Auth::logout();
            return redirect('dashboard.login');
        }

        $messages = [
            'firstname.string' => 'T??n ph???i l?? chu???i k?? t???',
            'firstname.required' => 'T??n kh??ng ???????c b??? tr???ng',
            'firstname.max' => 'T??n kh??ng ???????c v?????t qu?? 100 k?? t???',
            'lastname.string' => 'H??? ph???i l?? chu???i k?? t???',
            'lastname.required' => 'H??? kh??ng ???????c b??? tr???ng',
            'lastname.max' => 'H??? kh??ng ???????c v?????t qu?? 100 k?? t???',
            'address.required' => '?????a ch??? kh??ng ???????c b??? tr???ng',
            'address.string' => '?????a ch??? ph???i l?? chu???i k?? t???',
            'province.required' => 'T???nh kh??ng ???????c b??? tr???ng',
            'province.string' => 'T???nh ph???i l?? chu???i k?? t???',
            'district.required' => 'Qu???n/huy???n kh??ng ???????c b??? tr???ng',
            'district.string' => 'Qu???n/huy???n ph???i l?? chu???i k?? t???',
            'ward.required' => 'Ph?????ng/x?? kh??ng ???????c b??? tr???ng',
            'ward.string' => 'Ph?????ng/x?? ph???i l?? chu???i k?? t???',
            'email.required' => 'Email kh??ng ???????c b??? tr???ng',
            'email.email' => 'Email kh??ng h???p l???',
            'email.unique' => 'Email kh??ng c?? s???n',
            'telephone.required' => 'S??? ??i???n tho???i kh??ng ???????c b??? tr???ng',
            'telephone.string' => 'S??? ??i???n tho???i ph???i l?? chu???i k?? t???',
            'telephone.min' => 'S??? ??i???n tho???i kh??ng ???????c nh??? h??n 10 k?? t???',
            'telephone.max' => 'S??? ??i???n tho???i kh??ng ???????c l???n h??n 10 k?? t???',
        ];

        $this->validate($request, [
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'avatar' => 'nullable|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'province' => 'required|string',
            'district' => 'required|string',
            'ward' => 'required|string',
            'telephone' => 'required|string|max:10',
        ], $messages);

        if ($request->input('email') != $user->email) {
            $this->validate($request, [
                'email' => 'required|email|unique:users',
            ], $messages);
        }

        $data = $request->all();

        if ($request->input('address')) {
            $this->validate($request, [
                'province' => 'required|string',
                'district' => 'required|string',
                'ward' => 'required|string',
            ], $messages);

            $address = null;
            if ($user->address) {
                $address = Address::find($user->address_id);
            } else {
                $address = new Address();
            }
            $address->address = $data['address'];
            $address->address = $data['address'];
            $address->province_id = $data['province'];
            $address->district_id = $data['district'];
            $address->ward_id = $data['ward'];
            $address->save();
            $data['address_id'] = $address->id;
        }

        $data['birthday'] = \Carbon\Carbon::parse($request->input('birthday'));
        $data['gender'] = $request->input('gender') == 'male';

        $status = $user->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'C???p nh???t th??ng tin t??i kho???n th??nh c??ng.');
        } else {
            request()->session()->flash('error', 'C?? l???i x???y ra, vui l??ng th??? l???i!');
        }
        return redirect()->route('dashboard.profile');
    }

    public function showUpdatePassword()
    {
        return view('dashboard.auth.change-password');
    }

    public function updatePassword(Request $request)
    {
        $messages = [
            'oldpassword.required' => 'M???t kh???u hi???n t???i kh??ng ???????c b??? tr???ng',
            'password.required' => 'M???t kh???u tho???i kh??ng ???????c b??? tr???ng',
            'password.string' => 'M???t kh???u ph???i l?? chu???i k?? t???',
            'repassword.required' => 'M???t kh???u x??c nh???n kh??ng ???????c b??? tr???ng',
            'repassword.string' => 'M???t kh???u x??c nh???n ph???i l?? chu???i k?? t???',
            'repassword.same' => 'M???t kh???u x??c nh???n kh??ng gi???ng v???i m???t kh???u',
        ];

        $user = User::find(Auth::id());

        $data = $request->all();


        $this->validate(
            $request,
            [
                'oldpassword' => ['required', 'string', new MatchOldPassword],
                'password' => 'required|string',
                'repassword' => 'required|string|same:password',
            ],
            $messages
        );
        $status = $user->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'C???p nh???t m???t kh???u th??nh c??ng.');
            return redirect()->route('dashboard.profile');
        } else {
            request()->session()->flash('error', 'C?? l???i x???y ra, vui l??ng th??? l???i!');
        }
        return redirect()->route('dashboard.profile.show-update-password');
    }

    public function updateAvatar(Request $request)
    {
        $messages = [
            'avatar.required' => '???nh ?????i di???n kh??ng ???????c b??? tr???ng',
            'avatar.string' => '???nh ?????i di???n ph???i l?? chu???i'
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
            request()->session()->flash('success', 'C???p nh???t ???nh ?????i di???n th??nh c??ng.');
        } else {
            request()->session()->flash('error', 'C?? l???i x???y ra, vui l??ng th??? l???i!');
        }
        return redirect()->route('dashboard.profile');
    }
}
