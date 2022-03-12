<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =  Category::orderBy('id', 'DESC')->get();
        return view('dashboard.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_categories = Category::whereNull('parent_id')->orderBy('title', 'ASC')->get();
        return view('dashboard.category.create', compact('parent_categories'));
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
            'title.required' => 'Tiêu đề không được bỏ trống',
            'title.string' => 'Tiêu đề phải là chuỗi kí tự',
            'title.max' => 'Tiêu đề không được lớn hơn 100 kí tự',
            'description.string' => 'Mô tả phải là chuỗi kí tự',
            'description.max' => 'Mô tả không được lớn hơn 200 kí tự',
            'parent_id.exists' => 'Danh mục cha không tồn tại',
        ];

        $this->validate($request, [
            'title' => 'required|string|max:100',
            'description' => 'nullable|string|max:200',
            'parent_id' => 'nullable|exists:categories,id',
        ], $messages);

        $data = $request->all();
        $slug = Str::slug($request->title);
        $data['slug'] = $slug;
        $status = Category::create($data);

        if ($status) {
            request()->session()->flash('success', 'Tạo danh mục thành công.');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);

        if ($category == null) {
            return abort(404, 'Danh mục sản phẩm không tồn tại');
        }

        return view('dashboard.category.detail', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        if ($category == null) {
            return abort(404, 'Danh mục sản phẩm không tồn tại');
        }

        $parent_categories = Category::whereNull('parent_id')->orderBy('title', 'ASC')->get();
        return view('dashboard.category.edit', compact('category', 'parent_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if ($category == null) {
            return abort(404, 'Danh mục sản phẩm không tồn tại');
        }

        $messages = [
            'title.required' => 'Tiêu đề không được bỏ trống',
            'title.string' => 'Tiêu đề phải là chuỗi kí tự',
            'title.max' => 'Tiêu đề không được lớn hơn 100 kí tự',
            'description.string' => 'Mô tả phải là chuỗi kí tự',
            'description.max' => 'Mô tả không được lớn hơn 200 kí tự',
            'parent_id.exists' => 'Danh mục cha không tồn tại',
        ];

        $this->validate($request, [
            'title' => 'required|string|max:100',
            'description' => 'nullable|string|max:200',
            'parent_id' => 'nullable|exists:categories,id',
        ], $messages);

        $data = $request->all();
        $status = $category->fill($data)->save();

        if ($status) {
            request()->session()->flash('success', 'Cập nhật thành công.');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if ($category == null) {
            return abort(404, 'Danh mục sản phẩm không tồn tại');
        }

        $child_category = Category::where('parent_id', $id)->pluck('id');

        try {
            $status = $category->delete();

            if ($status) {
                if (count($child_category) > 0) {
                    Category::whereIn('id', $child_category)->update(['parent_id' => null]);
                }
                request()->session()->flash('success', 'Đã xoá danh mục thành công.');
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
        return redirect()->route('category.index');
    }
}
