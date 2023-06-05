<?php include("config/config.php") ?>
<div class="home" style = "margin-bottom: 23px;font-size: 24px; color: #000;">Danh sách user </div>
    <div class="borderhome" style = "border: 1px solid;margin-bottom: 46px;"></div>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./dashboard.php?page=add/add_user" style = "width: 20%"><i class="fa fa-plus"></i> Add New User</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th>Mã KH</th>
						<th>Name</th>
						<th>Số điện thoại</th>
                        <th>Ngày sinh</th>
						<th>Giới tính</th>
						<th>Địa chỉ</th>
						<th>Email</th>
						
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$qry = $conn->query("SELECT * FROM khachhang ORDER BY makh DESC");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
                        <td><b>KH<?php echo $row['makh'] ?></b></td>
						<td><b><?php echo ($row['tenkh']) ?></b></td>
						<td><b><?php echo $row['sdt'] ?></b></td>
						<td><b><?php echo $row['ngaysinh'] ?></b></td>
						<td><b><?php echo $row['gioitinh'] ?></b></td>
						<td><b><?php echo $row['diachi'] ?></b></td>
						<td><b><?php echo $row['Email'] ?></b></td>
						
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" style="text-align: center;min-width: 73px;">
		                      <a class="dropdown-item view_user" href="./dashboard.php?page=viewuser&makh=<?php echo $row['makh'] ?>"
							  style="
									    color: #fff;
										background-color: #17a2b8;
										border-color: #17a2b8;
										width: 43px;
										height: 38px;
										margin-top: 8px;
										font-size: 15px;
										display: inline-block;
										font-weight: 400;
										text-align: center;
										vertical-align: middle;
										-webkit-user-select: none;
										-moz-user-select: none;
										-ms-user-select: none;
										user-select: none;
										border: 1px solid transparent;
										padding: 0.375rem 0.75rem;
										font-size: 1rem;
										line-height: 1.5;
										border-radius: 0.25rem;
										transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
								" 
							  ><i class="fas fa-eye"></i></a>
		                      <div class="dropdown-divider"></div>
							  <form action="./dashboard.php?page=update/update_user&makh=<?php echo $row['makh'] ?>" method = "POST">
								<input type="hidden" name="edit_makh" value = "<?php echo $row['makh'] ?>">
								<button type = "submit" name = "edit_data_btn" class="btn btn-primary btn-flat">
								<i class="fas fa-edit"></i>
							</button>
							</form>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item delete_user" href="./dashboard.php?page=delete/delete_user&makh=<?php echo $row['makh'] ?>"
							 	style="
									    color: #fff;
										background-color: #dc3545;
										border-color: #dc3545;
										width: 43px;
										height: 38px;
										margin-bottom: 8px;
										font-size: 15px;
										display: inline-block;
										font-weight: 400;
										text-align: center;
										vertical-align: middle;
										-webkit-user-select: none;
										-moz-user-select: none;
										-ms-user-select: none;
										user-select: none;
										border: 1px solid transparent;
										padding: 0.375rem 0.75rem;
										font-size: 1rem;
										line-height: 1.5;
										border-radius: 0.25rem;
										transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
								" 
							  ><i class="fas fa-trash"></i></a>
		                    </div>
						</td>
					</tr>	
                    <?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

