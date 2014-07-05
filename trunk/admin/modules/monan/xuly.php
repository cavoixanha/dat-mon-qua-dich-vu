<?php
include ("../config.php");

$ten_mon = $_POST ["tentintuc"];
$don_gia = $_POST ["anhminhhoa"];
$dvt = $_POST ["trangthai"];
$id_nhom = $_POST ["thutu"];
$id = $_GET ["id"];

if (isset ( $_POST ["them"] )) {
	$sql = "insert into tbl_mon_an (`id_mon_an`, `ten_mon`, `don_gia`, `DVT`, `id_nhom_mon_an`) values(N'" . $ten_mon . "', N'" . $don_gia . "', " . $dvt . ", " . $id_nhom. ")";
	mysql_query ( $sql );
	header ( "location: ../../index.php?monan=tintuc&ac=them" );
} else if (isset ( $_POST ["sua"] )) {
	$query_sua_tintuc = "update tbl_mon_an set ten_mon='$ten_mon',don_gia='$don_gia', DVT='$dvt', id_nhom_mon_an='$id_nhom' where id_mon_an = '$id'";
	if (mysql_query ( $query_sua_tintuc, $con ) == false)
		echo mysql_error ();
	else
		header ( "location: ../../index.php?quanly=monan&ac=sua&id=$id" );
} else {
	$query_xoa_tintuc = "delete from tbl_mon_an where id_mon_an = '$id'";
	mysql_query ( $query_xoa_tintuc );
	header ( "location: ../../index.php?quanly=monan&ac=them" );
}
?>