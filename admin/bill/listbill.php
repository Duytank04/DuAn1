<!-- Content start -->
<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto">
            <div class="card adaptable-card">
                <div class="card-body">
                    <div class="lg:flex items-center justify-between mb-4">
                        <h3 class="mb-4 lg:mb-0">List Orders</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table id="product-list-data-table" class="table-default table-hover data-table">
                            <thead>
                                <tr>
                                    
                                    <th>Order Number</th>
                                    <th>Name Account</th>
                                    <th>Total Product</th>
                                    <th>Total</th>
                                    <th>Date Order</th>
                                    <th>Status</th>
                                    <th>Status name</th>
                                    <th> Edit Status</th>
                                    <!-- <th>Action</th> -->

                                </tr>

                            <tbody>
                                <?php
                                foreach ($listbill as $bill) {
                                    extract($bill);
                                    $ctbill = "index.php?act=ctbill&id=" . $id;
                                    $suabill = "index.php?act=suabill&id=" . $id;
                                    $kh=$bill["bill_name"].'
                                    <br> '.$bill["bill_email"].'
                                    <br> '.$bill["bill_address"].'
                                    <br> '.$bill["bill_tel"];
                                    $ttdh=get_ttdh($bill['bill_status']);
                                    $countsp=loadall_cart_count($bill["id"]);
                                    echo '
                                    <tr>
                                   
                                    <td><a href="'.$ctbill.'"><b style="color:red;">YY-'.$bill['id'].'</b></a></td>
                                    <td>'.$kh.'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$bill['total'].'</td>
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td>'.$bill['bill_status'].'</td>
                                    <td>'.$ttdh.'</td>
                                    <td><span
                                    class="cursor-pointer p-2 hover:text-indigo-600">
                                    <a href="'.$suabill.'"><svg stroke="currentColor" fill="none"
                                    stroke-width="2" viewBox="0 0 24 24"
                                    aria-hidden="true" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                    </path>
                                </svg></a></td>
                                    ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
        </div>
    </div>
</main>
<!-- Content end -->
<!-- <td><span class="cursor-pointer p-2 hover:text-red-500">
                                    <a href="'.$xoabill.'"><svg stroke="currentColor" fill="none"
                                    stroke-width="2" viewBox="0 0 24 24"
                                    aria-hidden="true" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg></td>
                                    </tr> -->