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
    <td colspan="2"><input type="submit" name="ok" value="Đăng Nhập" />
      <input type="reset" name="Clear" value="Clear" /></td>
  </tr>
</table>
<form>
<?php
 	$username =  $_POST["username"];
	$password = $_POST["password"];
	if (!filter_var($username,FILTER_VALIDATE_EMAIL)) {
		echo "Bạn Phải Nhập Mail!";
	}else{
		echo "Nhập Thành Công!";
	} 
	?>
