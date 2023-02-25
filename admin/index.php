<?php
    include "../model/pdo.php";
    include "header.php";
    // controller

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act){
            case 'adddanhmuc':
                if(isset($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    $sql="insert into danhmuc(name) values('$tenloai')";
                    pdo_execute($sql);
                    $thongbao="Thêm Thành Công";
                }
                //Kiểm tra xem người dùng có click vào nút add hay không
                include "danhmuc/add.php";
                break;
                case 'listdanhmuc';
                    include "danhmuc/list.php";
                    break;
                case 'addsanpham':
                    include "sanpham/add.php";
                    break;
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }

    include "home.php";
    include "footer.php";
?>