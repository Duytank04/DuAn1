
<!-- Product tab Area Start -->
<section class="section ec-product-tab section-space-p" id="collection">
    <div class="container">
        <div class="row" id="fashion">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Our Top Collection</h2>
                    <h2 class="ec-title">Our Top Collection</h2>
                    <p class="sub-title">Browse The Collection of Top Products</p>
                </div>
            </div>

            <!-- Tab Start -->
            <div class="col-md-12 text-center">
                
            </div>
            <!-- Tab End -->
        </div>
        <div class="row">
            <div class="col">
                <div class="tab-content">
                    <!-- 1st Product tab start -->
                    <div class="tab-pane fade show active" id="tab-pro-for-all">
                        <div class="row">
                            <!-- Product Content -->
                            <?php
                            $i = 0;
                            foreach ($dssp as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                $hinh = $img_path . $img;
                                $hinh1 = $img_path . $img1;
                                if (($i == 3) || ($i == 8) || ($i == 12)) {
                                    $mr = "";
                                } else {
                                    $mr = "mr";
                                }
                                echo '
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content ' . $mr . '"
                                    data-animation="fadeIn">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="' . $linksp . '" class="image">
                                                    <img class="main-image" src="' . $hinh . '" alt="Product" />
                                                    <img class="hover-image" src="' . $hinh1 . '" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                               
                                                    <form action="index.php?act=addtocart" method="post">
                                                    <input type="hidden" name="id" value="' . $id . '">
                                                    <input type="hidden" name="name" value="' . $name . '">
                                                    <input type="hidden" name="img" value="' . $img . '">
                                                    <input type="hidden" name="price" value="' . $price . '">
                                               
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="' . $linksp . '">' . $name . '</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                               
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$27.00</span>
                                                <span class="new-price">' . $price . '</span>
                                            </span>
                                            
                                            <input style="text-align:center;border-radius:5px;padding: auto;" type="submit" name="addtocart" value="Add to cart">
                                                </form>
                                           
                                        </div>
                                    </div>
                                </div>

            
            ';
                                $i += 1;
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- ec Product tab Area End -->

<!-- ec Banner Section Start -->

<!-- ec Banner Section End -->

<!--  Category Section Start -->
