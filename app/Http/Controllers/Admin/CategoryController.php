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
        $cate             = new Category();
        $cate->name       = $request->name;
        $cate->slug_name        = $request->full_name;
        $cate->parent_id=$request->parent_id;
        $cate->created_at = new DateTime;
        $cate->save();
        return redirect(route('listdanhmuc'))->with("message","Thêm thành công");
    }

    public function getListCate()
    {
        $cates = Category::all();
        return view("admin.category.list_cate",compact('cates'));
    }
    public function getEditCate($id)
    {
        $cate =Category::all()->toArray();

        $item = Category::find($id);

        return view("admin.category.edit_cate",compact('cate','item'));
    }
    public function postEditCate($id , Request $request){

        $cate             = Category::find($id);
        $cate->name       = $request->txtCateName;
        $cate->slug_name  = $request->txtFullName;
        $cate->parent_id  = $request->selectParentId;
        $cate->updated_at = new DateTime;
        $cate->save();
        return redirect(route('listdanhmuc'))->with("message","Thêm thành công");
    }
}
