    <?php
        session_start();
        include "model/pdo.php";
        include "model/sanpham.php";
        include "model/danhmuc.php";
        include "model/taikhoan.php";
        include "model/cart.php";
        include "view/header.php";
        include "global.php";
        if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
        $spnew=loadAll_sanpham_home();
        $dsdm=loadAll_danhmuc();
        $dssp=loadAll_sanpham();
            if((isset($_GET['act']))&&($_GET['act']!="")){
                $act=$_GET['act'];
                switch ($act) {
                    case 'sanpham':
                        if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                            $kyw=$_POST['kyw'];
                        }else{
                            $kyw="";
                        }
                        if(isset($_GET['iddanhmuc'])&&($_GET['iddanhmuc']>0)){
                            $iddanhmuc=$_GET['iddanhmuc'];
                        }else{
                            $iddanhmuc=0;
                        }
                        $dssp=loadAll_sanpham($kyw,$iddanhmuc);
                        $tendm=load_ten_danhmuc($iddanhmuc);
                        include "view/sanpham.php";
                        break;
                    case 'sanphamct':
                        if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                            $id=$_GET['idsp'];
                            $onesp=loadOne_sanpham($id);
                            extract($onesp);
                            $sp_cung_loai=load_sanpham_cungloai($id,$iddanhmuc);
                            # code...
                            include "view/sanphamct.php";
                        }else{
                            include "view/home.php";
                        }
                        break;
                    case 'viewcart':
                        if(isset($_POST['viewcart'])&&($_POST['viewcart'])){
                            $id=$_POST['id'];
                            $name=$_POST['name'];
                            $img=$_POST['img'];
                            $gia=$_POST['gia'];
                            $soluong=1;
                            $ttien=$soluong * $gia;
                            $spadd=[$id,$name,$img,$gia,$soluong,$ttien];
                            array_push($_SESSION['mycart'],$spadd);
                        }
                        include "view/cart/viewcart.php";
                        //header('Location: index.php?act=viewcart');
                        break;
                    case 'delcart':
                        if(isset($_GET['idcart'])&&($_GET['idcart'])>=0){
                            array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                        
                        }else{
                            $_SESSION['mycart']=[];
                        }
                        header('Location: index.php?act=viewcart');
                        break;
                    case 'bill':
                        include "view/cart/bill.php";
                        break;
                    case 'billcomfirm':
                        include "view/cart/billcomfirm.php";
                        break;
    
        //////////////// TÀI KHOẢN ĐĂNG KÝ VÀ ĐĂNG NHẬP ???????????????????

                    case 'dangky':
                        # code...
                        if(isset($_POST['dangky'])&&($_POST['dangky'])){
                            $email=$_POST['email'];
                            $user=$_POST['user'];
                            $pass=$_POST['pass'];
                            insert_taikhoan($email,$user,$pass);
                            $thongbao="Đã Đăng Ký Thành Công";
                        }
                        include "view/taikhoan/dangky.php";
                        break;
                    case 'dangnhap':
                        # code...
                        if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                            $user=$_POST['user'];
                            $pass=$_POST['pass'];
                            $check_user=check_user($user,$pass);
                            if (is_array($check_user)) {
                                # code...
                                $_SESSION['user']=$check_user;
                                //$thongbao="Bạn Đã Đăng Nhập Thành Công";
                                header('Location: index.php');
                            }else{
                                $thongbao="Tài Khoản Không Tồn Tại";
                            }
                        }
                        include "view/taikhoan/dangky.php";
                        break;
                    case 'edit_taikhoan':
                        # code...
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            $user=$_POST['user'];
                            $pass=$_POST['pass'];
                            $email=$_POST['email'];
                            $address=$_POST['address'];
                            $tel=$_POST['tel'];
                            $id=$_POST['id'];
                            update_taikhoan($id,$user,$pass,$email,$address,$tel);
                            $_SESSION['user']=check_user($user,$pass);
                            header('Location: index.php?act=edit_taikhoan');
                        }
                        include "view/taikhoan/edit_taikhoan.php";
                        break;
                    case 'quenmatkhau':
                        # code...
                        if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                            $email=$_POST['email'];
                            $check_email=check_email($email);
                            if(is_array($check_email)){
                                $thongbao="Mật Khẩu Của Bạn Là:".$check_email['pass'];
                            }else{
                                $thongbao="Email này không tồn tại";
                            }
                        }
                        include "view/taikhoan/quenmatkhau.php";
                        break;
                    
                    case 'thoat':
                        session_unset();
                        header('Location: index.php');
                        include "view/taikhoan/thoat.php";
                        break;
                        default:
                        # code...
                        include "view/home.php";
                        break;
                }
            }else{
                include "view/home.php";
            }
        include "view/footer.php";
    ?>