<!-- Sart Single product -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-pro-rightside ec-common-rightside col-lg-9 order-lg-last col-md-12 order-md-first">


                <?php
                extract($onesp);
                ?>
                <?php

                $hinh = $img_path . $img;
                $hinh1 = $img_path . $img1;
                $hinh2 = $img_path . $img2;

                echo '

                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <div class="single-pro-img">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="' . $hinh . '"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="' . $hinh1 . '"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="' . $hinh2 . '"
                                                    alt="">
                                            </div>
                                           
                                        </div>
                                        <div class="single-nav-thumb">
                                            <div class="single-slide">
                                                <img class="img-responsive" src="' . $hinh . '"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="' . $hinh1 . '"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="' . $hinh2 . '"
                                                    alt="">
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="single-pro-desc">
                                    <div class="single-pro-content">
                                        <h5 class="ec-single-title">' . $name . '</h5>
                                        <div class="ec-single-rating-wrap">
                                            <div class="ec-single-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star-o"></i>
                                            </div>
                                            
                                        </div>
                                        <div class="ec-single-desc">' . $mota . '</div>

                                        
                                        <div class="ec-single-price-stoke">
                                            <div class="ec-single-price">
                                                <span class="ec-single-ps-title"><b>Price</b></span>
                                                <span class="new-price">' . $price . '$</span>
                                            </div>
                                            
                                        </div>
                                        <form action="index.php?act=addtocart" method="post">
                                        <input type="hidden" name="id" value="' . $id . '">
                                        <input type="hidden" name="name" value="' . $name . '">
                                        <input type="hidden" name="img" value="' . $img . '">
                                        <input type="hidden" name="price" value="' . $price . '">
                                        
                                        <div class="ec-single-qty">
                                        <div class="ec-single-cart ">
                                            <button class="btn btn-primary" name="addtocart" >Add To Cart</button>
                                        </div>
    
    
                                        </div>
                                                </form>
                                        
                                       
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single product content End -->
                    <div class="ec-single-pro-tab">
                    <div class="ec-single-pro-tab-wrapper">
                        <div class="ec-single-pro-tab-nav">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-details"
                                        role="tablist">Detail</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content  ec-single-pro-tab-content">
                            <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                <div class="ec-single-pro-tab-desc">
                                    <p>' . $mota . '</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                    
                    
                    
 
                            '; ?>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $("#binhluan").load("view/binhluan/binhluanform.php", { idpro: <?= $id ?> });
                    });
                </script>
                <div class="row" id="binhluan"></div>

                <!-- product details description area end -->
                <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanform.php",
                 {idpro: });
            });
        </script>
        <div class="row" id="binhluan">

            </div> -->
            </div>
        </div>
    </div>
    <!-- product details description area end -->
    </div>
    </div>
    </div>
</section>
<!-- End Single product -->