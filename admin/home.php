<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php include("config/config.php"); 
?>
<div class="home" style = "    margin-bottom: 23px;font-size: 24px; color: #000;"> Home</div>
<div class="borderhome" style = "border: 1px solid;margin-bottom: 25px;"></div>
<div class="row" style = "justify-content: space-between; align-items: start;">
    <div class=""  >
        <div class="dashboard__item" style = "margin-top:13px ;display: flex;box-shadow: 0px 0px 5px 0px rgb(184 184 184); width: 125%;height: 115px;">
            <div class="dab__icon" style = "padding: 15px; margin: 7px 7px 26px 7px;;background-color: #2d47b7;box-shadow: 0px 0px 5px 0px rgb(184 184 184);"><i class="fas fa-users" style = "font-size: 35px;color: #fff; "></i></div>
            <div class="dab__text">
                <h5 style= "padding: 10px; color: #000; font-size: 15px; ">Khách hàng</h5>
                <span style = " margin-left: 13px;color: #000;font-weight: 700;">
                    <?php echo $conn->query("SELECT * FROM khachhang ")->num_rows; ?>
                </span>
            </div>
        </div>
        <div class="dashboard__item" style = "margin-top:34px ;display: flex;box-shadow: 0px 0px 5px 0px rgb(184 184 184); width: 125%;height: 115px;">
            <div class="dab__icon" style = "padding: 15px; margin: 7px 7px 26px 7px;;background-color: #2d47b7;box-shadow: 0px 0px 5px 0px rgb(184 184 184);"><i class="fa fa-edit" style = "font-size: 35px;color: #fff; "></i></div>
            <div class="dab__text">
                <h5 style= "padding: 10px; color: #000;font-size: 15px;">Đơn hàng</h5>
                <span style = " margin-left: 13px;color: #000;font-weight: 700;">
                    <?php echo $conn->query("SELECT * FROM Hoadon ")->num_rows; ?>
                </span>
            </div>
        </div>
    </div>
    <div class="" style="margin-right: 64%; position: relative;">
        <div class="dashboard__item" style = "margin-top:13px ;display: flex;box-shadow: 0px 0px 5px 0px rgb(184 184 184); width: 135%;height: 115px;">
             <div class="dab__icon" style = "padding: 15px; margin: 7px 7px 26px 7px;;background-color: #2d47b7;box-shadow: 0px 0px 5px 0px rgb(184 184 184);"><i class="fa fa-table" style = "font-size: 35px;color: #fff; "></i></div>
            <div class="dab__text">
                <h5 style= "padding: 10px 10px 0px 10px; color: #000;font-size: 15px;">Doanh thu</h5>
                <span style = " margin-left: 13px;color: #000;font-weight: 700;">
                    <?php 
                        $now = getdate();
                        $ngay =  $now['mday'];
                        $thang =  $now['mon'];
                        $nam =  $now['year'];
                        $qry = $conn->query("SELECT 
                                                        ((`hoadon`.`ngayhd`)) AS month,
                                                        SUM(`hoadon`.`tongtien`) AS tt
                                                    FROM
                                                        `hoadon`
                                                    WHERE
                                                        (DAY(`hoadon`.`ngayhd`)) = '$ngay' AND (MONTH(`hoadon`.`ngayhd`)) = '$thang' AND (YEAR(`hoadon`.`ngayhd`)) = '$nam'
                                                    GROUP BY month") ;
                            $row= $qry->fetch_assoc();
                            $tongtien = $row['tt'];
                            echo number_format($tongtien,0,',','.').' vnđ';
                    ?>
                </span>
            </div>
        </div>  
        <div class="dashboard__item" style = "margin-top:34px ;display: flex;box-shadow: 0px 0px 5px 0px rgb(184 184 184); width: 125%;height: 115px;display: none;">
            <div class="dab__icon" style = "padding: 15px; margin: 7px 7px 26px 7px;;background-color: #2d47b7;box-shadow: 0px 0px 5px 0px rgb(184 184 184);"><i class="fas fa-check" style = "font-size: 35px;color: #fff; "></i></div>
            <div class="dab__text">
                <h5 style= " padding: 10px 10px 0px 10px; color: #000;font-size: 15px;">Tổng số đơn hàng</h5>
                <span style = " margin-left: 13px;color: #000;font-weight: 700;">
                    
                </span>
            </div> 
        </div>
    </div>
    <div class="col-md-5" style="padding: 0px 15px;width:620px; position: absolute;margin-left: 38.6%;border:1px solid #ccc;box-shadow: 0px 0px 5px 0px rgb(184 184 184);">
        <canvas id="myChart"></canvas>
    </div>
</div>
<?php
    include("thongke.php");
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
