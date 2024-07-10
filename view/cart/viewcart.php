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
                                                    <th >Total</th>
                                                    <th>Total Price</th>
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
                        <?php
                        if(($_SESSION[ 'mycart' ])!=[] ){
        if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
            ?>
                        <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ec-cart-update-bottom">
                                                <a href="index.php">Continue Shopping</a>
                                                <!-- <a href="index.php?act=billcomfirm"><input type="submit" name="dongydathang" class="btn btn-primary" ></a> -->
                                                <a href="index.php?act=bill"><input type="submit" value="Agree to Order" name="bill"></a></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
        }else{
        ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ec-cart-update-bottom">
                                                <a href="index.php">Continue Shopping</a>
                                                <!-- <a href="index.php?act=billcomfirm"><input type="submit" name="dongydathang" class="btn btn-primary" ></a> -->
                                                <a href="index.php?act=dangnhap"><input type="submit" value="Please login to make a purchase"></a></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }}?>
                    </div> 
                </div>
            </div>
        </div>
    </section>