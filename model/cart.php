    <?php
        function viewcart($del){
            global $img_path;
            $tong=0;
                $i=0;
                if($del==1){
                    $xoasanpham_th='<th>Thao Tác</th>';
                    $xoasanpham_td2='<td></td>';
                }else{
                    $xoasanpham_th='';
                    $xoasanpham_td2='';
                }
                echo '<tr>
                <th>Hình</th>
                <th>Sản Phẩm</th>
                <th>Đơn Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                '.$xoasanpham_th.'
            </tr>';
                foreach($_SESSION['mycart'] as $cart){
                    $hinh=$img_path.$cart[2];
                    $ttien=$cart[3]*$cart[4];
                    $tong+=$ttien;
                    if($del==1){
                        $xoasanpham_td='<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="xóa"></a></td>';
                        
                    }else{
                        $xoasanpham_td='';
                        
                    }
                    //$xoasanpham="index.php?act=delcart&idcart='.$i.'";
                    
                    echo '
                        <tr>
                            <td><img src="'.$hinh.'" alt="" height="80px"></td>
                            <td>'.$cart[1].'</td>
                            <td>'.$cart[3].'</td>
                            <td>'.$cart[4].'</td>
                            <td>'.$ttien.'</td>
                            '.$xoasanpham_td.'
                </tr>';
                
                $i+=1;
                }
                echo '<tr>
                        <td colspan="4">Tổng Đơn Hàng</td>
                        
                        <td>'.$tong.'</td>
                        '.$xoasanpham_td2.'
            </tr>';
        }
    ?>