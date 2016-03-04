<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

<body onLoad="document.postform.elements['jumlah'].focus();">
	<?php include "koneksi.php";?>
<?php
//untuk koneksi database

	
//untuk menantukan bulan awal dan bulan akhir data di database
$min_bulan=mysql_fetch_array(mysql_query("select min(bulan) as min_bulan from view_revenue01"));
$max_bulan=mysql_fetch_array(mysql_query("select max(bulan) as max_bulan from view_revenue01"));
$min_tahun=mysql_fetch_array(mysql_query("select min(tahun) as min_tahun from view_revenue01"));
$max_tahun=mysql_fetch_array(mysql_query("select max(tahun) as max_tahun from view_revenue01"));

?>
<form action="?page=chartrevenue01" method="post" name="postform">
<table width="435" border="0">
<tr>
 
	<div class="input-group margin">
	<span class="input-group-btn">
    <td colspan="2"></td>
	</span>
					</div>
</tr>
<tr>

    <td>bulan Awal</td>
	<div class="input-group margin">
                   
	<span class="input-group-btn">
    <td colspan="2"> <input type="text" class="form-control"  name="bulan_awal" size="15" value="<?php echo $min_bulan['min_bulan'];?>"/>
    				
    </td>
	
                      
                    </span>
					</div>
</tr>
<td width="111">Tahun</td>
	<div class="input-group margin">
	<span class="input-group-btn">
    <td colspan="2"><select name="tahun_awal" class="form-control" id="tahun">
<?php 
$query=mysql_query("select * from view_revenue01years order by tahun asc");

while($row=mysql_fetch_array($query))
{
	?><option value="<?php  echo $row['tahun']; ?>">
	<?php  echo $row['tahun']; ?></option><?php 
}
?>

</select>
<tr>
    <td>Bulan Akhir</td>
	<div class="input-group margin">
                   
	<span class="input-group-btn">
    <td colspan="2"><input type="text" class="form-control" name="bulan_akhir" size="15" value="<?php echo $max_bulan['max_bulan'];?>"/>
   				
    </td>
	</span>
					</div>
</tr>
<tr>
    <td width="111">Tahun</td>
	<div class="input-group margin">
	<span class="input-group-btn">
    <td colspan="2"><select name="tahun_akhir" class="form-control" id="tahun">
<?php 
$query=mysql_query("select * from view_revenue01years order by tahun asc");

while($row=mysql_fetch_array($query))
{
	?><option value="<?php  echo $row['tahun']; ?>">
	<?php  echo $row['tahun']; ?></option><?php 
}
?>

</select></td>
	</span>
					</div>
</tr>
   <td> <br><button class="btn btn-info btn-flat"  type="submit" value="Tampilkan Data" name="cari">Tampilkan Data</button></td></center>
    <td colspan="2">&nbsp;</td>

</table>
</form>
<p>

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

</p>
<div class="wrapper">
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Costumer Base</h3>
				  <br>
				  <br>
				  <button class="btn btn-primary" id="tombolExport">Export Excel</button>
<div class="box-body">
<tr>
    <td>  
    <td colspan="2">&nbsp;</td>
</tr>
                  <table id="tabelExport" class="table table-bordered table-hover">
	<tr>
				<th><h3>No.</h3></th>
				<th><h3>bulan</h3></th>
				<th><h3>Tahun</h3></th>
				<th><h3>Jumlah</h3></th>
				
				
			</tr>
			<?php
	//untuk penomoran data
	$no=0;
	
	//menampilkan data
	while($row=mysql_fetch_array($query)){
	?>
	    <tr>
    	<td><?php echo $no=$no+1; ?></td>
		<td><?php echo $row['bulan']; ?></td>
		<td><?php echo $row['tahun']; ?></td>
		
		<td align="left">
		Rp.<?php echo number_format($row['toa'],0,',','');?></td>
    </tr>
	 <?php
	}
	?>
    <tr>
    	<td colspan="3" align="right"><strong>TOTAL</strong></td><td align="center" ><strong>Rp.<?php echo number_format($jumlah['total'],0,',','.');?></strong></td>
	
		

		
    </tr>
    
    <tr>
    	<td colspan="4" align="center"> 
		<?php
		//jika data tidak ditemukan
		if(mysql_num_rows($query)==0){
			echo "<font color=red><blink>Tidak ada data yang dicari!</blink></font>";
		}
		?>
        </td>
    </tr>
	    
</table>
</div>
</div>
</div>
</div>
</div>

</section>
<section>

<?php
}else{
	unset($_POST['cari']);
}
?>

<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
<?php

include"FusionCharts/FC_Colors.php";
include"FusionCharts/FusionCharts_Gen.php";
include"FusionCharts/FusionCharts.php";

echo"<SCRIPT LANGUAGE='Javascript' SRC='FusionCharts/FusionCharts.js'></SCRIPT>";
   
 $strXML="<graph caption='Grafik Selisih Target' numberPrefix='  ' yAxisName='REVENUE' decimalPrecision='0' formatNumberScale='0'>";
 
   
	$kategori="<categories>";
	$data = "<dataset seriesName='' color='".getFCColor()."' >";

	

	
	$sql="SELECT * FROM view_revenue01 where tahun between '$tahun_awal' and '$tahun_akhir' and bulan between '$bulan_awal' and '$bulan_akhir' "; $qr=mysql_query($sql); while($Data=mysql_fetch_array($qr)){
   
   	$arrData[3][4]="$Data[bulan]";
   
   	$arrData[3][5]="$Data[toa]";
   
  
	
	  
   foreach ($arrData as $arSubData) {
      $kategori .= "<category name='".$arSubData[4]."' />";
      $data .= "<set value='".$arSubData[5] ."' />";
      
	 
	  
	
   }
}
$kategori .= "</categories>";

   $data .= "</dataset>";
   $data1 .= "</dataset>";
   $data2 .= "</dataset>";
  
   $strXML .= $kategori . $data ;
   $strXML .= "</graph>";
   echo renderChart("FusionCharts/FCF_StackedBar2D.swf", "", $strXML, "productSales", 1225, 500);

?>

<br></br>
<br></br>
</div>
</section>
