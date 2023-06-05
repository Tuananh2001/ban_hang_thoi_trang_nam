<?php include("config/config.php") ?>
<div class="home" style = "margin-bottom: 23px;font-size: 24px; color: #000;">Chi Tiết Đơn Hàng </div>
    <div class="borderhome" style = "border: 1px solid;margin-bottom: 46px;"></div>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th>STT</th>
						<th>Mã Hóa Đơn</th>
						<th> Tên sản phẩm</th>
            			<th>Số lượng</th>
						<th>Giá sản phẩm</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php

					$mahd = $_GET['mahd'];
					$qry = $conn->query("SELECT `Id`,`cthoadon`.`MaHD`,`sanpham`.`tensp`,`cthoadon`.`soluong`,`sanpham`.`gia` FROM `cthoadon`,`sanpham`,`hoadon` 
					WHERE `cthoadon`.`masp` = `sanpham`.`masp` AND `cthoadon`.`MaHD` = `hoadon`.`MaHD` AND `hoadon`.`MaHD` = '$mahd'");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
            			<td><b><?php echo $row['Id'] ?></b></td>
						<td><b>HD<?php echo ($row['MaHD']) ?></b></td>
						<td><b><?php echo $row['tensp'] ?></b></td>
						<td><b><?php echo $row['soluong'] ?></b></td>
						<td><b><?php echo $row['gia'] ?></b></td>
						<td class="text-center">
						<div class="btn-group">
							</button>
							</form>
							
							<a href="./dashboard.php?page=delete/delete_product_detail&Id=<?php echo $row['Id'] ?>" class="btn-infos btn  btn-flat">
							<i class="fas fa-trash"></i>
							<style>
							.btn-infos{
								background-color:#dc3545;
								border-color:#dc3545;
								color:#fff;
							}
							.btn-infos:hover{
								color:#fff;
								box-shadow: inset 0 0 0 100px rgb(0 0 0 / 20%);
							}
							</style>
							</a>
						</div>
						</td>
					</tr>	
           <?php endwhile; ?>
          </tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


   