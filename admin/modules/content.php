<div id="content">
<?php
if (isset ( $_GET ["quanly"] )) {
	
	// $quanly = $_GET ["quanly"];
	// if ($quanly == "tintuc") {
	// include ("modules/tintuc/main.php");
	// } else {
	// include ("modules/monan/main.php");
	// }
	
	switch ($_GET ["quanly"]) {
		case "nhommonan" :
			include ("modules/nhommonan/main.php");
			break;
		case "monan" :
			include ("modules/monan/main.php");
			break;
		case "tintuc" :
			include ("modules/tintuc/main.php");
			break;
		case "quangcao" :
			include ("modules/quangcao/main.php");
			break;
		case "lienhe" :
			include ("modules/lienhe/main.php");
			break;
		case "nguoidung" :
			include ("modules/nguoidung/main.php");
			break;
		Default:
			include ("modules/nhommonan/main.php");
			break;
	}
}
?>
</div>