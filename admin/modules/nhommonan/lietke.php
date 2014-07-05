<div class="right-content">
  <table width="100%" border="1" style="border-collapse:collapse;">
    <tr>
      <th width="8%"><div align="center">STT</div></th>
      <th width="9%">Mã danh mục</th>
      <th width="22%">Tên Danh Mục</th>
      <th colspan="2"><a href="index.php?quanly=danhmuc&ac=them">Thêm</a></th>
    </tr>
    <?php 
 		$query = "SELECT * FROM `tbl_nhom_mon_an`";
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
      <td><?php echo $row["id_nhom"] ?></td>
      <td><?php echo $row["ten_nhom"] ?></td>
      <td width="9%"><a href="index.php?quanly=nhommonan&ac=sua&id=<?php echo $row['id_nhom'] ?>">Sửa</a></td>
      <td width="9%"><a href="modules/nhommonan/xuly.php?quanly=nhommonan&ac=xoa&id=<?php echo $row['id_nhom'] ?>">Xóa</a></td>
    </tr>
    <?php
		$i++;
	  	}
  	?>
  </table>
</div>
