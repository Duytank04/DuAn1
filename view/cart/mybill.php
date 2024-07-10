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
                                    <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                                        <div class="ec-checkout-block ec-check-bill">
                                            <h3 class="ec-checkout-title"><label for="">Your Order History</label></h3>
                                        </div>
                                    </div>
                                    <div class="row mb">
                                        <div class="boxtrai mr">

                                            <div class="row mb">
                                            
                                                <div class="row boxcontent cart">
                                                    <table>
                                                        <tr>
                                                            <th>Order Number</th>
                                                            <th>Order Date</th>
                                                            <th>Total</th>
                                                            <th>Total Amount</th>
                                                            <th>Status</th>
                                                        </tr>
                                                        <?php
            if(is_array($listbill)){
                foreach ($listbill as $bill) {
                    extract($bill);
                    $ctbill = "index.php?act=ctbill&id=" . $id;
                    $ttdh=get_ttdh($bill['bill_status']);
                    $countsp=loadall_cart_count($bill['id']);
                    echo '
                    <tr>
                    <td><a href="'.$ctbill.'"><b style="color:red;">YY-'.$bill['id'].'</b></a></td>
                    <td>'.$bill['ngaydathang'].'</td>
                    <td>'.$countsp.'</td>
                    <td>'.$bill['total'].'</td>
                    <td>'.$ttdh.'</td>
                    </tr>';
                }
            }
            ?>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                        <!--cart content End -->
                    </div>
                    <!-- Sidebar Area Start -->
                </div>
            </div>
</section>