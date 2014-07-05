<?php 
	if(isset($_GET["ac"]))
	{
		$ac = $_GET["ac"];
		if($ac == "them")
		{
			include("modules/monan/them.php");
		}else{
			include("modules/monan/sua.php");
		}
	}	
	include("modules/monan/lietke.php");
?>
