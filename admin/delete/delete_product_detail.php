<?php
    $Id = $_GET['Id'];
    $sql = "DELETE FROM cthoadon WHERE Id = '$Id'";
    $query = mysqli_query($conn,$sql);
    if($query == TRUE){
        echo '<script>alert("Xóa thành công!");</script>';
        echo '<script>window.location="dashboard.php?page=list/list_product_detail"</script>';
        $sql2 = "ALTER TABLE cthoadon AUTO_INCREMENT = 1";
        mysqli_query($conn,$sql2);
    }else{
        echo "Error:". $sql . "</br>". $conn->error;
    }
?>