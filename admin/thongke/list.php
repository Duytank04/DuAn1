<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<!-- Mirrored from www.themenate.net/elstar-html/modern-product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 15:31:59 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="../../view/img/favicon.ico">
	<title>Elstar - HTML Tailwind Admin Template</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../../view/css/style.css">
</head>

<body>
	<!-- Content start -->
	<main class="h-full">
							<div
								class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
								<div class="container mx-auto">
									<div class="card adaptable-card">
										<div class="card-body">
											<div class="lg:flex items-center justify-between mb-4">
												<h3 class="mb-4 lg:mb-0">Statistical</h3>
											</div>
											<div class="overflow-x-auto">
												<h6>List of average product price statistics of the catalogue</h6>
												<br>
												<table id="product-list-data-table"
													class="table-default table-hover data-table">
													<thead>
														<tr>
														<th>ID</th>
															<th>Name</th>
															<th>Total</th>
															<th>Highest price</th>
															<th>Lowest Price</th>
                                                            <th>Average price</th>
                                                            
															<th></th>
                                                            
														</tr>
													
													<tbody>
												
													
                                                    <?php
                                                    foreach ($listthongke as $thongke) {
                                                        extract($thongke);
                                                        echo '<tr>
                                                        <td>'.$madm.'</td>
                                                        <td  style="color:violet;"><b>'.$tendm.'</b></td>
                                                        <td>'.$countsp.'</td>
                                                        <td><b style="color:red;">'.$maxsp.'</b></td>
                                                        <td><b style="color:red;">'.$minprice.'</b></td>
                                                        <td><b style="color:red;">'.$avgprice.'</b></td>
                                                       </tr>';
                                                    }
                                                    ?>
                                        </table>
                                        
                                    </div>
                                   
													</tbody>
													</table>
													
											</div>
											
										</div>
										<div ><a href="index.php?act=bieudo"> <input style="border:2px solid red; width:100px; margin-top:20px;color:red;font-weight: bolder;" type="button" value="Chart"></a> </div>
									</div>
								</div>
							
							</div>
							
						</main>
						
						<!-- Content end -->
</body>
</html>