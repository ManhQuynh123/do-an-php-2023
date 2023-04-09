    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row mb">
                <div class="boxtitle">Giỏ Hàng</div>
                <div class="row mb10 frmdsloai">
                    <table>
                        <?php 
                        viewcart(1);
                        // $tong=0;
                        // $i=0;
                        //     foreach($_SESSION['mycart'] as $cart){
                        //         $hinh=$img_path.$cart[2];
                        //         $ttien=$cart[3]*$cart[4];
                        //         $tong+=$ttien;
                        //         $xoasanpham='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="xóa"></a>';
                        //         //$xoasanpham="index.php?act=delcart&idcart='.$i.'";    
                        //         echo '<tr>
                        //                 <td><img src="'.$hinh.'" alt="" height="80px"></td>
                        //                 <td>'.$cart[1].'</td>
                        //                 <td>'.$cart[3].'</td>
                        //                 <td>'.$cart[4].'</td>
                        //                 <td>'.$ttien.'</td>
                        //                 <td>'.$xoasanpham.'</td>
                        //     </tr>';
                        //     $i+=1;
                        //     }
                        //     echo '<tr>
                        //             <td colspan="4">Tong Don Hang</td>      
                        //             <td>'.$tong.'</td>
                        //             <td></td>
                        // </tr>';
                        ?>
                    </table>
                </div>
            </div>
            <div class="row mb10 bill">
            <a href="index.php?act=bill"><input type="button" value="Tiếp Tục Đặt Hàng"></a><a href="index.php?act=delcart"><input type="button" value="Xóa Giỏ Hàng"></a>
            </div>
        </div>
        <div class="boxphai">
            <?php include "view/boxright.php";?>
        </div>
    </div>