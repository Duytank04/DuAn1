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
    <?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
$hinhpath1 = "../upload/" . $img1;
$hinhpath2 = "../upload/" . $img2;

if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height = '100' width= '200'>";
    $hinh1 = "<img src='" . $hinhpath1 . "' height = '100' width= '200'>";
    $hinh2 = "<img src='" . $hinhpath2 . "' height = '100' width= '200'>";
  
} else {
    $hinh = "No profile picture ";
    $hinh1 = "no photo1";
    $hinh2 = "no photo2";
  
}
?>
    <!-- Content start -->
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <h3 class="mb-4">Detail Product</h3>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="form-container vertical">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                            <div class="lg:col-span-2">
                                <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                    <div class="card-body">
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2">Product Name:&nbsp &nbsp &nbsp <b
                                                    style="color:red;"><?=$name?></b></label>
                                        </div>
                                        <div class="luachon" name="iddm">
                                            <?php
                                           foreach ($listdanhmuc as $danhmuc) {
                                           extract($danhmuc);
                                           if($iddm==$id){
                                           echo '<label class="form-label mb-2">Category Name:&nbsp &nbsp &nbsp<b style="color:red;">'.$name.'</b></label>';
                                           }
                                           }?>
                                        </div>
                                        <br>
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2">Description: <b
                                                    style="color:red;text-align:right;">&nbsp​​<?=$mota ?></b></label>
                                        </div>
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2">Price: <b
                                                    style="color:red;">&nbsp &nbsp &nbsp<?=$price ?>$</b></label>
                                        </div>
                                        <div>
                                            <h5>Product Image</h5>
                                            <br>
                                            <div class="form-item vertical">
                                                <div class="hinhanh">
                                                    <br>
                                                    <?=$hinh?><?=$hinh1?><?=$hinh2?>
                                                    
                                                  
                                                </div>
                                            </div>
                                            <h5>Comment</h5>
                                            <br>
                                            <table id="product-list-data-table" class="table-default table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Commenter ID</th>
                                        <th>Content</th>
                                        <th>Comment Date</th>
                                        <th>Action</th>
                                    </tr>
                                        </thead>
                                <tbody>
                                    <?php
                                  
                                    foreach ($listbinhluan as $binhluan) {
                                        extract($binhluan);
                                        $xoabl = "index.php?act=xoabl&id=" . $id;
                                        echo '<tr>
                                        <td>' . $id . '</td>
                                        <td>' . $iduser . '</td>
                                        <td>' . $noidung . '</td>
                                        <td>' . $ngaybinhluan . '</td> 
                                       
				
                            <td>
																<div class="flex justify-end text-lg">
																	<span class="cursor-pointer p-2 hover:text-red-500">
																		<a href="' . $xoabl . '"><svg stroke="currentColor" fill="none"
																		stroke-width="2" viewBox="0 0 24 24"
																		aria-hidden="true" height="1em" width="1em"
																		xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round"
																			stroke-linejoin="round"
                                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
																		</path>
																	</svg></a>
																	</span>
																</div>
															</td>
                        </tr>';
                                    }
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
        </div>
        </form>
    </main>
    <!-- Content end -->
</body>

</html>