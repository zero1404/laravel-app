<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Language;
use App\Models\Publisher;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('dashboard.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::getListByParent();
        $authors = Author::all();
        $languages = Language::all();
        $publishers = Publisher::all();
        return view('dashboard.product.create', compact('categories', 'authors', 'languages', 'publishers'));
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
            'title.max' => 'Tiêu đề không được lớn hơn 255 kí tự',
            'description.required' => 'Mô tả không được bỏ trống',
            'description.string' => 'Mô tả phải là chuỗi kí tự',
            'quantity.required' => 'Số lượng tồn kho không được bỏ trống',
            'quantity.integer' => 'Số lượng tồn kho phải là số nguyên',
            'status.required' => 'Chưa chọn trạng thái',
            'status.in' => 'Trạng thái không hợp lệ',
            'images.required' => 'Ảnh không được bỏ trống',
            'images.string' => 'Ảnh phải là chuỗi kí tự',
            'price.required' => 'Giá không được bỏ trống',
            'price.numeric' => 'Giá phải là số',
            'discount.numeric' => 'Chiết khấu phải là số',
            'page_number.required' => 'Số trang không được bỏ trống',
            'page_number.integer' => 'Số trang phải là số nguyên',
            'category_id.required' => 'Danh mục không được bỏ trống',
            'category_id.exists' => 'Danh mục không tồn tại',
            'language_id.required' => 'Chưa chọn ngôn ngữ',
            'language_id.exists' => 'Ngôn ngữ không tồn tại',
            'publisher_id.required' => 'Chưa chọn nhà xuất bản',
            'publisher_id.exists' => 'Nhà xuất bản không tồn tại',
            'author_id.required' => 'Chưa chọn tác giả',
            'author_id.exists' => 'Tác giả không tồn tại',
        ];

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'quantity' => 'required|integer',
            'status' => 'required:|in:active,inactive',
            'images' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'page_number' => 'required|numeric',
            'publication_date' => 'nullable',
            'reprint_date' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'language_id' => 'required|exists:languages,id',
            'author_id' => 'required|exists:authors,id',
            'publisher_id' => 'required|exists:publishers,id',
        ], $messages);

        $data = $request->all();
        $slug = Str::Slug($request->title);
        $count = Product::where('slug', $slug)->count();

        if ($count > 0) {
            $slug += '-' . $count;
        }

        $data['slug'] = $slug;
        $status = Product::create($data);

        if ($status) {
            request()->session()->flash('success', 'Tạo sản phẩm thành công');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return abort(404, 'Mã sách không không tồn tại');
        }

        return view('dashboard.product.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return abort(404, 'Mã sách không không tồn tại');
        }

        $categories = Category::getListByParent();
        $authors = Author::all();
        $languages = Language::all();
        $publishers = Publisher::all();

        return view('dashboard.product.edit', compact('product', 'categories', 'authors', 'languages', 'publishers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return abort(404, 'Mã sách không không tồn tại');
        }

        $messages = [
            'title.required' => 'Tiêu đề không được bỏ trống',
            'title.string' => 'Tiêu đề phải là chuỗi kí tự',
            'title.max' => 'Tiêu đề không được lớn hơn 255 kí tự',
            'description.required' => 'Mô tả không được bỏ trống',
            'description.string' => 'Mô tả phải là chuỗi kí tự',
            'quantity.required' => 'Số lượng tồn kho không được bỏ trống',
            'quantity.integer' => 'Số lượng tồn kho phải là số nguyên',
            'status.required' => 'Chưa chọn trạng thái',
            'status.in' => 'Trạng thái không hợp lệ',
            'images.required' => 'Ảnh không được bỏ trống',
            'images.string' => 'Ảnh phải là chuỗi kí tự',
            'price.required' => 'Giá không được bỏ trống',
            'price.numeric' => 'Giá phải là số',
            'sold.required' => 'Số lượng đã bán không được bỏ trống',
            'sold.integer' => 'Số lượng đã bán phải là số nguyên',
            'discount.numeric' => 'Chiết khấu phải là số',
            'page_number.required' => 'Số trang không được bỏ trống',
            'page_number.integer' => 'Số trang phải là số nguyên',
            'category_id.required' => 'Danh mục không được bỏ trống',
            'category_id.exists' => 'Danh mục không tồn tại',
            'language_id.required' => 'Chưa chọn ngôn ngữ',
            'language_id.exists' => 'Ngôn ngữ không tồn tại',
            'publisher_id.required' => 'Chưa chọn nhà xuất bản',
            'publisher_id.exists' => 'Nhà xuất bản không tồn tại',
            'author_id.required' => 'Chưa chọn tác giả',
            'author_id.exists' => 'Tác giả không tồn tại',
        ];

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'quantity' => 'required|integer',
            'status' => 'required:|in:active,inactive',
            'images' => 'required|string',
            'price' => 'required|numeric',
            'sold' => 'required|integer',
            'discount' => 'nullable|numeric',
            'page_number' => 'required|numeric',
            'publication_date' => 'nullable',
            'reprint_date' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'language_id' => 'required|exists:languages,id',
            'author_id' => 'required|exists:authors,id',
            'publisher_id' => 'required|exists:publishers,id',
        ], $messages);

        $data = $request->all();
        $status = $product->fill($data)->save();

        if ($status) {
            request()->session()->flash('success', 'Cập nhật sản phẩm thành công');
        } else {
            request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return abort(404, 'Mã sách không không tồn tại');
        }

        try {
            $status = $product->delete();
            if ($status) {
                request()->session()->flash('success', 'Xoá sản phẩm thành công.');
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

        return redirect()->route('product.index');
    }
}
