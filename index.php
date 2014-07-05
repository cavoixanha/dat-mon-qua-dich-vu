<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Header</title>
<link href="css/header.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/content.css">
<link rel="stylesheet" type="text/css" href="preview.css"/>
<link rel="stylesheet" type="text/css" href="wt-rotator.css"/>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.wt-rotator.min.js"></script>
<script type="text/javascript" src="js/preview.js"></script>
<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
<!--<div id="wrapper">-->
<?php include 'modules/config.php';?>
<?php include("modules/header.php") ?>
<?php include("modules/banner_mon_an.php") ?>
<div class="s960">
<?php include 'modules/content.php';?>
  <?php 
	/* $username =  $_POST["username"];
	$password = $_POST["password"];
		if($username)
			echo "<h1>".$username."</h1>";
			else
				{
				echo "xin chao gest";
					/*include("modules/Login.php");
				} */
	?>
  <div class="box-mon-an">
    <div class="img-mon-an"></div>
    <div class="title-mon-an">title 1</div>
    <div class="tom-tat-mon-an">aaa</div>
  </div>
  <div class="box-mon-an">
    <div class="img-mon-an"></div>
    <div class="title-mon-an">title 2</div>
    <div class="tom-tat-mon-an">bbb</div>
  </div>
  <div class="box-mon-an">
    <div class="img-mon-an"></div>
    <div class="title-mon-an">title 3</div>
    <div class="tom-tat-mon-an">ccc</div>
  </div>
  <div style="clear:both"></div>
</div>
<?php include("modules/footer.php") ?>
<!--</div>-->
</body>
</html>