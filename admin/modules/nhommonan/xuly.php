<?php
include ("../config.php");

$ten_nhom = $_POST ["ten_nhom"];
$id = $_GET ["id"];

if (isset ( $_POST ["them"] )) {
	$sql = "insert into tbl_nhom_mon_an (ten_nhom) values(N'" . $ten_nhom . "')";
	mysql_query ( $sql );
	header ( "location: ../../index.php?quanly=nhommonan&ac=them" );
} else if (isset ( $_POST ["sua"] )) {
	$query_sua_tintuc = "update tbl_nhom_mon_an set ten_nhom='$ten_nhom' where id_nhom = '$id'";
	if (mysql_query ( $query_sua_tintuc, $con ) == false)
		echo mysql_error ();
	else
		header ( "location: ../../index.php?quanly=nhommonan&ac=sua&id=$id" );
} else {
	$query_xoa_tintuc = "delete from tbl_nhom_mon_an where id_nhom = '$id'";
	mysql_query ( $query_xoa_tintuc );
	header ( "location: ../../index.php?quanly=nhommonan&ac=them" );
}
?>