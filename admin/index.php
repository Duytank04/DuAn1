<?php
include '../model/sanpham.php';
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/cart.php';
include '../model/taikhoan.php';
include '../model/binhluan.php';
include 'header.php';

if (isset($_GET['act'])) {

    $act = $_GET['act'];
    switch ($act) {
        // ---------------------------------list dm------------------ 
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        // ---------------------------------add dm------------------ 
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                } else {
                }
                insert_danhmuc($tenloai, $hinh);
                $thongbao = 'More success';
            }

            include 'danhmuc/add.php';
            break;

        // ---------------------------------xoa dm------------------ 
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;

        // ---------------------------------sua dm------------------ 
        case 'suadm':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include 'danhmuc/update.php';
            break;

        // ---------------------------------update dm------------------ 

        case 'updatedm':
            if (isset($_POST['capnhatlh']) && ($_POST['capnhatlh'])) {
                $tenloai = $_POST['tenloai'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                } else {
                }
                $id = $_POST['id'];
                updatedm_danhmuc($id, $tenloai, $hinh);
                $thongbao = 'More success';
            }
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;


        // ---------------------------------list sp------------------ 
        case 'listsp':
            $listsanpham = loadall_sanpham();
            include 'sanpham/list.php';
            break;
        // ---------------------------------add sp------------------ 
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['price'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $hinh1 = $_FILES['hinh1']['name'];
                $hinh2 = $_FILES['hinh2']['name'];
                // $hinh3 = $_FILES['hinh3']['name'];
                // $hinh4 = $_FILES['hinh4']['name'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                $target_file1 = $target_dir . basename($_FILES['hinh1']['name']);
                $target_file2 = $target_dir . basename($_FILES['hinh2']['name']);
                // $target_file3 = $target_dir . basename($_FILES['hinh3']['name']);
                // $target_file4 = $target_dir . basename($_FILES['hinh4']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                } else {
                }
                if (move_uploaded_file($_FILES['hinh1']['tmp_name'], $target_file1)) {
                } else {
                }
                if (move_uploaded_file($_FILES['hinh2']['tmp_name'], $target_file2)) {
                } else {
                }
                // if (move_uploaded_file($_FILES['hinh3']['tmp_name'], $target_file3)) {
                // } else {
                // }
                // if (move_uploaded_file($_FILES['hinh4']['tmp_name'], $target_file4)) {
                // } else {
                // }
                insert_sanpham($iddm, $tensp, $giasp, $mota, $hinh, $hinh1, $hinh2);

                $thongbao = 'More success';
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/add.php';
            break;
        // ---------------------------------xoa sp------------------ 

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham();
            include 'sanpham/list.php';
            break;
        // ---------------------------------sua sp------------------ 

        case 'suasp':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            //var_dump( $listdanhmuc );
            include 'sanpham/update.php';
            break;


        case 'ctsp':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                $id = $_GET['id'];
                $idpro = $id;
                $sanpham = loadone_sanpham($_GET['id']);
                $listbinhluan = loadall_binhluan($idpro);
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/chitiet.php';
            break;
 //----------------- Bình luận-------------------
        case 'xoabl':
        if (isset($_GET['id']) && ($_GET)['id'] > 0) {
        delete_binhluan($_GET['id']);
        }
       // $listbinhluan = loadall_binhluan(0);
       $listsanpham = loadall_sanpham('', 0);
      include 'sanpham/list.php';
       break;


        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['price'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $hinh1 = $_FILES['hinh1']['name'];
                $hinh2 = $_FILES['hinh2']['name'];
              
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                $target_file1 = $target_dir . basename($_FILES['hinh1']['name']);
                $target_file2 = $target_dir . basename($_FILES['hinh2']['name']);
              
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                } else {
                }
                if (move_uploaded_file($_FILES['hinh1']['tmp_name'], $target_file1)) {
                } else {
                }
                if (move_uploaded_file($_FILES['hinh2']['tmp_name'], $target_file2)) {
                } else {
                }
               
                updatedm_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh, $hinh1, $hinh2);
                // $thongbao = 'Cập nhật thành công';
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham('', 0);

            include 'sanpham/list.php';
            break;

        // ---------------------------------chi tiet sp------------------
        case 'dsdonhang':
            $listbill = loadall_donhang();
            include 'bill/listbill.php';
            break;
        //---------------------- xóa đơn hàng-------------------
        case 'ctbill':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                $id = $_GET['id'];
                $idbill = $id;
                $bill = loadone_bill($_GET['id']);
                $billct = loadall_cart($idbill);
            }
            include 'bill/chitiet.php';
            break;
//     -------- quan ly tai khoan--------------
        case 'listtk':
            $listtaikhoan = loadall_taikhoan();
            include 'taikhoan/list.php';
            break;
        //------ xoa tai khoan--------
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include 'taikhoan/list.php';
            break;

        // ===============================sửa tk 

        case 'suatk':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                $taikhoan = loadone_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            //var_dump( $listdanhmuc );
            include 'taikhoan/edit.php';
            break;
        case 'update':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $name = $_POST['fullname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['addre'];
                $tel = $_POST['phone'];
                $role = $_POST['role'];
                update_taikhoanad($id, $user, $pass, $name, $email, $phone, $address, $tel, $role);
            }
            $listtaikhoan = loadall_taikhoan();
            include 'taikhoan/list.php';
            break;
       
        case 'thongke':
            $listthongke = loadall_thongke();
            include 'thongke/list.php';
            break;

        case 'bieudo':
            $listthongke = loadall_thongke();
            include 'thongke/bieudo.php';
            break;


            case 'suabill':
                if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                    $bill = loadone_bill($_GET['id']);
                }
                include 'bill/edit.php';
                break;


                case 'updatebill':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id = $_POST['id'];
                        $bill_status = $_POST['status'];
                        update_bill($id, $bill_status);
                    }
                    $listbill = loadall_donhang();
                    include 'bill/listbill.php';
                    break;

    }


} else {
    include 'home.php';
}

include 'footer.php';
?>