<?php
$query_select_danhmuc = "select * from tbl_nhom_mon_an where id_nhom = '$_GET[id]'";
$result = mysql_query ( $query_select_danhmuc );
$row = mysql_fetch_assoc ( $result );
?>

<form action="modules/nhommonan/xuly.php?id=<?php echo $_GET['id']  ?>"
	method="post">
	<div class="left-content">
		<table width="100%" border="0"
			style="padding-left: 20px; text-transform: capitalize">
			<tr>
				<td height="55" colspan="2" align="center"
					style="text-transform: capitalize; font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold;">Sửa
					Danh Mục Món Ăn</td>
			</tr>
			<tr>
				<td width="46%">ID</td>
				<td width="54%"><label for="id_nhom"></label> <input type="text"
					readonly="readonly" name="id_nhom" id="id_nhom"
					value="<?php echo $row['id_nhom'] ?>"></td>
			</tr>
			<tr>
				<td>Tên Danh Mục Món Ăn</td>
				<td><label for="ten_nhom"></label> <input type="text"
					name="ten_nhom" id="ten_nhom"
					value="<?php echo $row['ten_nhom'] ?>"></td>
			</tr>
			<tr>
				<td height="44" colspan="2" style="text-align: center"><input
					name="sua" type="submit" id="sua" value="Sửa"> <input type="reset"
					name="clear" id="clear" value="Reset"></td>
			</tr>
		</table>
	</div>
</form>
