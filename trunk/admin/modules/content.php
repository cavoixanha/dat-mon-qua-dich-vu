<div id="content">
<?php
	if(isset($_GET["quanly"]))
	{
		$quanly = $_GET["quanly"];
		if($quanly == "tintuc")
		{
			include("modules/tintuc/main.php");	
		}else{
			include("modules/monan/main.php");
		}
	}
?>
</div>