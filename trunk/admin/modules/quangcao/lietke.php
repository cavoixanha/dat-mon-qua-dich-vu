<div class="right-content">
	<table width="100%" border="1" style="border-collapse: collapse;">
		<tr>
			<th width="8%"><div align="center">STT</div></th>
			<!-- <th width="9%">Mã Tin Tức</th> -->
			<th width="22%">Tên Quảng Cáo</th>
			<th width="22%">Ảnh Minh Họa</th>
			<th width="10%">Trạng Thái</th>
			<th width="11%">Vị Trí</th>
			<th colspan="2"><a href="index.php?quanly=quangcao&ac=them">Thêm</a></th>
		</tr>
    <?php
	$query = "SELECT * FROM `tbl_quangcao`";
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
			<td><?php echo $row["tenquangcao"] ?></td>
			<td><?php echo $row["anhminhhoa"] ?></td>
			<td><?php echo $row["trangthai_qc"] ?></td>
			<td><?php echo $row["vitri"] ?></td>
			<td width="9%"><a
				href="index.php?quanly=quangcao&ac=sua&id=<?php echo $row['id_QuangCao'] ?>">Sửa</a></td>
			<td width="9%"><a
				href="modules/quangcao/xuly.php?quanly=tintuc&ac=xoa&id=<?php echo $row['id_QuangCao'] ?>">Xóa</a></td>
		</tr>
    <?php
		$i ++;
	}
	?>
  </table>
</div>
