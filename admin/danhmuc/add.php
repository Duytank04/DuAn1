<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">
	
<!-- Mirrored from www.themenate.net/elstar-html/modern-new-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 15:32:27 GMT -->
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="../../view/img/favicon.ico">
		<title>Elstar - HTML Tailwind Admin Template</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

		<!-- Core CSS -->
		<link rel="stylesheet" type="text/css" href="../../view/css/style.css">
	</head>
	<body>
		<!-- Content start -->
        <main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="container mx-auto">
                                        <h3 class="mb-4">Add New Category</h3>
                                        <form action="index.php?act=adddm" method="post" enctype="multipart/form-data">
                                            <div class="form-container vertical">
                                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                                    <div class="lg:col-span-2">
                                                        <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                                            <div class="card-body">
                                                                <h5>Basic Information</h5>
                                                                <br>
                                                                <div class="form-item vertical">
                                                                    <label class="form-label mb-2">Category Name</label>
                                                                    <input
                                                                        class="input"
                                                                        type="text"
                                                                        name="tenloai"
                                                                        autocomplete="off"
                                                                        placeholder="Name"
                                                                        value=""
                                                                    >
                                                                </div> 
                                                                <div class="form-item vertical">
                                                                    <label class="form-label mb-2">Image Category</label>
                                                                    <input
                                                                        class="input"
                                                                     type="file"   name="hinh"
                                                                    >
                                                                </div>                                                               
                                                            </div>
                                                        </div>
                                                        <?php
                                                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao; 
                                                        ?>
                                                    </div>
                                                </div>
                                                <div id="stickyFooter" class="sticky -bottom-1 -mx-8 px-8 flex items-center justify-end py-4">
                                                    <div class="md:flex items-center">
                                                        <input class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" type="reset" value="Reset">
                                                        <input class="btn btn-solid btn-sm" type="submit" name="themmoi" value="Add" >
                                                        
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