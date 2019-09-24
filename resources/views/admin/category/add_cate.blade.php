
<html>
<form action="" method="post">
    <table border="1">
        <tr>
            <td>Category name</td>
            <td><input type="text"name="name"></td>
        </tr>
        <tr>
            <td>Order_display </td>
            <td><input type="text"name="order_display "></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit"name="save">Save</button>
                <button type="submit"name="cancel">Cancel</button></td>
        </tr>

    </table>
    {{csrf_field()}}
</form>
</html>
