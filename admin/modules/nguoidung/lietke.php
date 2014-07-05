<div class="right-content">
	<table width="100%" border="1" style="border-collapse: collapse;">
		<tr>
			<th width="8%"><div align="center">STT</div></th>
			<!-- <th width="9%">Mã Tin Tức</th> -->
			<th width="8%">Mã Khách Hàng</th>
			<th width="10%">Họ KH</th>
			<th width="10%">Tên KH</th>
			<th width="10%">Ngày Sinh</th>
			<th width="10%">Địa Chỉ</th>
			<th width="10%">Email</th>
			<th width="10%">SDT</th>
			<th width="10%">Tài Khoản DN</th>
			<th colspan="2"><a href="index.php?quanly=nguoidung&ac=them">Thêm</a></th>
		</tr>
    <?php
	$query = "SELECT * FROM `tbl_khach_hang`";
	$rows = mysql_db_query ( $database_name, $query );
	if (! $rows) {
		echo 'Lỗi SQL: ' . mysql_error ();
		echo "\r\n<br />";
		echo 'SQL: ' . $query;
		exit ();
	}
	
	// var_dump("SELECT * FROM `tbl_tintuc`");
	if ($rows == false) {
		echo "Lỗi";
		return;
	}
	$i = 1;
	
	while ( $row = mysql_fetch_assoc ( $rows ) ) {
	?>
    <tr>
			<td><div align="center"><?php echo $i; ?></div></td>
			<!-- <td><?php /*echo $row["id_TinTuc"]*/ ?></td> -->
			<td><?php echo $row["id_khach_hang"] ?></td>
			<td><?php echo $row["ho_khach_hang"] ?></td>
			<td><?php echo $row["ten_khach_hang"] ?></td>
			<td><?php echo $row["ngay_sinh"] ?></td>
			<td><?php echo $row["dia_chi"] ?></td>
			<td><?php echo $row["email"] ?></td>
			<td><?php echo $row["sdt"] ?></td>
			<td><?php echo $row["username"] ?></td>
			<td width="9%"><a
				href="index.php?quanly=nguoidung&ac=sua&id=<?php echo $row['id_khach_hang'] ?>">Sửa</a></td>
			<td width="9%"><a
				href="modules/nguoidung/xuly.php?quanly=nguoidung&ac=xoa&id=<?php echo $row['id_khach_hang'] ?>">Xóa</a></td>
		</tr>
    <?php
		$i ++;
	}
	?>
  </table>
</div>
