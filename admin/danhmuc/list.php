    <div class="row">
        <div class="row frmtitle">
            <h1>DANH SÁCH DANH MỤC</h1>
        </div>
        <div class="row frmcontent">
            <div class="row mb10 frmdsloai">
                <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Tên Loại Danh Mục</th>
                    <th></th>
                </tr>

                <?php
                //Duyệt danh mục xoá và sửa 
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadanhmuc = "index.php?act=suadanhmuc&id=".$id;
                    $xoadanhmuc = "index.php?act=xoadanhmuc&id=".$id;
                    echo '<tr>
                    <td></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td><a href="'.$suadanhmuc.'"><input type="button" value="Sửa"></a> <a href="'.$xoadanhmuc.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
                }
                ?>
                
                </table>
            </div>
        </div>
    </div>
