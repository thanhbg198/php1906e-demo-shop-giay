
@extends('admin.layout.master')
@section('content')

    <form action="{{$item->id}}" method="POST">
        <div class="form-group">
            <label>Danh mục cha</label>
            <select class="form-control" name="selectParentId">
                <option value="0">Boots</option>
                <option value="2">Gốc</option>
                <option value="3">Loafer</option>
                <option value="4">Nam</option>
                <option value="5">Nữ</option>
            <?php listcate($cate, 0, $str = "", $item->parent_id ) ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tên danh mục</label>
            <input class="form-control" name="txtCateName" placeholder="Nhập tên danh mục" value="{!! $item->name!!}"/>
        </div>
        <div class="form-group">
            <label>Tên danh mục đầy đủ</label>
            <input class="form-control" name="txtFullName" placeholder="Nhập tên đầy đủ" value="{!! $item->full_name!!}"/>
        </div>
        <button type="submit" class="btn btn-default">Lưu</button>
        <button type="reset" class="btn btn-default">Hủy</button>
        {{csrf_field()}}
    </form>
@endsection

