<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::orderBy('id', 'DESC')->get();
        return view('dashboard.coupon.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.coupon.create');
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
            'code.required' => 'Code không được bỏ trống',
            'code.string' => 'Code phải là chuỗi kí tự',
            'code.max' => 'Code không được lớn hơn 20 kí tự',
            'type.required' => 'Chưa chọn loại',
            'type.in' => 'Loại không hợp lệ',
            'value.required' => 'Giá trị không được bỏ trống',
            'value.numeric' => 'Giá trị phải là số',
            'status.required' => 'Chưa chọn trạng thái',
            'status.in' => 'Trạng thái không hợp lệ',
            'times.required' => 'Số lượt sử dụng không được bỏ trống',
            'times.numeric' => 'Số lượt sử dụng phải là số',
            'expiration_date.required' => 'Ngày hết hạn không được bỏ trống',
            'expiration_date.date' => 'Ngày hết hạn không hợp lệ',
        ];

        $this->validate($request, [
            'code' => 'required|string|max:20',
            'type' => 'required|in:fixed,percent',
            'value' => 'required|numeric',
            'status' => 'required|in:active,inactive',
            'times' => 'required|numeric',
            'expiration_date' => 'required|date'
        ], $messages);

        $data = $request->all();
        $status = Coupon::create($data);
        if ($status) {
            request()->session()->flash('success', 'Tạo mã giảm giá thành công.');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
        return redirect()->route('coupon.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coupon = Coupon::findOrFail($id);
        return view('dashboard.coupon.detail', compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon = Coupon::find($id);
        if ($coupon) {
            return view('dashboard.coupon.edit', compact('coupon'));
        } else {
            return view('dashboard.coupon.index')->with('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coupon = Coupon::find($id);
        $messages = [
            'code.required' => 'Code không được bỏ trống',
            'code.string' => 'Code phải là chuỗi kí tự',
            'code.max' => 'Code không được lớn hơn 20 kí tự',
            'type.required' => 'Chưa chọn loại',
            'type.in' => 'Loại không hợp lệ',
            'value.required' => 'Giá trị không được bỏ trống',
            'value.numeric' => 'Giá trị phải là số',
            'status.required' => 'Chưa chọn trạng thái',
            'status.in' => 'Trạng thái không hợp lệ',
            'times.required' => 'Số lượt sử dụng không được bỏ trống',
            'times.numeric' => 'Số lượt sử dụng phải là số',
            'expiration_date.required' => 'Ngày hết hạn không được bỏ trống',
            'expiration_date.date' => 'Ngày hết hạn không hợp lệ',
        ];

        $this->validate($request, [
            'code' => 'required|string|max:20',
            'type' => 'required|in:fixed,percent',
            'value' => 'required|numeric',
            'status' => 'required|in:active,inactive',
            'times' => 'required|numeric',
            'expiration_date' => 'required|date'
        ], $messages);

        $data = $request->all();
        $status = $coupon->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Cập nhật mã giảm giá thành công.');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
        return redirect()->route('coupon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        if ($coupon) {
            $status = $coupon->delete();
            if ($status) {
                request()->session()->flash('success', 'Đã xoá mã giảm giá thành công.');
            } else {
                request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
            }
            return redirect()->route('coupon.index');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
            return redirect()->back();
        }
    }
}
