@extends('admin.layout.master')
@section('content')

    <form action="">
        <table border="1">
            <thead>
            <tr>
                <td>STT</td>
                <td>Tên danh muc</td>
                <td>Tên danh mục đầy đủ</td>
                <td>Danh mục cha</td>
                <td colspan="2"> Sửa</td>
                <td>Xóa</td>
            </tr>
            </thead>
            <tbody>
            <?php $stt=1;?>
            @foreach($cates as $cate)
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{$cate->name}}</td>
                    <td>{{$cate->slug_name}}</td>
                    <td>{{$cate->parent_id}}</td>
                    <td class="center"><a href="admin/danh-muc/sua/{{$cate->id}}">Edit</a></td>
                    <td colspan="2" class="center"><a href="admin/danh-muc/xoa/{{$cate->id}}" class='btn-del'> Delete</a></td>

                </tr>
            @endforeach
            <?php $stt++;?>
            </tbody>
        </table>
    </form>
@endsection
