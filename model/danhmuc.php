<?php
function insert_danhmuc($tenloai,$hinh)
{
    $sql = "INSERT INTO danhmuc(name,img) VALUES ('$tenloai','$hinh')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = "DELETE FROM `danhmuc` WHERE id=" .$_GET['id'];
    pdo_execute($sql);
}
function loadall_danhmuc()
{
    $sql = "SELECT * FROM `danhmuc` order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id)
{
    $sql = "SELECT * FROM `danhmuc` WHERE id=" .$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function updatedm_danhmuc($id, $tenloai,$hinh)
{
    if (($hinh != ""))
        $sql = "UPDATE danhmuc SET `name`='" . $tenloai . "',`img`='" . $hinh . "' WHERE id=" . $id;
    else
        $sql = "UPDATE danhmuc SET `name`='" . $tenloai . "' WHERE id=" . $id;
    pdo_execute($sql);
}
?>