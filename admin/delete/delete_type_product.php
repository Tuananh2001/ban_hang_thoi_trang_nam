<?php
    $maloai = $_GET['maloai'];
    $sql = "DELETE FROM LoaiSP WHERE maloai = '$maloai'";
    $query = mysqli_query($conn,$sql);
    if($query == TRUE){
        echo '<script>alert("Xóa thành công!");</script>';
        echo '<script>window.location="dashboard.php?page=list/list_type_product"</script>';
        $sql2 = "ALTER TABLE LoaiSP AUTO_INCREMENT = 1";
        mysqli_query($conn,$sql2);
    }else{
        echo "Error:". $sql . "</br>". $conn->error;
    }
?>