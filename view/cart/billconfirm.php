<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v36/ekka-html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 08:34:44 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Ekka - Ecommerce HTML Template + Admin Dashboard.</title>
    <meta name="keywords"
        content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="assets/images/favicon/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="assets/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">
</head>

<body class="checkout_page">








    <!-- Ec checkout page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-checkout-leftside col-lg-8 col-md-12 ">
                    <!-- checkout content Start -->
                    <div class="ec-checkout-content">
                        <div class="ec-checkout-inner">
                        <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                                <div class="ec-checkout-block ec-check-bill">
                                    <h3 class="ec-checkout-title">Thank You For Ordering</h3>
                                </div>
                            </div>
                            <div class="ec-checkout-wrap margin-bottom-30">
                            
                                <?php
                             if(isset($bill)&&(is_array($bill))){
                             extract($bill);
                              }
                              ?>
                                <div class="ec-checkout-block ec-check-login">
                                    <h3 class="ec-checkout-title">Order Information</h3>
                                    <div class="ec-check-login-form">
                                        <span class="ec-check-login-wrap">
                                            <label>Order Person:</label> <label for=""><b style="color:red;"><?=$bill['bill_name'];?></b></label><br>
                                        </span>
                                        <span class="ec-check-login-wrap">
                                            <label>Address:</label> <label for=""><b style="color:red;"><?=$bill['bill_address'];?></b></label><br>
                                        </span>
                                        <span class="ec-check-login-wrap">
                                            <label>Email Address:</label> <label for=""><b style="color:red;"><?=$bill['bill_email'];?></b></label><br>
                                          
                                        </span>
                                        <span class="ec-check-login-wrap">
                                            <label>Phone Number:</label> <label for=""><b style="color:red;"><?=$bill['bill_tel'];?></b></label>
                                     
                                        </span>

                                        </span>
                                        </span>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                    <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                        <div class="ec-checkout-block ec-check-bill">
                            <h3 class="ec-checkout-title">Order Details</h3>
                            <div class="ec-bl-block-content">
                                <div class="ec-check-bill-form">
                                    <span class="ec-bill-wrap ec-bill-half">
                                        <label>Order Number</label> <label for=""><b style="color:red;">YY-<?=$bill['id'];?></b></label><br>
                                       
                                    </span>
                                    <span class="ec-bill-wrap ec-bill-half">
                                        <label>Order Date</label> <label for=""><b style="color:red;"><?=$bill['ngaydathang'];?></b></label><br>
                                    </span>
                                    <span class="ec-bill-wrap">
                                        <label>Total</label> <label for=""><b style="color:red;"><?=$bill['total'];?></b></label><br>
                                      
                                    </span>
                                    <span class="ec-cart-wrap">
                                        <label>&nbsp &nbsp Payment Method</label>&nbsp <input type="radio" checked> <label name="pttt" value="1">COD</label>
                                       
                                       

                                    </span>

                                </div>

                            </div>
                        </div>

                    </div>
                    <section class="ec-page-content section-space-p">
                        <div class="container">
                            <div class="row">
                                <div class="ec-cart-leftside col-lg-8 col-md-12 ">
                                    <!-- cart content Start -->
                                    <div class="ec-cart-content">
                                        <div class="ec-cart-inner">
                                            <div class="row">

                                                <div class="table-content cart-table-content">
                                                    <table>
                                                        <thead>
                                                            <tr>

                                                                <th>Product</th>
                                                                <th>Price</th>
                                                                
                                                                <th>Total</th>
                                                                <th>Total Price</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                        bill_chi_tiet($billct);
                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--cart content End -->
                </div>
                <!-- Sidebar Area Start -->
            </div>
        </div>
    </section>
</body>

</html><script> 

    Swal.fire(
  'Successful!',
  'Successful order!',
  'success'
)
    

  </script>