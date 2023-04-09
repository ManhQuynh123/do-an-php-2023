    <div class="row mb ">
                <div class="boxtrai mr">
                    <div class="row ">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="images/1.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="images/2.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="images/3.jpg" style="width:100%">
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                        <div class="mb10"></div>
                    </div>
                    
                    <div class="row"> 
                        <?php
                            $i=0;
                            foreach($spnew as $sp){
                                extract($sp);
                                $hinh=$img_path.$img;
                                if(($i==2)||($i==5)||($i==8)){
                                    $mr="";
                                }else{
                                    $mr="mr";
                                }
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                echo '<div class="boxsp '.$mr.'">
                                            <div class="row img"><img src="'.$hinh.'" alt=""></div>
                                            <p>$'.$gia.'</p>
                                            <a href="'.$linksp.'">'.$name.'</a>
                                            <div class="row btnaddtocart">
                                                <form action="index.php?act=viewcart" method="post">
                                                    <input type="hidden" name="id" value="'.$id.'">
                                                    <input type="hidden" name="name" value="'.$name.'">
                                                    <input type="hidden" name="img" value="'.$img.'">
                                                    <input type="hidden" name="gia" value="'.$gia.'"></br>
                                                    <input type="submit" value="Mua Sản Phẩm" name="viewcart">
                                                </form>
                                            </div>
                                        </div>';
                                        $i+-1;
                            }
                        ?>
                        
                    </div>
                </div>
                <div class="boxphai ">
                    <?php include "boxright.php"; ?>
                </div>
            </div> 
        
            
        