<?php
$query_ = "select * from tbl_mon_an where id_mon_an = '$_GET[id]'";
$result = mysql_query ( $query_ );
$row = mysql_fetch_assoc ( $result );
?>

<form action="modules/monan/xuly.php?id=<?php echo $_GET['id']  ?>"
	method="post">
	<div class="left-content">
		<table width="100%" border="0"
			style="padding-left: 20px; text-transform: capitalize">
			<tr>
				<td height="55" colspan="2" align="center"
					style="text-transform: capitalize; font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold;">Sửa
					Sửa Món Ăn</td>
			</tr>
			
			<tr>
				<td width="21%">Tên Món Ăn</td>
				<td width="79%"><label for="tenmonan"></label> <input type="text"
					name="tenmonan" id="tenmonan" value=<?php echo $row['ten_mon'] ?>></td>
			</tr>
			<tr>
				<td>Đơn Giá</td>
				<td><label for="dongia"></label> <input type="text" name="dongia"
					id="dongia" value="<?php echo $row['don_gia'] ?>"></td>
			</tr>
			<tr>
				<td>DVT</td>
				<td><label for="dvt"></label> <input type="text" name="dvt" id="dvt" value="<?php echo $row['DVT'] ?>"></td>
			</tr>
			<tr>
			
			
			<tr>
				<td>Nhóm Món Ăn</td>
				<td><label for="nhommonan"></label> <input type="text"
					name="nhommonan" id="nhommonan" value="<?php echo $row['id_nhom_mon_an'] ?>"></td>
			</tr>
			<tr>
			
			
			<tr>
				<td height="44" colspan="2" style="text-align: center"><input
					name="sua" type="submit" id="sua" value="Sửa"> <input type="reset"
					name="clear" id="clear" value="Reset"></td>
			</tr>
		</table>
	</div>
</form>
