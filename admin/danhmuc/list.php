<div class="row">
        <div class="row frmtitle">
            <H1>DANH SÁCH KHÁCH HÀNG</H1>
        </div>
        <div class="row frmcontent">
            <div class="row mb10 frmsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadanhmuc="index.php?act=suadanhmuc&id=".$id;
                            $xoadanhmuc="index.php?act=xoadanhmuc&id=".$id;
                            echo'
                            <tr>
                                <td><input type="checkbox" name=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td><a href="'.$suadanhmuc.'"><input type="button" value="Sửa"><a href="'.$xoadanhmuc.'"><input type="button" value="Xoá"></td>
                            </tr> ';
                            }
                    ?>
                       
                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn Tất Cả">
                <input type="button" value="Bỏ Chọn Tất Cả">
                <input type="button" value="Xoá Tất Cả Các Mục Đã Chọn">
                <a href="index.php?act=adddanhmuc"><input type="button" value="Nhập Thêm"></a>
            </div>
        </div>
    </div>
    <style>
        .frmsloai table{
    width: 100%;
    border-collapse: collapse;
}
.frmsloai table th:nth-child(1){
    width: 10%;
    padding: 20px;
    background-color: #CCC;
}
.frmsloai table th:nth-child(2){
    width: 30%;
    background-color: #CCC;
}
.frmsloai table th:nth-child(3){
    width: 40%;
    background-color: #CCC;
}
.frmsloai table th:nth-child(4){
    width: 20%;
    background-color: #CCC;
}
.frmsloai table td{
    padding: 10px 20px;
    border: 1px #CCC solid;
}
    </style>