<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use DateTime;
class CategoryController extends Controller
{
    public function getAddCate()
    {

        $cate = Category::all()->toArray();

        return view('admin.category.add_cate',compact('cate'));
    }

    public function postAddCate(Request $request)
    {


        $cate             = new Category;
        $cate->name       = $request->name;
        $cate->order_display  = $request->order_display;
        $cate->created_at = new DateTime;
        $cate->save();
        $cates = Category::all();

        return view("admin.category.list_cate",compact('cates'));


    }
    public function getListCate()
    {
        $cates = Category::all();

        return view("admin.category.list_cate",compact('cates'));
    }
}
