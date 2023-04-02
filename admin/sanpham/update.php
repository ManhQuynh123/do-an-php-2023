<?php
    if(is_array($dm)){
        extract($dm);
    }

?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HOÁ</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsanpham" method="post" enctype="multipart/from-data">
            <div class="row mb10">
                Mã Sản Phẩm <br>
                <input type="text" name="masanpham" disabled>
            </div>
            <div class="row mb10">
                Tên Sản Phẩm <br>
                <input type="text" name="tensanpham">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="giasanpham">
            </div>
            <div class="row mb10">
                Hình <br>
                <input type="file" name="hinh">
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listsanpham"><input type="button" value="Danh Sách"></a>
            </div>
            <?php
                if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>  
</div>