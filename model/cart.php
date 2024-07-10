
<?php
function viewcart(){
    global $img_path;
    $tong=0;
    $i=0;
    $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><svg stroke="currentColor" fill="none"
    stroke-width="2" viewBox="0 0 24 24"
    aria-hidden="true" height="1em" width="1em"
    xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round"
        stroke-linejoin="round"
        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
    </path>
</svg></a>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh=$img_path.$cart[2];
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
        echo '
        <tbody>
                                                <tr style="text-align:center;">
                                                    <td data-label="Product" class="ec-cart-pro-name"><img
                                                                class="ec-cart-pro-img mr-4"
                                                                src="'.$hinh.'" alt="" /><span class="amount">'.$cart[1].'</span></td>
                                                    <td data-label="Price" class="ec-cart-pro-price"><span
                                                            class="amount">'.$cart[3].'</span></td>
                                                            
                                                        <td data-label="Price" class="ec-cart-pro-price"><span
                                                    class="amount">'.$cart[4].'</span></td>
                                                        </td>
                                                    
                                                    <td data-label="Total" class="ec-cart-pro-subtotal">'.$ttien.' $</td>
                                                    <td data-label="Remove" class="ec-cart-pro-remove">
                                                    <span class="ec-cart-pro-price">'.$xoasp.'</span>
                                                    </td>
                                                   
                                                    
                                                </tr>
                                                
                                                    ';
        $i+=1;
    }
    echo '
    <thead>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        
        <th> </th>
        
    </tr>
</thead>
                                                    <thead>
                                                    <tr>
                                                        <th>Total:</th>
                                                        <th></th>
                                                        <th></th>
                                                        
                                                        <th>'.$tong. ' $</th>
                                                        
                                                    </tr>
                                                </thead>
                                                </tr>
                                                
                                            </tbody>
                                       
    ';
}




function viewcart2()
{
    global $img_path;
    $tong = 0;
    $i = 0;
    $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><svg stroke="currentColor" fill="none"
    stroke-width="2" viewBox="0 0 24 24"
    aria-hidden="true" height="1em" width="1em"
    xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round"
        stroke-linejoin="round"
        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
    </path>
</svg></a>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;

    }
    if ($tong == 0) {

        echo 'Please add products';

    } else {
        $tong2 = $tong + 5;
        echo '$' . $tong2 . '.00';

    }
    $i += 1;
}
    
    function viewcart3(){
        global $img_path;
        $tong=0;
        $i=0;
        $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><svg stroke="currentColor" fill="none"
        stroke-width="2" viewBox="0 0 24 24"
        aria-hidden="true" height="1em" width="1em"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round"
            stroke-linejoin="round"
            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
        </path>
    </svg></a>';
        foreach ($_SESSION['mycart'] as $cart) {
            $hinh=$img_path.$cart[2];
            $ttien=$cart[3]*$cart[4];
            $tong+=$ttien;
           
            
            $i+=1;
        }
            echo '$'.$tong.'.00';
        }


        function bill_chi_tiet($listbill){
            global $img_path;
            $tong=0;
            $i=0;
            foreach ($listbill as $cart) {
                
                $hinh=$img_path.$cart['img'];
                echo '<tr>
                
               
                <td>'.$cart['name'].'</td>
                <td>'.$cart['price'].'</td>
                <td>'.$cart['soluong'].'</td>
                <td>'.$cart['thanhtien'].'</td>
                <td></td>
                </tr>';
                $i+=1;
            }
        }

        
        function tongdonhang(){
            $tong=0;
            foreach ($_SESSION['mycart'] as $cart) {
                $ttien=$cart[3]*$cart[4]+5.00;
                $tong+=$ttien;
            }
            return $tong;
        }
        function insert_bill($iduser,$name,$email, $address, $tel, $ngaydathang, $tongdonhang)
        {
            $sql = "INSERT INTO bill (iduser,bill_name,bill_email,bill_address,bill_tel,ngaydathang,total) VALUES ('$iduser','$name','$email', '$address', '$tel', '$ngaydathang', '$tongdonhang')";
            return pdo_execute_return_lastInsertId($sql);
        }
       
        function insert_cart($iduser,$idpro, $img, $name,$price, $soluong, $thanhtien,$idbill)
        {
            $sql = "INSERT INTO cart (iduser,idpro,img,name,price,soluong,thanhtien,idbill) VALUES ('$iduser','$idpro',' $img', '$name','$price', '$soluong',' $thanhtien','$idbill')";
            return pdo_execute($sql);
        }

        function loadone_bill($id)
        {
            $sql = "SELECT * FROM `bill` WHERE id=" . $id;
            $bill = pdo_query_one($sql);
            return $bill;
        }
        function loadone_cart($id)
        {
            $sql = "SELECT * FROM `cart` WHERE id=" . $id;
            $bill = pdo_query_one($sql);
            return $bill;
        }
        function loadall_cart($idbill)
        {
            $sql = "SELECT * FROM `cart` WHERE idbill=" . $idbill;
            $bill = pdo_query($sql);
            return $bill;
        }
        function loadall_cart_count($idbill)
        {
            $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
            $bill = pdo_query($sql);
            return sizeof($bill);
        }
        function loadall_bill($iduser)
        {
            $sql = "SELECT * FROM bill WHERE   iduser = ".$iduser;
            $listbill = pdo_query($sql);
            return $listbill;
        }
        function get_ttdh($n){
            switch ($n) {
                case '0':
                    $tt="New orders";
                    break;
                case '1':
                        $tt="Orders being delivered";
                        break;
                        case '2':
                            $tt="Orders delivered";
                            break;
                            case '3':
                                $tt="Old orders";
                                break;
                default:
                $tt="New orders";
                    break;
            }
            return $tt;
        }
        function loadall_thongke(){
            $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm,count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxsp, avg(sanpham.price) as avgprice 
            FROM danhmuc INNER JOIN sanpham ON danhmuc.id = sanpham.iddm 
            GROUP BY danhmuc.id
            order BY danhmuc.id 
            ";
            $listthongke = pdo_query($sql);
            return $listthongke;
        }


        function loadall_donhang()
        {
            $sql = "SELECT * FROM `bill` order by id desc";
            $listdonhang = pdo_query($sql);
            return $listdonhang;
        }
        function delete_donhang($id)
        {
            $sql = "DELETE FROM bill WHERE id=" . $_GET['id'];
            pdo_execute($sql);
        }
      

        function update_bill($id, $bill_status) {
            $sql = "UPDATE `bill` SET `bill_status`= '$bill_status' WHERE id = $id";
             pdo_execute($sql);
        }





?>