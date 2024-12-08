<?php
session_start();
error_reporting(0);
include "config/koneksi.php";
include "config/tanggal.php";
include "config/fungsi_tgl.php";

$input=$_GET[input];
$sid = session_id();
$inputform=$_GET[inputform];
$buktitf=$_GET[buktitf];

if($input=='add'){
	$idku=$_POST[ids];
	$s=$_POST[belis];
	$m=$_POST[belim];
	$l=$_POST[belil];
	$xl=$_POST[belixl];
	$sql = mysql_query("SELECT id_product,qty_s,
											qty_m,
											qty_l,
											qty_xl FROM wish WHERE id_product='$idku' AND id_session='$sid'");
	$xx=mysql_fetch_array($sql);
	$num = mysql_num_rows($sql);
	if ($num==0){
		mysql_query("INSERT INTO wish(id_product,
											id_session,
											tgl_wish,
									
											qty_s,
											qty_m,
											qty_l,
											qty_xl)
									VALUES	('$idku',
											'$sid',
											'$tgl_sekarang',
						
											'$s',
											'$m',
											'$l',
											'$xl')");
	}
	else {
		$aa=$xx[qty_s] + $s;
		$bb=$xx[qty_m] + $m;
		$cc=$xx[qty_l] + $l;
		$dd=$xx[qty_xl]+ $xl;
		mysql_query("UPDATE wish SET qty_s = '$aa',
                      qty_m = '$bb',
                      qty_l = ' $cc',
                      qty_xl = '$dd'
    									   WHERE id_session = '$sid' AND id_product='$idku'");


	}


	deletewish();
    echo"<script>window.alert('Terimakasih Baju Sudah Masuk wishlist');
                    window.location=('javascript:history.go(-2)')</script>";
	}				
elseif ($input=='delete'){
	mysql_query("DELETE FROM wish WHERE id_wish='$_GET[id]'");
	header('location:wish2.php');
	}
											

function deletewish(){
	$del = date('Y-m-d', mktime(0,0,0, date('m'), date('d') - 1, date('Y')));
	mysql_query("DELETE FROM wish WHERE tgl_wish < '$del'");
	}
	

