<?php 
	if(isset($_GET["ac"]))
	{
		$ac = $_GET["ac"];
		if($ac == "them")
		{
			include("modules/tintuc/them.php");
		}else{
			include("modules/tintuc/sua.php");
		}
	}	
	include("modules/tintuc/lietke.php");
?>