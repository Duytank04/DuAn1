<?php
function insert_sanpham($iddm,$tensp, $giasp, $mota,$hinh,$hinh1,$hinh2)
{
    $sql = "INSERT INTO sanpham (iddm,name,price,mota,img,img1,img2) VALUES ('$iddm','$tensp','$giasp','$mota','$hinh','$hinh1','$hinh2')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "DELETE FROM `sanpham` WHERE id=" . $_GET['id'];
    pdo_execute($sql);
}
function loadall_sanpham_home()
{
    $sql="SELECT * FROM sanpham where 1 order by id desc limit 0,4";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10()
{
    $sql="SELECT * FROM sanpham where 1 order by view desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw="", $iddm=0)
{
    $sql = "SELECT * FROM sanpham where 1";
    if ($kyw !="") {
        $sql .= " and name like '%".$kyw."%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_ten_dm($iddm)
{
    if($iddm > 0){
    $sql = "SELECT * FROM `danhmuc` WHERE id=" . $iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
    }else{
        return "";
    }
}
function loadone_sanpham($id)
{
    $sql = "SELECT * FROM `sanpham` WHERE id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadone_sanpham_cungloai($id,$iddm)
{
    $sql = "SELECT * FROM `sanpham` WHERE iddm=".$iddm." AND id <> ".$id;
    $sp = pdo_query($sql);
    return $sp;
}
function updatedm_sanpham($id, $iddm,$tensp, $giasp, $mota,$hinh,$hinh1,$hinh2)
{
    if (($hinh != "")||($hinh1 != "")||($hinh2 != ""))
        $sql = "UPDATE sanpham SET `iddm`='" . $iddm . "',`name`='" . $tensp . "',`price`='" . $giasp . "',`mota`='" . $mota . "',`img`='" . $hinh . "',`img1`='" . $hinh1 . "',`img2`='" . $hinh2 . "' WHERE id=" . $id;
    else
        $sql = "UPDATE sanpham SET `iddm`='" . $iddm . "',`name`='" . $tensp . "',`price`='" . $giasp . "',`mota`='" . $mota . "' WHERE id=" . $id;
    pdo_execute($sql);
}





















?>