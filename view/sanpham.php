    <div class="row mb ">
        <div class="boxtrai mr">
        <div class="row mb">
        
            <div class="boxtitle">
                <div class="h1"><h1>Sản Phẩm :</h1> </div><strong><?=$tendm?></strong>
            </div>
            <div class="row boxcontent">
            <?php
            $i=0;
            foreach($dssp as $sp){
                extract($sp);
                $hinh=$img_path.$img;
                if(($i==2)||($i==5)||($i==8)){
                    $mr="";
                }else{
                    $mr="mr";
                }
                $linksp="index.php?act=sanphamct&idsp=".$id;
                echo '<div class="boxsp '.$mr.'">
                            <div class="row img "><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                            <p>$'.$gia.'</p>
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>';
                        $i+-1;
                        //var_dump($listsanpham);
                        }
            ?>
            </div>
        </div>
        </div>
            <div class="boxphai ">
                <?php include "boxright.php"; ?>
        </div>
    </div>

    <style>
        .boxtitle{
            background-color: wheat;
        }
        .h1{
            color: blue;
        }
    </style>



            
        
            
        