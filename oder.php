<?php
include ("admin/config/config.php");   


    $tongtien = 0;
    foreach($_SESSION['cart1'] as $cart_item){
        $thanhtien = $cart_item['soluong'] * $cart_item['gia'];
        $tongtien+=$thanhtien;
    }
        $tenkh = $_POST['ten'];
        $dc = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        
        $sql_khs = "SELECT * FROM khachhang where tenkh = '$tenkh' and email = '$email' and sdt = '$sdt'";
        $query_khs = mysqli_query($conn,$sql_khs);
        $row_khs = mysqli_fetch_array($query_khs);
        $makh = $row_khs['makh'];
        $ngayhd = date("Y/m/d");
        $tt = $tongtien;
        if(isset($_POST['payment'])){
            $peymnet = $_POST['payment'];
        }  else {
            $peymnet = false;
        }

        $sql = "INSERT INTO  hoadon(makh, ngayhd, diachi, tongtien,tinhtrang) VALUES('$makh','$ngayhd','$dc','$tt','$peymnet')";
        $result = $conn->query($sql);
        if($result == TRUE){
            echo '<script>alert("Đăt hàng thành công!");</script>';
            echo '<script>window.location="shopCart.php"</script>';
            session_destroy();
        }else{
            echo "Error:". $sql . "</br>". $conn->error;
        }
        foreach($_SESSION['cart1'] as $cart_item){
            $thanhtien = $cart_item['soluong'] * $cart_item['gia'];
            $tongtien+=$thanhtien;
        
            $sql_hd = "SELECT * FROM hoadon where makh = '$makh' and diachi = '$dc'";
            $query_hd = mysqli_query($conn,$sql_hd);
            $row_hd = mysqli_fetch_array($query_hd);
            $mahd = $row_hd['MaHD'];
            $masp = $cart_item['masp'];
            $sl = $cart_item['soluong'];
            $gia = $thanhtien;

            $sql_cthd = "INSERT INTO  cthoadon(MaHD, masp, soluong, giasp) VALUES('$mahd','$masp','$sl','$gia')";
            $result_cthd = $conn->query($sql_cthd);
            if($result_cthd == TRUE){
                echo '<script>alert("Đặt hàng thành công!");</script>';
                echo '<script>window.location="shopCart.php"</script>';
                session_destroy();
            }else{
                echo "Error:". $sql_cthd . "</br>". $conn->error;
            }
        }
        

?>