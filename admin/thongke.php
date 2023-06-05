<?php 
   include("config/config.php"); 

?>

<div class="row" style = "justify-content: space-between; margin-top: 3%; ">
    <div class="col-md-5" style="width:500px;border:1px solid #ccc;box-shadow: 0px 0px 5px 0px rgb(184 184 184);padding: 15px;">
        <div class="header_turnover">
            <h4>Doanh thu</h4>
            <div class="row turnover" style="margin: 13px 0;padding: 0 0 0 15%;">
                <div class="col-sm-6">
                    <p class="">Tuần này</p>
                    <h2 class="">
                        <span>
                            <?php
                                $now = getdate();
                                $ngayht = $now['mday'];
                                $dtuannay = ($ngayht - 7) + 1;
                                $ctuantrc = ($ngayht -7);
                                $dtuantrc = ($dtuannay - 7);
                                $sql_tuannay = "SELECT 
                                        SUM(`hoadon`.`tongtien`) AS tttuandau
                                    FROM
                                        `hoadon`
                                    WHERE
                                        `hoadon`.`ngayhd` BETWEEN '2023-4-$dtuannay 00:00:00' AND '2023-5-$ngayht 23:59:59'
                                ";
                                $query_tuannay = mysqli_query($conn,$sql_tuannay);
                                $row_tuannay = mysqli_fetch_array($query_tuannay);
                               
                                $tttunannay = $row_tuannay['tttuandau'];
                                echo number_format($tttunannay,0,',','.').' vnđ';
                                
                        
                            ?>
                        </span>
                    </h2>
                </div>
                <div class="col-sm-6">
                    <p class="">Tuần trước</p>
                    <h2 class="">
                        <span>
                            <?php
                                $now = getdate();
                                $ngayht = $now['mday'];
                                $dtuannay = ($ngayht - 7) + 1;
                                $ctuantrc = ($ngayht -7) ;
                                $dtuantrc = ($dtuannay - 7);
                                $sql_tuantrc = "SELECT 
                                        SUM(`hoadon`.`tongtien`) AS tttuantrc
                                    FROM
                                        `hoadon`
                                    WHERE
                                        `hoadon`.`ngayhd` BETWEEN '2023-4-$dtuantrc 00:00:00' AND '2023-5-$ctuantrc 23:59:59'
                                ";
                                $query_tuantrc = mysqli_query($conn,$sql_tuantrc);
                                $row_tuantrc = mysqli_fetch_array($query_tuantrc);
                               
                                $tttuantrc = $row_tuantrc['tttuantrc'];
                                echo number_format($tttuantrc,0,',','.').' vnđ';
                                
                        
                            ?>

                        </span>
                    </h2>
                </div>
            </div>
        </div>
        <canvas id="lineChart"></canvas>
    </div>
    <div style="margin-right: 5%;border:1px solid #ccc;box-shadow: 0px 0px 5px 0px rgb(184 184 184);padding: 20px;width: 49%;" class="product__selling">
        <div class="header__product-selling" style="margin-bottom: 25px;">
            <h4>Sản phẩm bán chạy nhất</h4>
        </div>
        <div class="table__repon-selling">
            <table>
                <?php 
                    $qry_sell = $conn->query("
                        SELECT `sanpham`.`tensp`,SUM(`cthoadon`.`soluong`) AS sl, `sanpham`.`gia`
                        FROM `sanpham`,`cthoadon`
                        WHERE `cthoadon`.`soluong` <= (SELECT MAX(`cthoadon`.`soluong`)
                                            FROM `cthoadon`) AND  `sanpham`.`masp` = `cthoadon`.`masp`
                        GROUP BY `cthoadon`.`masp`
                        ORDER BY sl DESC LIMIT 4
                   ");
                    while($row_sell= $qry_sell->fetch_assoc()):
                ?>
                <tbody>
                    <tr>
                        <td style="padding: 0px 25px 20px 0;">
                            <h5 style="margin-bottom: 10px;font-size: 14px !important;color: #6c757d !important;font-weight: 500;font-family: sans-serif;"><?php echo $row_sell['tensp'] ?></h5>
                            <span style="margin-bottom: 10px;font-size: 13px !important;color: #98A6AD !important;font-weight: 500;" >07 tháng 4, 2022</span>
                        </td>
                        <td style="padding: 0px 25px 20px 0;">
                            <h5 style="margin-bottom: 10px;font-size: 14px !important;color: #6c757d !important;font-weight: 500;font-family: sans-serif;"><?php $giasp =  $row_sell['gia']; echo number_format($giasp,0,',','.').' vnđ' ?></h5>
                            <span style="margin-bottom: 10px;font-size: 13px !important;color: #98A6AD !important;font-weight: 500;" >Giá bán</span>
                        </td>
                        <td style="padding: 0px 25px 20px 0;">
                            <h5 style="margin-bottom: 10px;font-size: 14px !important;color: #6c757d !important;font-weight: 500;font-family: sans-serif;"><?php echo $row_sell['sl'] ?></h5>
                            <span style="margin-bottom: 10px;font-size: 13px !important;color: #98A6AD !important;font-weight: 500;" >Số lượng</span>
                        </td>
                        <td style="padding: 0px 25px 20px 0;">
                            <h5 style="margin-bottom: 10px;font-size: 14px !important;color: #6c757d !important;font-weight: 500;font-family: sans-serif;"><?php $tontiens =  $row_sell['gia'] * $row_sell['sl']; echo number_format($tontiens,0,',','.').' vnđ' ?></h5>
                            <span style="margin-bottom: 10px;font-size: 13px !important;color: #98A6AD !important;font-weight: 500;" >Tổng số tiền</span>
                        </td>
                    </tr>
                    
                </tbody>
                <?php
                    endwhile;
                ?>
            </table>    
        </div>
    </div>   
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
        "<?php
            $now = getdate();
            $ngayht = $now['mday'];
            $thanght = $now['mon'];
            $dtuannay = ($ngayht - 7) + 1;
            $ctuantrc = ($ngayht -7) + 1;
            $dtuantrc = ($dtuannay - 7);

            $qry_2tr = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttr2 FROM `hoadon` 
            WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc GROUP BY month,day ORDER BY month,day ASC");$row_2tr= $qry_2tr->fetch_assoc();
           $qry_3tr = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttr3 FROM `hoadon` 
           WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc + 1 GROUP BY month,day ORDER BY month,day ASC");$row_3tr= $qry_3tr->fetch_assoc();
           $qry_4tr = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttr4 FROM `hoadon` 
           WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc + 2 GROUP BY month,day ORDER BY month,day ASC");$row_4tr= $qry_4tr->fetch_assoc();
           $qry_5tr = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttr5 FROM `hoadon` 
           WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc + 3 GROUP BY month,day ORDER BY month,day ASC");$row_5tr= $qry_5tr->fetch_assoc();
           $qry_6tr = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttr6 FROM `hoadon` 
           WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc + 4 GROUP BY month,day ORDER BY month,day ASC");$row_6tr= $qry_6tr->fetch_assoc();
           $qry_7tr = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttr7 FROM `hoadon` 
           WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc + 5 GROUP BY month,day ORDER BY month,day ASC");$row_7tr= $qry_7tr->fetch_assoc();
           $qry_8tr = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttr8 FROM `hoadon` 
           WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc + 6 GROUP BY month,day ORDER BY month,day ASC");$row_8tr= $qry_8tr->fetch_assoc();
           $qry_2n = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttn2 FROM `hoadon` 
           WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc + 7 GROUP BY month,day ORDER BY month,day ASC");$row_2n= $qry_2n->fetch_assoc();
           $qry_3n = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttn3 FROM `hoadon` 
           WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc + 8 GROUP BY month,day ORDER BY month,day ASC");$row_3n= $qry_3n->fetch_assoc();
           $qry_4n = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttn4 FROM `hoadon` 
           WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc + 9 GROUP BY month,day ORDER BY month,day ASC");$row_4n= $qry_4n->fetch_assoc();
           $qry_5n = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttn5 FROM `hoadon` 
           WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc + 10 GROUP BY month,day ORDER BY month,day ASC");$row_5n= $qry_5n->fetch_assoc();
           $qry_6n = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttn6 FROM `hoadon` 
           WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc + 11 GROUP BY month,day ORDER BY month,day ASC");$row_6n= $qry_6n->fetch_assoc();
           $qry_7n = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttn7 FROM `hoadon` 
           WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc + 12 GROUP BY month,day ORDER BY month,day ASC");$row_7n= $qry_7n->fetch_assoc();
           $qry_8n = $conn->query("SELECT (MONTH(`hoadon`.`ngayhd`)) AS month,(DAY(`hoadon`.`ngayhd`)) AS day, SUM(`hoadon`.`tongtien`) AS ttn8 FROM `hoadon` 
           WHERE (MONTH(`hoadon`.`ngayhd`)) = $thanght AND (DAY(`hoadon`.`ngayhd`)) = $dtuantrc + 13 GROUP BY month,day ORDER BY month,day ASC");$row_8n= $qry_8n->fetch_assoc();
          
        
        ?>"

        var tttrc2 = "<?php echo $row_2tr['ttr2'] ?>";
        var tttrc3 = "<?php echo $row_3tr['ttr3'] ?>";
        var tttrc4 = "<?php echo $row_4tr['ttr4'] ?>";
        var tttrc5 = "<?php echo $row_5tr['ttr5'] ?>";
        var tttrc6 = "<?php echo $row_6tr['ttr6'] ?>";
        var tttrc7 = "<?php echo $row_7tr['ttr7'] ?>";
        var tttrc8 = "<?php echo $row_8tr['ttr8'] ?>";
        var ttn2 = "<?php echo $row_2n['ttn2'] ?>";
        var ttn3 = "<?php echo $row_3n['ttn3'] ?>";
        var ttn4 = "<?php echo $row_4n['ttn4'] ?>";
        var ttn5 = "<?php echo $row_5n['ttn5'] ?>";
        var ttn6 = "<?php echo $row_6n['ttn6'] ?>";
        var ttn7 = "<?php echo $row_7n['ttn7'] ?>";
        var ttn8 = "<?php echo $row_8n['ttn8'] ?>";


        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
                datasets: [{
                    label: "Tuần trước",
                    data: [tttrc2, tttrc3, tttrc4, tttrc5, tttrc6, tttrc7, tttrc8],
                    backgroundColor: [
                        'rgba(105, 0, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(200, 99, 132, .7)',
                    ],
                    borderWidth: 2
                },
                {
                    label: "Tuần này",
                    data: [ttn2, ttn3, ttn4, ttn5, ttn6, ttn7, ttn8],
                    backgroundColor: [
                        'rgba(0, 137, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(0, 10, 130, .7)',
                    ],
                    borderWidth: 2
                }
                ]
            },
            options: {
                responsive: true
            }
        });
</script>
