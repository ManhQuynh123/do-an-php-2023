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
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH</th>
                        <th>GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasanpham="index.php?act=suasanpham&id=".$id;
                            $xoasanpham="index.php?act=xoasanpham&id=".$id;
                            echo'
                            <tr>
                                <td><input type="checkbox" name=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$img.'</td>
                                <td>'.$price.'</td>
                                <td>'.$luotxem.'</td>
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
                <a href="index.php?act=addsanpham"><input type="button" value="Nhập Thêm"></a>
            </div>
        </div>
    </div>
