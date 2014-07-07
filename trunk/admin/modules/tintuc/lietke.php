<div class="right-content">
<?php 
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}else {
		$page = 1;
	}
	$start_from = ($page-1)*6;
	$query = "SELECT * FROM `tbl_tintuc` ORDER BY id_TinTuc ASC LIMIT $start_from, 6";
	$rows = mysql_db_query ( "db_php_web_datmon_nh", $query );
?>
	<table width="100%" border="1" style="border-collapse: collapse;">
		<tr>
			<th width="8%"><div align="center">STT</div></th>
			<!-- <th width="9%">Mã Tin Tức</th> -->
			<th width="22%">Tên Tin Tức</th>
			<th width="22%">Ảnh Minh Họa</th>
			<th width="10%">Trạng Thái</th>
			<th width="11%">Thứ Tự</th>
			<th colspan="2"><a href="index.php?quanly=tintuc&ac=them">Thêm</a></th>
		</tr>
    <?php
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
			<td><?php echo $row["TenTinTuc"] ?></td>
			<td><?php echo $row["anhminhhoa"] ?></td>
			<td><?php echo $row["trangthai"] ?></td>
			<td><?php echo $row["thutu"] ?></td>
			<td width="9%"><a
				href="index.php?quanly=tintuc&ac=sua&id=<?php echo $row['id_TinTuc'] ?>">Sửa</a></td>
			<td width="9%"><a
				href="modules/tintuc/xuly.php?quanly=tintuc&ac=xoa&id=<?php echo $row['id_TinTuc'] ?>">Xóa</a></td>
		</tr>
    <?php
		$i ++;
	}
	?>
  </table>
  <div style="text-align: center;margin-top: 20px;">
  <?php 
  //link so trang
  $sqlsotrang = "SELECT COUNT(id_TinTuc) FROM tbl_tintuc";
  $rs_result = mysql_db_query("db_php_web_datmon_nh", $sqlsotrang);
  $row = mysql_fetch_row($rs_result);
  $total_records = $row[0];
//   $total_records = mysql_num_rows($rs_result);
  $total_page = ceil($total_records/6);
  
  for ($i = 1; $i <= $total_page; $i++) {
  	echo "<a href=index.php?quanly=tintuc&ac=them&page=$i>".$i."</a> ";
  }
  ?>
  </div>
</div>
