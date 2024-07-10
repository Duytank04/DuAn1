<?php
ob_start();
session_start();
include("../../model/pdo.php");
include("../../model/binhluan.php");
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link rel="stylesheet" href="assets/css/demo1.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">
    <!-- Font awesome  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="css/style.css">
</head>

<body>

    <!-- Single product tab start -->


    <div class="ec-single-pro-tab">
        <div class="ec-single-pro-tab-wrapper">
            <div class="ec-single-pro-tab-nav">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-review"
                            role="tablist">Reviews</a>
                    </li>
                </ul>
            </div>









          

























            <!-- -------------------------------------------- -->
            <div class="tab-content  ec-single-pro-tab-content">
                <div id="ec-spt-nav-review" class="tab-pane fade">
                    <div class="row">
                        <div class="ec-t-review-wrapper">
                            <div class="ec-t-review-item">
                                <div class="ec-t-review-content">
                                  <table>
                                    <thead>
                                    <tr>
                                        <th >[Commenter ID]------ </th>
                                        <th >[Comment Date]------</th>
                                        <th>[Content]</th>
                                       <br>
                                    </tr>
                                        </thead>
                                        <tbody> 
                                        <?php foreach ($dsbl as $bl) { 
                                         extract($bl);
                                        
                                        echo '<td style="color:red;">' . $iduser . '</td>';
                                       echo '<td>' . $ngaybinhluan . '</td>';
                                       echo '<td>' . $noidung . '<hr></td></tr>';
                                      
                                       
                                          } ?>
                                      
                                       </tbody>
                                   </table>
                                </div>
                            </div>
                        </div>
                        <?php
        if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
        
            ?>
                        <div class="ec-ratting-content">
                            <h3>Add a comment</h3>
                            <div class="ec-ratting-form">
                                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <input type="hidden" name="idpro" value="<?= $idpro ?>">
                                  
                                    <input type="hidden" name="iduser" value="<?= $_SESSION['user']['id']?>">
                                    <div class="ec-ratting-input form-submit">
                                        <textarea type="text" name="noidung"
                                            placeholder="Enter Your Comment"></textarea>
                                        <button class="btn btn-primary" type="submit" value="Submit"
                                            name="guibinhluan">Submit</button>
                                    </div>
                                </form>
                            </div>
                            
                           
                                <?php } else { ?>
                                    <h3>Please login to comment</h3>
            <?php } ?>
                            
                               
                                <?php
                            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                                $noidung = $_POST['noidung'];
                                $idpro = $_POST['idpro'];
                                $iduser = $_SESSION['user']['id'];
                                $ngaybinhluan = date('h:i:sa d/m/y');
                                // var_dump($noidung,$iduser,$idpro,$ngaybinhluan);
                                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                                header("location: " . $_SERVER['HTTP_REFERER']);
                                ob_end_flush();
                            }

                            ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>