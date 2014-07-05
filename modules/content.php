<div id="content">
<?php
if (isset ( $_GET ['ac'] )) {
	switch ($_GET ['ac']) {
		case "tim" :
			{
				if (isset ( $_POST ['txttim'] )) {
					$dieukientim = $_POST ['txttim'];
					$query = "SELECT * FROM tbl_mon_an WHERE ten_mon LIKE N'%" . $dieukientim . "%' OR don_gia LIKE N'%" . $dieukientim . "%' ORDER BY ten_mon DESC";
					// var_dump($query);
					
					$rows = mysql_db_query ( "db_php_web_datmon_nh", $query ) or die ( mysql_error () );
					
					while ( $item = mysql_fetch_assoc ( $rows ) ) {
						echo $item ['ten_mon'] . "<br />" . $item ['don_gia'];
						echo "<br/>";
					}
				} else {
					echo "Không Tìm Thấy Món Ăn Nào";
				}
			}
			break;
		Default :
			echo "lll";
			break;
	}
}
?>
</div>