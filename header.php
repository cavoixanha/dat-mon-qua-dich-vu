<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/AllPage.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript">
	function thongbao()
	{
		alert("Click");
		}
</script>
</head>
<body>
<!--Phải có cellpadding="0" không thì có khoảng trống giữa table--> 
<!--<table id="table_full_page" cellpadding="0" >
  <tr>
    <td background="images/nav_top.png">Home</td>
  </tr>
  <tr>
    <td background="images/banner_nhahang.jpg" />Nam</td>
  </tr>
  <tr>
    <td background="images/banner_monan.jpg" />Nam</td>
  </tr>
</table>-->
<div id="wrapper">
  <div id="nav_top">
    <div class="s960" >
      <div id="text_nav" >
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a>About</a></li>
          <li><a>Liên Hệ</a></li>
          <li><a href="Login.php">Đăng Nhập</a></li>
        </ul>
      </div>
      <div style="float:right;">
        <div style="float:left; padding-top:2px;">
          <input class="rounded_corner" type="text" name="txttimkiem" />
        </div>
        <div style="float:left;margin-left:-55px;z-index:10;">
          <button id="btntimkiem" type="button" onclick="thongbao()"></button>
        </div>
      </div>
    </div>
  </div>
  <div id="banner_nhahang">
    <div id="ten_nha_hang">2014 Restaurant</div>
    <div id="menu_wrapper" class="canhgiua"> 
      <!--<div id="text_menu_chinh">-->
      <ul id="menu">
        <li><a href="#">Nhóm Nhà Hàng</a>
          <ul class="submenu">
            <li><a href="#">Nhà Hàng Buffet</a></li>
            <li><a href="#">Nhà Hàng Truyền Thống</a></li>
            <li><a href="#">Nhà Hàng Tiệc Cưới</a></li>
          </ul>
        </li>
        <li><a href="#">Nhóm Món Ăn</a>
          <ul class="submenu">
            <li><a href="#">Lẩu</a></li>
            <li><a href="#">Hải Sản</a></li>
            <li><a href="#">Đồ Ăn Nhanh</a></li>
            <li><a href="#">Cổ Truyền</a></li>
          </ul>
        </li>
      </ul>
      <!--</div>--> 
    </div>
  </div>
  <div id="banner_monan" class="canhgiua"></div>
</div>
</body>
</html>