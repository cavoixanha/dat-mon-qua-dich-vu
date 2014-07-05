<?php
include ("../config.php");

$tentintuc = $_POST ["tentintuc"];
$anhminhhoa = $_POST ["anhminhhoa"];
$trangthai = $_POST ["trangthai"];
$thutu = $_POST ["thutu"];
$id = $_GET ["id"];

if (isset ( $_POST ["them"] )) {
	$sql = "insert into tbl_tintuc (TenTinTuc,anhminhhoa,trangthai,thutu) values(N'" . $tentintuc . "', N'" . $anhminhhoa . "', " . $trangthai . ", " . $thutu . ")";
	mysql_query ( $sql );
	header ( "location: ../../index.php?quanly=tintuc&ac=them" );
} else if (isset ( $_POST ["sua"] )) {
	$query_sua_tintuc = "update tbl_tintuc set TenTinTuc='$tentintuc',anhminhhoa='$anhminhhoa', thutu='$thutu', trangthai='$trangthai' where id_TinTuc = '$id'";
	if (mysql_query ( $query_sua_tintuc, $con ) == false)
		echo mysql_error ();
	else
		header ( "location: ../../index.php?quanly=tintuc&ac=sua&id=$id" );
} else {
	$query_xoa_tintuc = "delete from tbl_tintuc where id_TinTuc = '$id'";
	mysql_query ( $query_xoa_tintuc );
	header ( "location: ../../index.php?quanly=tintuc&ac=them" );
}
?>