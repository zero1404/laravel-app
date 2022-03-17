<?php

namespace App\Http\Controllers;


use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishers = Publisher::orderBy('id', 'DESC')->get();
        return view('dashboard.publisher.index', compact('publishers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.publisher.create');
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
            'name.required' => 'Tên không được bỏ trống',
            'name.string' => 'Tên phải là chuỗi kí tự',
            'name.max' => 'Tên không được lớn hơn 100 kí tự',
            'description.string' => 'Mô tả phải là chuỗi kí tự',
            'description.max' => 'Mô tả không được lớn hơn 200 kí tự',
        ];

        $this->validate($request, [
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:200',
        ], $messages);

        $data = $request->all();
        $status = Publisher::create($data);

        if ($status) {
            request()->session()->flash('success', 'Tạo nhà xuất bản thành công.');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
        
        return redirect()->route('publisher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publisher = Publisher::find($id);

        if (!$publisher) {
            return abort(404, 'Mã nhà xuất bản không tồn tại');
        }

        return view('dashboard.publisher.detail', compact('publisher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publisher = Publisher::find($id);

        if (!$publisher) {
            return abort(404, 'Mã nhà xuất bản không tồn tại');
        }

        return view('dashboard.publisher.edit', compact('publisher'));
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
        $publisher = Publisher::find($id);

        if (!$publisher) {
            return abort(404, 'Mã nhà xuất bản không tồn tại');
        }

        $messages = [
            'name.required' => 'Tên không được bỏ trống',
            'name.string' => 'Tên phải là chuỗi kí tự',
            'name.max' => 'Tên không được lớn hơn 100 kí tự',
            'description.string' => 'Mô tả phải là chuỗi kí tự',
            'description.max' => 'Mô tả không được lớn hơn 200 kí tự',
        ];

        $this->validate($request, [
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:200',
        ], $messages);

        $data = $request->all();
        $status = $publisher->fill($data)->save();

        if ($status) {
            request()->session()->flash('success', 'Cập nhật nhà xuất bản thành công.');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }

        return redirect()->route('publisher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publisher = Publisher::find($id);

        if (!$publisher) {
            return abort(404, 'Mã nhà xuất bản không tồn tại');
        }

        try {
            $status = $publisher->delete();
            if ($status) {
                request()->session()->flash('success', 'Đã xoá nhà xuất bản thành công.');
            } else {
                request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            if ((int)$ex->errorInfo[0] === 23000) {
                request()->session()->flash('error', 'Không thể xoá vì tồn tại ràng buộc khoá ngoại!');
            } else {
                request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
            }
        }

        return redirect()->route('publisher.index');
    }
}
