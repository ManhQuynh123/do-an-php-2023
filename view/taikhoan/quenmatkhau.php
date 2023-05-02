    <div class="row mb ">
        <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Quên Mật Khẩu</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=quenmatkhau" method="post">
                    <div class="row mb10">
                        Gmail
                        <input type="email" name="email">
                    </div>
                    
                    <div class="row mb10">
                        <input type="submit" value="Gửi" name="guiemail">
                        <input type="reset" value="Nhap lai">
                    </div>
                    
                </form>
                <h2 class="thongbao">
                <?php
                    if (isset($thongbao)&&($thongbao!="")) {
                        # code...
                        echo $thongbao;
                    }
                ?>
                </h2>
            </div>
        </div>
        </div>
            <div class="boxphai ">
                <?php include "view/boxright.php"; ?>
        </div>
    </div>


            
        
            
        