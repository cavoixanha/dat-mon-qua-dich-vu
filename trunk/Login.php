<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/AllPage.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="index.php" method="post">
<table>
  <tr>
    <td>Tên Đăng Nhập</td>
    <td><input type="text" name="username"  /></td>
  </tr>
  <tr>
    <td>Mật Khẩu</td>
    <td><input type="text" name="password" /></td>
  </tr>
  <tr>
    <td colspan="2"><input type="button" name="ok" value="Đăng Nhập" />
      <input type="button" name="cancel" value="Cancel" /></td>
  </tr>
</table>
<?php
	
	$username =  $_POST["username"];
	$password = $_POST["password"];
	if (filter_var()) {
		echo ;
	}
	
<form>

</body>
</html>