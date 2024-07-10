<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan)
{
    $sql = "INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan1($idpro)
{
    $sql = "select bl.id, bl.noidung, bl.iduser, bl.idpro, bl.ngaybinhluan, tk.fullname, sp.name, sp.iddm, sp.id
    from binhluan bl
    inner join taikhoan tk on tk.id = bl.iduser
    inner join sanpham sp on sp.id = bl.idsp
    where 1";
    if ($idpro > 0) {
        $sql .= " AND idsp='" . $idpro . "'";
    }
    $sql .= " order by id_bl desc";
    $listbl1 = pdo_query($sql);
    return $listbl1;
}
function loadall_binhluan($idpro)
{
    $sql = "SELECT * FROM `binhluan` WHERE 1";
    if($idpro >0) $sql.=" AND idpro='".$idpro."'";
    $sql.=" order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function delete_binhluan($id)
{
    $sql = "DELETE FROM `binhluan` WHERE id=" . $_GET['id'];
    pdo_execute($sql);
}

?>