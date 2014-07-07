<div class="right-content">
  <table width="100%" border="1" style="border-collapse:collapse;">
    <tr>
      <th width="8%"><div align="center">STT</div></th>
      <th width="9%">Mã Món</th>
      <th width="22%">Tên Món</th>
      <th width="10%">Hình Ảnh</th>
      <th width="9%">Thông Tin</th>
      <th width="10%">Đơn Giá</th>
      <th width="10%">Nhóm Món</th>
      <th colspan="2"><a href="index.php?quanly=danhmuc&ac=them">Thêm</a></th>
    </tr>
    <?php 
 		$query = "SELECT * FROM `tbl_mon_an`";
		/*$rows = mysql_db_query("web_cty_xekhach",$query);*/
		$rows = mysql_db_query($database_name,$query);
		if(!$rows)
		{
			echo 'Lỗi SQL: '.mysql_error();
			echo "\r\n<br />";
			echo 'SQL: '.$query;
			exit;
		}
		
		if($rows == false)
		{
			echo "Lỗi";
			return ;
		}
		/*$rows = mysql_db_query("news",$query);*/
		/*mysql_query("SET character_set_connection=utf8");*/
		$i = 1;
		
		while($row = mysql_fetch_array($rows)){
	?>
    <tr>
      <td><div align="center"><?php echo $i; ?></div></td>
      <td><?php echo $row["id_mon_an"] ?></td>
      <td><?php echo $row["ten_mon"] ?></td>
      <td><?php echo $row["hinhanh"] ?></td>
      <td><?php echo $row["thongtin"] ?></td>
      <td><?php echo $row["don_gia"] ?></td>

      <?php 
      	
      	$r = mysql_fetch_array(mysql_db_query($database_name, "Select * from tbl_nhom_mon_an where id_nhom =".$row["id_nhom_mon_an"]));
      ?>
      <td><?php echo $r["ten_nhom"] ?></td>
      <td width="9%"><a href="index.php?quanly=monan&ac=sua&id=<?php echo $row['id_mon_an'] ?>">Sửa</a></td>
      <td width="9%"><a href="modules/tintuc/xuly.php?quanly=monan&ac=xoa&id=<?php echo $row['id_mon_an'] ?>">Xóa</a></td>
    </tr>
    <?php
		$i++;
	  	}
  	?>
  </table>
</div>
