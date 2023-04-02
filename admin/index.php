<?php
    include "../model/pdo.php";
    include "header.php";
    // controller
    //isset là kiểm tra coi là nó có tồn tại hay là không
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
                //Kiểm tra xem người dùng có nút THÊM hay là chưa
                include "danhmuc/add.php";
                break;
                case 'listdanhmuc';
                    
                    $listdanhmuc=loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;
                case 'xoadanhmuc';
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sql="delete from danhmuc where id =".$GET['id'];
                        pdo_execute($sql);
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;
                case 'suasanpham':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $dm=loadone_danhmuc($_GET['id']);
                    }
                    
                    include "sanpham/update.php";
                    break;
                case 'updatedanhmuc':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $tenloai=$_POST['tenloai'];
                        $id=$_POST['id'];
                        update_danhmuc($id,$tenloai);
                        $thongbao="Cập nhật thành công";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "sanpham/list.php";
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