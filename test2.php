<?php
//di proses jika sudah klik tombol cari
if(isset($_POST['cari'])){
	
	//menangkap nilai form
	
	$bulan_awal=$_POST['bulan_awal'];
	$tahun_awal=$_POST['tahun_awal'];
	$tahun_akhir=$_POST['tahun_akhir'];
	
	$bulan_akhir=$_POST['bulan_akhir'];
$tahun=$_POST['tahun'];
	
	
	if(empty($bulan_awal) and empty($bulan_akhir)){
		//jika tidak menginput apa2
		$query=mysql_query("select * from view_revenue01");
		$jumlah=mysql_fetch_array(mysql_query("select sum(toa) as total from view_revenue01"));
		
		
	}else{
		
		?> <br>Dari bulan <b>
		<?php echo $_POST['bulan_awal']?> <br> <br></b> Sampai dengan bulan <b>
		<?php echo $_POST['bulan_akhir']?></b><?php echo $_POST['tahun']?> </i>
		
		<?php
		
		$query=mysql_query("select * from view_revenue01 where tahun between '$tahun_awal' and '$tahun_akhir' and bulan between '$bulan_awal' and '$bulan_akhir'");
		$jumlah=mysql_fetch_array(mysql_query("select sum(toa) as total	 from view_revenue01 where tahun between '$tahun_awal' and '$tahun_akhir' and bulan between '$bulan_awal' and '$bulan_akhir'"));
	
	}
	
	?>