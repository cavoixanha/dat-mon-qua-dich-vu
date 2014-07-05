<?php 
	if(isset($_GET["ac"]))
	{
		$ac = $_GET["ac"];
		if($ac == "them")
		{
			include("modules/nhommonan/them.php");
		}else{
			include("modules/nhommonan/sua.php");
		}
	}	
	include("modules/nhommonan/lietke.php");
?>
