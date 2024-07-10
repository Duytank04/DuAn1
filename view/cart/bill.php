

<section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-cart-leftside col-lg-8 col-md-12 ">
                    <!-- cart content Start -->
                    <div class="ec-cart-content">
                        <div class="ec-cart-inner">
                            <div class="row">
                            <form action="index.php?act=billcomfirm" method="post">
                                    <div class="table-content cart-table-content">
                                        <table>
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th >Quantity</th>
                                                    <th>Total</th>
                                                    <th style="text-align: center;" >Action</th>
                                                </tr>
                                            </thead>
<?php
viewcart();
?>

 </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
                <?php
                
                if(isset($_SESSION['user'])){
                    $user=$_SESSION['user']['user'];
                    $address=$_SESSION['user']['address'];
                    $email=$_SESSION['user']['email'];
                    $tel=$_SESSION['user']['tel'];
                }else{
                    $user="";
                    $address="";
                    $email="";
                    $tel="";
                }
                
                
                ?>
                <!-- Sidebar Area Start -->
                <div class="ec-cart-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Summary</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <h4 class="ec-ship-title">Order Information</h4>
                                <div class="ec-cart-form">
                                    <p>Your Order Information</p>
                                        <span class="ec-cart-wrap">
                                            <label>Order Person</label>
                                            <input type="text" name="user"   value="<?=$user?>">
                                        </span>
                                        <span class="ec-cart-wrap">
                                            <label>Email Address</label>
                                            <input type="text" name="email"   value="<?=$email?>">
                                        </span>
                                        <span class="ec-cart-wrap">
                                                <label>Phone Number</label>
                                                <input type="text" name="tel"  value="<?= $tel ?>">
                                            </span>
                                        <span class="ec-cart-wrap">
                                            <label>Delivery Address</label>
                                            <input type="text" name="address"   value="<?=$address?>">
                                        </span>
                                       
                                        <span class="ec-cart-wrap">
                                       <label>Payment Method</label>
                                        
                                     
                                                <input type="radio"  checked>
                                                <label name="pttt" value="1">COD</label>
                                           
                                       </span>
                                        <!-- <span class="ec-cart-wrap">
                                            <label>State/Province</label>
                                            <span class="ec-cart-select-inner">
                                                <select name="ec_cart_state" id="ec-cart-select-state"
                                                    class="ec-cart-select">
                                                    <option selected="" disabled="">Please Select a region, state
                                                    </option>
                                                    <option value="1">Region/State 1</option>
                                                    <option value="2">Region/State 2</option>
                                                    <option value="3">Region/State 3</option>
                                                    <option value="4">Region/State 4</option>
                                                    <option value="5">Region/State 5</option>
                                                </select>
                                            </span>
                                        </span>
                                        <span class="ec-cart-wrap">
                                            <label>Zip/Postal Code</label>
                                            <input type="text" name="postalcode" placeholder="Zip/Postal Code">
                                        </span> -->
                                </div>
                            </div>
                            <div class="ec-sb-block-content">
                                <div class="ec-cart-summary-bottom">
                                    <div class="ec-cart-summary">
                                        <div>
                                            <span class="text-left">Sub-Total</span>
                                            <span class="text-right"><?php viewcart3();?></span>
                                        </div>
                                        <div>
                                            <span class="text-left">Delivery Charges</span>
                                            <span class="text-right">$5.00</span>
                                        </div>
                                        <!-- <div>
                                            <span class="text-left">Coupan Discount</span>
                                            <span class="text-right"><a class="ec-cart-coupan">Apply Coupan</a></span>
                                        </div>
                                        <div class="ec-cart-coupan-content">
                                            <form class="ec-cart-coupan-form" name="ec-cart-coupan-form" method="post"
                                                action="#">
                                                <input class="ec-coupan" type="text" required=""
                                                    placeholder="Enter Your Coupan Code" name="ec-coupan" value="">
                                                <button class="ec-coupan-btn button btn-primary" type="submit"
                                                    name="subscribe" value="">Apply</button>
                                            </form>
                                        </div> -->
                                        <div class="ec-cart-summary-total">
                                            <span class="text-left">Total Amount</span>
                                            <span class="text-right"><?php viewcart2();   ?></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                        <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ec-cart-update-bottom">
                                                
                                                <!-- <a href="index.php?act=billcomfirm"><input type="submit" name="dongydathang" class="btn btn-primary" ></a> -->
                                                <a href="index.php?act=billcomfirm"><input type="submit" value="Agree to Order"
                                                name="dongydathang"></a>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    