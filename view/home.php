
    <!-- Main Slider Start -->
    <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex ec-slide-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title">New Fashion Collection</h1>
                                    <h2 class="ec-slide-stitle">Sale Offer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    <a href="#fashion" class="btn btn-lg btn-secondary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="ec-slide-item swiper-slide d-flex ec-slide-2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title">New Fashion Collection</h1>
                                    <h2 class="ec-slide-stitle">Sale Offer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    <a href="#fashion" class="btn btn-lg btn-secondary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next" ></div>
                <div class="swiper-button-prev" ></div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p" id="collection">
        <div class="container">
            <div class="row" id="fashion">
                <div class="col-md-12 text-center">
                    <div class="section-title" >
                        <h2 class="ec-bg-title" >Our Top Collection</h2>
                        <h2 class="ec-title">Our Top Collection</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center" >
                    <ul class="ec-pro-tab-nav nav justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-pro-for-all">New Products</a></li>
                    </ul>
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
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;
                $hinh1 = $img_path . $img1;
                if (($i == 3) || ($i == 8) || ($i ==12)) {
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
                                                <a href="'.$linksp.'" class="image">
                                                    <img class="main-image" src="'.$hinh.'" alt="Product" />
                                                    <img class="hover-image" src="'.$hinh1.'" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                               
                                                    <form action="index.php?act=addtocart" method="post">
                                                    <input type="hidden" name="id" value="'.$id.'">
                                                    <input type="hidden" name="name" value="'.$name.'">
                                                    <input type="hidden" name="img" value="'.$img.'">
                                                    <input type="hidden" name="price" value="'.$price.'">
                                               
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="'.$linksp.'">'.$name.'</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>             
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$27.00</span>
                                                <span class="new-price">'.$price.'</span>
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
    <section class="ec-banner section section-space-p">
        <h2 class="d-none">Banner</h2>
        <div class="container">
            <!-- ec Banners Start -->
            <div class="ec-banner-inner">
                <!--ec Banner Start -->
                <div class="ec-banner-block ec-banner-block-2">
                    <div class="row">
                        <div class="banner-block col-lg-6 col-md-12 margin-b-30" data-animation="slideInRight">
                            <div class="bnr-overlay">
                                <img src="assets/images/banner/banner2.webp" alt="" />
                               
                                <div class="banner-content">
                                    <span class="ec-banner-btn"><a href="index.php?act=allsp">Order Now</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="banner-block col-lg-6 col-md-12" data-animation="slideInLeft">
                            <div class="bnr-overlay">
                            <img src="assets/images/banner/banner2.webp" alt="" />
                               
                               <div class="banner-content">
                                   <span class="ec-banner-btn"><a href="index.php?act=allsp">Order Now</a></span>
                               </div>
                            </div>
                        </div>
                    </div>
                    <!-- ec Banner End -->
                </div>
                <!-- ec Banners End -->
            </div>
        </div>
    </section>
    <!-- ec Banner Section End -->

    <!--  Category Section Start -->
    <section class="section ec-category-section section-space-p" id="categories">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Our Top Collection</h2>
                        <h2 class="ec-title">Top Categories</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!--Category Nav Start -->
                <div class="col-lg-3">
                    <ul class="ec-cat-tab-nav nav">
                        <li class="cat-item"><a class="cat-link active" data-bs-toggle="tab" href="#tab-cat-1">
                                <div class="cat-icons"><img class="cat-icon" src="assets/images/icons/cat_1.png"
                                        alt="cat-icon"><img class="cat-icon-hover" src="assets/images/icons/cat_1_1.png"
                                        alt="cat-icon"></div>
                                <div class="cat-desc"><span>Clothes</span></div>
                            </a></li>
                        <li class="cat-item"><a class="cat-link" data-bs-toggle="tab" href="#tab-cat-3">
                                <div class="cat-icons"><img class="cat-icon" src="assets/images/icons/cat_3.png"
                                        alt="cat-icon"><img class="cat-icon-hover" src="assets/images/icons/cat_3_1.png"
                                        alt="cat-icon"></div>
                                <div class="cat-desc"><span>Handbag</span></div>
                            </a></li>
                        <li class="cat-item"><a class="cat-link">
                                <div class="cat-icons"></div>
                                <div class="cat-desc"><span>...</span></div>
                            </a></li>
                        
                            <li class="cat-item"><a class="cat-link" >
                                <div class="cat-icons"></div>
                                <div class="cat-desc"><span>...</span></div>
                            </a></li>
                    </ul>

                </div>
                <!-- Category Nav End -->
                <!--Category Tab Start -->
                <div class="col-lg-9">
                    <div class="tab-content">
                        <!-- 1st Category tab end -->
                        <div class="tab-pane fade show active" id="tab-cat-1">
                            <div class="row">
                                <img src="assets/images/cat-banner/1.jpg" alt="" />
                            </div>
                            <span class="panel-overlay">
                            <?php
                                        foreach ($dsdm as $dm) {
                                            extract($dm);
                                            $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                            echo '
                                            <a href="' . $linkdm . '" class="btn btn-primary">View All</a>';
                                        }
                                        ?>
                                
                            </span>
                        </div>
                        <!-- 1st Category tab end -->
                        <!-- <div class="tab-pane fade" id="tab-cat-2">
                            <div class="row">
                                <img src="assets/images/cat-banner/2.jpg" alt="" />
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                        </div> -->
                        <!-- 2nd Category tab end -->
                        <!-- 3rd Category tab start -->
                        <div class="tab-pane fade" id="tab-cat-3">
                            <div class="row">
                                <img src="assets/images/cat-banner/3.jpg" alt="" />
                            </div>
                            <span class="panel-overlay">
                            <?php
                                        foreach ($dsdm as $dm) {
                                            extract($dm);
                                            $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                            echo '
                                            <a href="' . $linkdm . '" class="btn btn-primary">View All</a>';
                                        }
                                        ?>
                            </span>
                        </div>
                        <!-- 3rd Category tab end -->
                        <!-- 4th Category tab start -->
                        <!-- <div class="tab-pane fade" id="tab-cat-4">
                            <div class="row">
                                <img src="assets/images/cat-banner/4.jpg" alt="" />
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                        </div> -->
                        <!-- 4th Category tab end -->
                    </div>
                    <!-- Category Tab End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->


  