    <div class="row mb ">
        <div class="boxtrai mr">
        <form action="index.php?act=billcomfirm" method="post">
        <div class="row mb">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="row boxcontent billform">
                <table>
                        <?php 
                            if(isset($_SESSION['user'])){
                                $user=$_SESSION['user']['user'];
                                $address=$_SESSION['user']['address'];
                                $email=$_SESSION['user']['email'];
                                $tel=$_SESSION['user']['tel'];
                            }else{
                                $name="";
                                $address="";
                                $email="";
                                $tel="";
                            }
                        ?>
                    <tr>
                        <td>Người Đặt Hàng</td>
                        <td><input type="text" name="user" value="<?=$user?>"></td>
                    </tr>
                    <tr>
                        <td>Địa Chỉ</td>
                        <td><input type="text" name="address" value="<?=$address?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?=$email?>"></td>
                    </tr>
                    <tr>
                        <td>Số Điện Thoại</td>
                        <td><input type="text" name="tel" value="<?=$tel?>"></td>
                    </tr>
                    
                </table>  
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
            <div class="row boxcontentbill">
                <table>
                    <tr>
                        <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                        <td><input type="radio" name="pttt">Chuyển tiền ngân hàng</td>
                        <td><input type="radio" name="pttt">Thanh toán online</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row mb">
            <div class="boxtitle">Thông Tin Giỏ Hàng</div>
            <div class="row mb frmdsloai">
                <table>
                    
                    <?php 
                        viewcart(0);
                    ?>
                    
                    </tr>
                </table>
            </div>
            <div class="row bills">
                <input type="submit" value="Đồng Ý Đặt Hàng" name="dongydathang">
            </div>
        </div>
        

        </form>
        </div>
            <div class="boxphai ">
                <?php include "view/boxright.php"; ?>
        </div>
    </div>
    <style>
        .frmdsloai table th{
            padding: 10px 20px;
            border: 1px #ccc solid;
        }
    </style>