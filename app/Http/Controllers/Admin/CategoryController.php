<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
        return $_FILES;
        exit();
        $data = $request->validated();

        $category = new Category();

        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->description = $data['description'];
        if ($data->hasfile('image')) {
            $file = $data->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtention();
            $file->move('uploads/category', $filename);
            $category->image = $filename;
        }

        $category->meta_title = $data['meta_title'];
        $category->meta_description = $data['meta_description'];
        $category->meta_keyword = $data['meta_keyword'];
        $category->navbar_status = $data['navbar_status'];
        $category->status = $data['status'];
    }
}
