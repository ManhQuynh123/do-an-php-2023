<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
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
                case 'suadanhmuc':
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
                    include "danhmuc/list.php";
                    break;
            /*controller san pham */
            case 'addsanpham':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $filename=$_FILES['hinh']['name'];
                    $target_dir = "upload/";
                    $target_file = $target_dir . basename($_FILE["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
                        echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded. ";

                    }else{
                        echo "Sorry, there was an error uploading your life. ";
                    }
                    insert_sanpham($tenloai);
                    $thongbao="thêm thành công";
                }
                //Kiểm tra xem người dùng có nút THÊM hay là chưa
                include "sanpham/add.php";
                break;
                case 'listsanpham';
                    
                    $listsanpham=loadall_sanpham();
                    include "sanpham/list.php";
                    break;
                case 'xoasanpham';
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sql="delete from sanpham where id =".$GET['id'];
                        pdo_execute($sql);
                    }
                    $listsanpham=loadall_sanpham();
                    include "sanpham/list.php";
                    break;
                case 'suasanpham':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $dm=loadone_sanpham($_GET['id']);
                    }
                    
                    include "sanpham/update.php";
                    break;
                case 'updatesanpham':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $tenloai=$_POST['tenloai'];
                        $id=$_POST['id'];
                        update_sanpham($id,$tenloai);
                        $thongbao="Cập nhật thành công";
                    }
                    $listsanpham=loadall_sanpham();
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