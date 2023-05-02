    <?php
        include "../model/pdo.php";
        include "../model/danhmuc.php";
        include "../model/sanpham.php";
        include "../model/taikhoan.php";
        include "header.php";
        // controller

        if(isset($_GET['act'])){
            $act=$_GET['act'];
            switch ($act){
                case 'adddanhmuc':
                    // kiểm tra có nút thêm không
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $tenloai=$_POST['tenloai'];
                        insert_danhmuc($tenloai);
                        $thongbao="Thêm Thành Công";
                    }
                    include "danhmuc/add.php";
                break;


                case 'listdanhmuc':
                        $listdanhmuc=loadAll_danhmuc();
                        include "danhmuc/list.php";
                break;


                case'xoadanhmuc':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        # code...
                        delete_danhmuc($_GET['id']);
                    }
                        $listdanhmuc=loadAll_danhmuc();
                        include "danhmuc/list.php";
                break;


                case'suadanhmuc':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        $dm=loadOne_danhmuc($_GET['id']);
                    }
                    include "danhmuc/update.php";
                break;

                case'updatedanhmuc':

                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $tenloai=$_POST['tenloai'];
                        $id=$_POST['id'];
                        update_danhmuc($id,$tenloai);
                    }
                    $listdanhmuc=loadAll_danhmuc();
                    include "danhmuc/list.php";
                break;

                /*Đây là phần sản phẩm*/

                case 'addsanpham':
                    // kiểm tra bên người dùng có nút thêm hay không
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $iddanhmuc=$_POST['iddanhmuc'];
                        $tensp=$_POST['tensp'];
                        $giasp=$_POST['giasp'];
                        $mota=$_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                            // echo "". htmlspecialchars(basename($_FILES["hinh"]["name"])). "hãy upload lại.";
                        }else{
                            // echo "Không có ảnh đã thêm vào";
                        }
                        insert_sanpham($tensp, $giasp, $hinh, $mota,$iddanhmuc);
                        $thongbao="Thêm Thành Công";
                    }
                    $listdanhmuc=loadAll_danhmuc();
                    // var_dump($listdanhmuc);
                    include "sanpham/add.php";
                break;

                case 'listsanpham':
                        if(isset($_POST['listok'])&&($_POST['listok'])){
                            $kyw=$_POST['kyw'];
                            $iddanhmuc=$_POST['iddanhmuc'];
                        }else{
                            $kyw='';
                            $iddanhmuc=0;
                        }
                        $listsanpham=loadAll_sanpham($kyw,$iddanhmuc);
                        $listdanhmuc=loadAll_danhmuc();
                        include "sanpham/list.php";
                break;

                case'xoasanpham':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        # code...
                        delete_sanpham($_GET['id']);
                    }
                        $listsanpham=loadAll_sanpham_home("",0);
                        include "sanpham/list.php";
                break;

                case'suasanpham':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        $sanpham=loadOne_sanpham($_GET['id']);
                    }
                    $listdanhmuc=loadAll_danhmuc();
                    include "sanpham/update.php";
                break;

                case'updatesanpham':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $iddanhmuc=$_POST['iddanhmuc'];
                        $tensp=$_POST['tensp'];
                        $giasp=$_POST['giasp'];
                        $hinh=$_FILES['hinh']['name'];
                        $mota=$_POST['mota'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                            // echo "". htmlspecialchars(basename($_FILES["hinh"]["name"])). "hãy upload lại.";
                        }else{
                            // echo "Không có ảnh";
                        }
                        update_sanpham($id,$iddanhmuc,$tensp,$giasp,$hinh,$mota);
                        $thongbao="Cập Nhật Thành Công";
                    }
                    $listdanhmuc=loadAll_danhmuc();
                    $listsanpham=loadAll_sanpham_home("",0);
                    include "sanpham/list.php";
                    break;

                case'dskhachhang':
                    $listtaikhoan=loadAll_taikhoan();
                    include "taikhoan/list.php";
                break;
                
                case'xoataikhoan':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        # code...
                        delete_taikhoan($_GET['id']);
                    }
                    $listtaikhoan=loadAll_taikhoan();
                    include "taikhoan/list.php";
                break;
                case'suataikhoan':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        $taikhoan=loadOne_taikhoan($_GET['id']);
                    }
                    $listtaikhoan=loadAll_taikhoan();
                    include "sanpham/update.php";
                break;
                default:
                include "home.php";
                break;
        }
        }else{
            include "home.php";
        }

        //include "home.php";
        include "footer.php";
    ?>