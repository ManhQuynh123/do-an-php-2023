    <?php
        if(is_array($sanpham)){
            extract($sanpham);
        }
        $hinhpath="../upload/".$img;
            if(is_file($hinhpath)){
                $hinh="<img src='".$hinhpath."' height='80'>";
            }else{
                $hinh="no photo";
            }
    ?>
    <div class="row">
        <div class="row frmtitle">
            <h1>CẬP NHẬT LOẠI HÀNG</h1>
        </div>
        <div class="row frmcontent">
        <form action="index.php?act=updatesanpham" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                <select name="iddanhmuc">
                        <option value="0" selected>Tất Cả</option>
                        <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    if($iddanhmuc==$id) $s="selected"; else $s="";
                                    echo '<option value='.$id.' '.$s.' >'.$name.'</option>';
                                }
                            ?>
                    </select>
                </div>
                <div class="row mb10">
                    Tên Sản Phẩm <br>
                    <input type="text" name="tensp" value="<?=$name?>">
                </div>
                <div class="row mb10">
                    Giá <br>
                    <input type="text" name="giasp" value="<?=$gia?>">
                </div>
                <div class="row mb10">
                    Hình Ảnh <br>
                    <input type="file" name="hinh">
                    <?-$hinh?>
                </div>
                <div class="row mb10">
                    Mô Tả <br>
                    <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="capnhat" value="Cập Nhật">
                    <input type="reset" value="Nhập Lại">
                    <a href="index.php?act=listsanpham"><input type="button" value="Danh Sách"></a>
                </div>
                <?php
                    if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
                ?>
            </form>
        </div>
    </div>  