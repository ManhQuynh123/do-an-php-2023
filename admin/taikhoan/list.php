    <div class="row">
        <div class="row frmtitle">
            <h1>DANH SÁCH TÀI KHOẢN</h1>
        </div>
        <div class="row frmcontent">
            <div class="row mb10 frmdsloai">
                <table>
                    
                <tr>
                    <th></th>
                    <th>Mã Tài Khoản</th>
                    <th>Tên Đăng Nhập</th>
                    <th>Mật Khẩu</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>SĐT</th>
                    <th>Vai Trò</th>
                    <th></th>
                </tr>
                <?php
                foreach($listtaikhoan as $taikhoan){
                    extract($taikhoan);
                    $xoataikhoan = "index.php?act=xoataikhoan&id=".$id;
                    echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$pass.'</td>
                    <td>'.$email.'</td>
                    <td>'.$address.'</td>
                    <td>'.$tel.'</td>
                    <td>'.$role.'</td>
                    <td><a href="'.$xoataikhoan.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
                }
                ?>

                </table>
            </div>
        </div>
    </div>
