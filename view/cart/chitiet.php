<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../view/img/favicon.ico">
    <title>Elstar - HTML Tailwind Admin Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../view/css/style.css">
    <style>
    .luachon select {
        border: 1px solid gray;
        border-radius: 5px;
        width: 100%;
        height: 40px;

    }

    .mota textarea {
        border: 1px solid gray;
        border-radius: 5px;
        width: auto;

    }

    .hinhanh input {

        border-radius: 5px;

    }
    </style>
</head>

<body>

    <!-- Content start -->
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <h3 class="mb-4"><b>Detail Order</b></h3>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="form-container vertical">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                            <div class="lg:col-span-2">
                                <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                    <div class="card-body">
                                   <?php
                                    $ttdh=get_ttdh($bill['bill_status']);
            $countsp=loadall_cart_count($bill["id"]);
            ?>
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2"><b>Order Number:</b>&nbsp <b
                                                    style="color:red;"><?=$bill["id"]?></b></label>
                                        </div>
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2"><b>Name Account:</b>&nbsp <b
                                                    style="color:red;"><?=$bill["bill_name"]?></b></label>
                                        </div>
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2"><b>Email:</b> &nbsp <b
                                                    style="color:red;"><?=$bill["bill_email"]?></b></label>
                                        </div>
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2"><b>Phone Number:</b>&nbsp <b
                                                    style="color:red;"><?=$bill["bill_email"]?></b></label>
                                        </div>
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2"><b>Address:</b>&nbsp <b
                                                    style="color:red;"><?=$bill["bill_address"]?></b></label>
                                        </div>
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2"><b>Total Product:</b>&nbsp <b
                                                    style="color:red;"><?=$bill["total"]?></b></label>
                                        </div>
                                        
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2"><b>Date Order:</b> <b
                                                    style="color:red;">&nbsp<?=$bill["ngaydathang"]?></b></label>
                                        </div>
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2"><b>Status:</b> <b
                                                    style="color:red;">&nbsp<?=$ttdh ?></b></label>
                                        </div>
                                        <div><br>
                                            <h5><b>Products</b></h5>
                                            <br>
                                            <div class="overflow-x-auto">
                        <table id="product-list-data-table" class="table-default table-hover data-table">
                            <thead>
                                <tr>
                                    
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quanlity</th>
                                
                                  

                                </tr>
                                <?php
                    foreach ($billct as $ct) {
                        extract($ct);
                        
                        if($idbill==$_GET['id']){
                            echo ' <tbody>
                            <td>'.$name.'</td>
                            <td>'.$price.'</td>
                            <td>'.$soluong.'</td>
                           
                        </tbody>';
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

                    </div>
            </div>
        </div>
        </div>

        </div>
        </div>
        </form>
        </div>
        </div>

    </main>
    <!-- Content end -->
</body>

</html>