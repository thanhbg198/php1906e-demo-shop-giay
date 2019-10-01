@extends('admin.layout.master')
@section('content')

    <form action=""method="post">
        <table border="1">
            <tr>
                <td>Danh mục cha</td>
                <td><input type="text"name="parent_id"></td>
            </tr>
            <tr>
                <td>Tên danh mục</td>
                <td><input type="text"name="name"></td>
            </tr>
            <tr>
                <td>Tên danh mục đầy đủ </td>
                <td><input type="text"name="full_name"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit"name="save">Save</button>
                    <button type="submit"name="cancel">Cancel</button></td>
            </tr>
            {{csrf_field()}}
        </table>
    </form>
@endsection
