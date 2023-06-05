<?php
    $masp = $_GET['masp'];
    $sql = "DELETE FROM Sanpham WHERE masp = '$masp'";
    $query = mysqli_query($conn,$sql);
    if($query == TRUE){
        echo '<script>alert("Xóa thành công!");</script>';
        echo '<script>window.location="dashboard.php?page=list/list_product"</script>';
        $sql2 = "ALTER TABLE Sanpham AUTO_INCREMENT = 1";
        mysqli_query($conn,$sql2);
    }else{
        echo "Error:". $sql . "</br>". $conn->error;
    }
?>