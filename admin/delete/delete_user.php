<?php
    $makh = $_GET['makh'];
    $sql = "DELETE FROM khachhang WHERE makh = '$makh'";
    $query = mysqli_query($conn,$sql);
    if($query == TRUE){
        echo '<script>alert("Xóa thành công!");</script>';
        echo '<script>window.location="dashboard.php?page=list/list_user"</script>';
        $sql2 = "ALTER TABLE khachhang AUTO_INCREMENT = 1";
        mysqli_query($conn,$sql2);
    }else{
        echo "Error:". $sql . "</br>". $conn->error;
    }
?>