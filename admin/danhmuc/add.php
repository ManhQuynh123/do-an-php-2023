
<div class="row">
    <div class="row frmtitle">
        <h1>Thêm Mới Loại Hàng Hóa</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=adddanhmuc" method="post">
            <div class="row mb10">
                Mã Loại <br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                Tên Loại <br>
                <input type="text" name="tenloai">
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm Loại">
                <input type="reset" value="Nhập Loại">
                <a href="index.php?act=listdanhmuc"><input type="button" value="Danh Sách"></a>
            </div>
            <?php
                if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>  