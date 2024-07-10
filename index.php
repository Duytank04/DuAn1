<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include 'model/taikhoan.php';
include 'model/cart.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'model/pdo.php';
$dsdm = loadall_danhmuc();
include "view/header.php";
include 'global.php';

if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();

$dstop10 = loadall_sanpham_top10();

if ((isset($_GET['act'])) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {
        // -----------------đăng nhập --------------------
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'] > 0)) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                $checkuser = checkuser($user, $password);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                        if ($role == 1 || $role == 2) {
                            header("Location:admin/index.php");
                        } else {
                            header('Location:index.php');
                        }
                    }
                } else {
                    $thongbao = 'Account does not exist';
                }

            }
            include 'view/taikhoan/dangnhap.php';
            break;
        // -----------------đăng kí --------------------
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'] > 0)) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $password = $_POST['password'];
                $fullname = $_POST['fullname'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                insert_taikhoan($email, $user, $password, $fullname, $tel, $address);
                $thongbao = 'Successful account register';
            }
            include 'view/taikhoan/dangky.php';
            break;

        // -----------------Đăng xuất--------------------
        case 'thoat':
            session_unset();
            header('Location:index.php');
            break;

        case 'profile':
            include 'view/taikhoan/profile.php';
            break;


        case 'updatetk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'] > 0)) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $fullname = $_POST['fullname'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $email, $address, $tel, $fullname);
                $_SESSION['user'] = checkuser2($user);
                header('Location:index.php?act=profile');
                // $thongbao = 'Successful account update';
            }
            include 'view/taikhoan/update.php';
            break;




        case 'matkhau':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'] > 0)) {
                $password = $_POST['password'];
                $password1 = $_POST['password1'];
                $id = $_POST['id'];
                if ($_POST['password'] == $_POST['password1']) {
                    update_taikhoan2($password, $id);
                    $_SESSION['user'] = checkuser3($password);
                    header('Location:index.php?act=profile');
                } else {
                    header('Location:index.php?act=matkhau');
                }
            }
            include 'view/taikhoan/matkhau.php';
            break;



        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];

                $onesp = loadone_sanpham($id);
                extract($onesp);

                $spcungloai = loadone_sanpham_cungloai($id, $iddm);
                include 'view/sanphamct.php';
            } else {
                include 'view/home.php';
            }
            break;

        case 'viewcart':

            include 'view/cart/viewcart.php';
            break;


        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);

            }
            include 'view/cart/viewcart.php';
            break;


        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);

            } else {
                $_SESSION['mycart'] = [];

            }
            header('Location:index.php?act=addtocart');
            break;




        case 'bill':
            include 'view/cart/bill.php';
            break;


        case 'billcomfirm':
            // tạo bill đơn hàng
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['user']))
                    $iduser = $_SESSION['user']['id'];
                else
                    $id = 0;
                $name = $_POST['user'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();
                $idbill = insert_bill($iduser, $name, $email, $address, $tel, $ngaydathang, $tongdonhang);

                //insert into cart
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }
                $_SESSION['mycart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include 'view/cart/billconfirm.php';
            break;


        case 'mybill':
            $listbill = loadall_bill($_SESSION['user']['id']);
            include 'view/cart/mybill.php';
            break;



        case 'blog1':
            include "view/blog/blogsidebar.php";
            break;
        case 'blog2':
            include "view/blog/blogdetailsidebar.php";
            break;
        case 'blog3':
            include "view/blog/blogfull.php";
            break;
        case 'aboutus':
            include "view/about-us.php";
            break;




        // case 'listsp':
        //     if ( isset( $_POST[ 'listok' ] ) && ( $_POST[ 'listok' ] ) ) {
        //         $kyw = $_POST[ 'kyw' ];
        //     } else {
        //         $kyw = '';

        //     }
        //     $listsanpham = loadall_sanpham( $kyw );
        //     include 'view/sanpham.php';
        //     break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];

            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];

            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";

            break;

        case 'allsp':
            $dssp = loadall_sanpham($kyw = "", $iddm = 0);
            include "view/sanpham.php";

            break;

        case 'ctbill':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                $id = $_GET['id'];
                $idbill = $id;
                $bill = loadone_bill($_GET['id']);
                $billct = loadall_cart($idbill);


            }
            include 'view/cart/chitiet.php';
            break;














        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
ob_end_flush();
?>