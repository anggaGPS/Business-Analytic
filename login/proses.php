<?php
	session_start(); 		//mulai session, krena kita akan menggunakan session pd file php ini
	include '../koneksi.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$sebagai=$_POST['sebagai'];
if($sebagai=='admin'){
	$query=mysql_query("select * from admin where uname_admin='$uname' and pass_admin='$pass'");
	$cek=mysql_num_rows($query);
	if($cek==1){
	$_SESSION['uname_admin']=$uname;  //jika cocok, buat session dengan nama sesuai dengan username
		header("location:../dashboard.php?page=dash");    
	}else{
	echo "Gagal Login";
	header("location:salah.html");
	
	
	}
}
	else if($sebagai=='guru'){
	$query=mysql_query("select * from guru where uname_guru='$uname' and pass_guru='$pass'");
	$cek=mysql_num_rows($query);
	if($cek==1){
	echo "berhasil login guru";
	}else{
	echo "gagal login";
	}
}else if($sebagai=='siswa'){
	$query=mysql_query("select * from siswa where uname_siswa='$uname' and pass_siswa='$pass'");
	$cek=mysql_num_rows($query);
	if($cek==1){
	echo "berhasil login siswa";
	}else{
	echo "gagal login";
	}
}
?>