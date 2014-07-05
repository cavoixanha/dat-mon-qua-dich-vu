<?php
$query_select_tintuc = "select * from tbl_tintuc where id_TinTuc = '$_GET[id]'";
$result = mysql_query ( $query_select_tintuc );
$row = mysql_fetch_assoc ( $result );
?>

<form action="modules/tintuc/xuly.php?id=<?php echo $_GET['id']  ?>"
	method="post">
	<div class="left-content">
		<table width="100%" border="0"
			style="padding-left: 20px; text-transform: capitalize">
			<tr>
				<td height="55" colspan="2" align="center"
					style="text-transform: capitalize; font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold;">Sửa
					Tin Tức</td>
			</tr>
			<tr>
				<td width="46%">Tên Tin Tức</td>
				<td width="54%"><label for="tentintuc"></label> <input type="text"
					name="tentintuc" id="tentintuc"
					value="<?php echo $row['TenTinTuc'] ?>"></td>
			</tr>
			<tr>
				<td>ảnh minh họa</td>
				<td><label for="anhminhhoa"></label> <input type="text"
					name="anhminhhoa" id="anhminhhoa"
					value="<?php echo $row['anhminhhoa'] ?>"></td>
			</tr>
			<tr>
				<td>trạng thái</td>
				<td>
					<!--<label for="trangthai"></label>--> <select name="trangthai"
					id="trangthai">
          <?php if($row["trangthai"] == 1){ ?>
            <option value="1" selected="selected">Hiển Thị</option>
						<option value="0">Không Hiển Thị</option>
            <?php }else{ ?>
            <option value="1">Hiển Thị</option>
						<option value="0" selected="selected">Không Hiển Thị</option>
            <?php } ?>
          </select>
				</td>
			</tr>
			<tr>
				<td>thứ tự</td>
				<td><select name="thutu" id="thutu">
        	 <?php
				switch ($row["thutu"]){
	        	 	case 1: {?>
	            	<option value="1" selected="selected">Đầu</option>
							<option value="2">Giữa</option>
							<option value="3">Cuối</option>
	             <?php 
	             	break;
	        	 	}
	        	 	case 2: { ?>
	             <option value="1">Đầu</option>
							<option value="2" selected="selected">Giữa</option>
							<option value="3">Cuối</option>
	              <?php 
	              	break;
	        	 	} 
	        	 	case 3:{?> 
	        	 	 <option value="1">Đầu</option>
							<option value="2">Giữa</option>
							<option value="3" selected="selected">Cuối</option>
	                <?php 
	                break;
	        	 	} Default:{
						?>
						<option value="1" selected="selected">Đầu</option>
							<option value="2">Giữa</option>
							<option value="3">Cuối</option>
					<?php
					}
				}
        	 	?>
            </select></td>
			</tr>
			<tr>
				<td height="44" colspan="2" style="text-align: center"><input
					name="sua" type="submit" id="sua" value="Sửa"> <input type="reset"
					name="clear" id="clear" value="Reset"></td>
			</tr>
		</table>
	</div>
</form>