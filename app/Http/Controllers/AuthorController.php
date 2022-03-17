<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::orderBy('id', 'DESC')->get();
        return view('dashboard.author.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.author.create');
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
            'firstname.required' => 'Tên không được bỏ trống',
            'firstname.string' => 'Tên phải là chuỗi kí tự',
            'firstname.min' => 'Tên phải bao gồm ít nhất 1 kí tự',
            'firstname.max' => 'Tên không được lớn hơn 30 kí tự',
            'lastname.required' => 'Họ không được bỏ trống',
            'lastname.string' => 'Họ phải là chuỗi kí tự',
            'lastname.min' => 'Họ phải bao gồm ít nhất 1 kí tự',
            'lastname.max' => 'Họ không được lớn hơn 80 kí tự',
            'biography.string' => 'Tiểu sử phải là chuỗi kí tự',
        ];

        $this->validate($request, [
            'firstname' => 'required|string|min:1|max:30',
            'lastname' => 'required|string|min:1|max:80',
            'biography' => 'nullable|string',
        ], $messages);

        $data = $request->all();
        $status = Author::create($data);
        if ($status) {
            request()->session()->flash('success', 'Tạo tác giả thành công.');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
        return redirect()->route('author.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return abort(404, 'Mã tác giả không tồn tại.');
        }
        return view('dashboard.author.detail', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return abort(404, 'Mã tác giả không tồn tại.');
        }

        return view('dashboard.author.edit', compact('author'));
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
        $author = Author::find($id);
        if (!$author) {
            return abort(404, 'Mã tác giả không tồn tại.');
        }

        $messages = [
            'firstname.required' => 'Tên không được bỏ trống',
            'firstname.string' => 'Tên phải là chuỗi kí tự',
            'firstname.min' => 'Tên phải bao gồm ít nhất 1 kí tự',
            'firstname.max' => 'Tên không được lớn hơn 30 kí tự',
            'lastname.required' => 'Họ không được bỏ trống',
            'lastname.string' => 'Họ phải là chuỗi kí tự',
            'lastname.min' => 'Họ phải bao gồm ít nhất 1 kí tự',
            'lastname.max' => 'Họ không được lớn hơn 80 kí tự',
            'biography.string' => 'Tiểu sử phải là chuỗi kí tự',
        ];

        $this->validate($request, [
            'firstname' => 'required|string|min:1|max:30',
            'lastname' => 'required|string|min:1|max:80',
            'biography' => 'nullable|string',
        ], $messages);

        $data = $request->all();
        $status = $author->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Cập nhật tác giả thành công.');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
        return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return abort(404, 'Mã tác giả không tồn tại.');
        }
        $status = $author->delete();

        if ($status) {
            request()->session()->flash('success', 'Đã xoá tác giả thành công.');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
        return redirect()->route('author.index');
    }
}
