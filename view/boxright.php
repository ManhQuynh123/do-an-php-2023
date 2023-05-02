    <div class="row mb">
            <div class="boxtitle">Tài Khoản</div>
            <div class="boxcontent formtaikhoan">
                <?php
                    if (isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                ?>
                    <div class="row mb10">
                        Xin Chào : <?=$user?>
                    </div>

                    <div class="row mb10">
                        <li>
                            <a href="index.php?act=quenmatkhau">Quên Mật Khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=edit_taikhoan">Cập Nhật Tài Khoản</a>
                        </li>
                        <?php if($role==1){?>
                        <li>
                            <a href="admin/index.php">Đăng Nhập Admin</a>
                        </li>
                        <?php }?>
                        <li>
                            <a href="index.php?act=thoat">Thoát</a>
                        </li>
                    </div>
                <?php
                    }else{
                ?>
                <form action="index.php?act=dangnhap" method="post">

                    <div class="row mb10">
                    Tên Đăng Nhập:<br>
                    <input type="text" name="user">
                    </div>

                    <div class="row mb10">
                    Mật Khẩu:<br>
                    <input type="password" name="pass">
                    </div>

                    <div class="row mb10">
                    <input type="checkbox" name="">
                    Ghi Nhớ Tài Khoản <br>
                    </div>

                    <div class="row mb10">
                    <input type="submit" value="Đăng Nhập" name="dangnhap">
                    </div>
                    
                </form>
                <li>
                    <a href="#">Quên Mật Khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=dangky">Đăng Ký</a>
                </li>
                <?php }?>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">Danh Mục</div>
            <div class="mb10 boxcontent2 menudoc">
                <ul>
                    <?php
                        foreach($dsdm as $dm){
                            extract($dm);
                            $linkdm="index.php?act=sanpham&iddanhmuc=".$id;
                            echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                        }
                    ?>
                </ul>
            </div>
            <div class="boxfooter searbox">
                <form action="index.php?act=sanpham" method="post">
                    <div class="mb10">Tìm Kiếm</div>
                    <input type="text" name="kyw">
                    <input type="submit" name="timkiem" value="Tìm kiếm">
                </form>
            </div>
        </div>
        <style>
        input[type="text"]{
            margin-bottom: 20px;
        }
    </style>
