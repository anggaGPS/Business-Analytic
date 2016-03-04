<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
function printDiv(elementId) {
 var a = document.getElementById('printing-css').value;
 var b = document.getElementById(elementId).innerHTML;
 window.frames["print_frame"].document.title = document.title;
 window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
 window.frames["print_frame"].window.focus();
 window.frames["print_frame"].window.print();
}
</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php include "koneksi.php";?>
	<?php
  session_start();
  if(empty($_SESSION['uname_admin'])){
  header("location:login/login.php");
}
?>
<br/><br/><br/>

  </head>
   <?php
//untuk koneksi database


//untuk menantukan bulanangka awal dan bulanangka akhir data di database

$max_bulanangka=mysql_fetch_array(mysql_query("select max(bulanangka) as max_bulanangka from view_revenue01"));

$max_tahun=mysql_fetch_array(mysql_query("select max(tahun) as max_tahun from view_revenue01"));

?>

  <body class="hold-transition skin-blue sidebar-mini">
    
	
				<div class="box box-primary">
				 <form action="?page=dash" method="post" name="postform">
            <table width="435" border="0">
              <tr>
    
                <div class="input-group margin">
                  <span class="input-group-btn">
                    <td colspan="2">
                    </td>
                  </span>
                </div>
              </tr>
              <tr>
                
                <td>
                  Bulan Awal
                </td>
                <div class="input-group margin">
                  
                  <span class="input-group-btn">
                    <td colspan="2">
                      
                      <select name="bulanangka" class="form-control" id="bulanangka" required autofocus>
   <option selected="selected" value='<?php echo $max_bulanangka['max_bulanangka'];?>'>Update</option>
  <option value='1'>January</option>
<option  value='2'>February</option>
<option value='3'>  March</option>	
<option  value='4'>April</option>
<option  value='5'>May</option>
<option  value='6'>June</option>
<option  value='7'>July</option>
<option  value='8'>August</option>
<option value='9'>September</option>	
<option value='10'>October</option>
<option value='11'>November</option>	
<option value='12'>December</option>
  
      </select>
      
      </td>
	  
	  
      
      
      </span>
  </div>
  </tr>
  <td width="111">
    Tahun
  </td>
  <div class="input-group margin">
	<span class="input-group-btn">
      <td colspan="2">
        <select name="tahun" class="form-control" id="tahun" required autofocus>
          <?php 
$query=mysql_query("select * from view_revenue01years order by tahun asc");

while($row=mysql_fetch_array($query))
{
?>
       
  <option value="
<?php  echo $row['tahun']; ?>
">
  <?php  echo $row['tahun']; ?>
  </option>
  <?php 
}
?>
  
      </select>
     
      
      
  <?php
  
if(isset($_POST['cari'])){
	
	//menangkap nilai form
	$tahun=$_POST[tahun];
	$bulanangka=$_POST[bulanangka];

	
	if(empty($tahun) and empty($bulan) ){
		//jika tidak menginput apa2
		$query=mysql_query("select * from view_revenue01");
		$jumlah=mysql_fetch_array(mysql_query("select sum(toa) as total from view_revenue01"));
		
	}else{
		
		?><i><b>Informasi : </b> Data Update<b> Tahun
		<?php echo ucwords($_POST['tahun']);?></b> Bulan<b>
		<?php echo $_POST['bulanangka']?></b> 
		<?php
		
		$query=mysql_query("select * from view_revenue01 where bulanangka like $bulanangka and tahun like $tahun ");
		
	}
		
		
}	
		
	

?>
  
  
      
      
      </select>
  </td>
      </span>
      </div>
  </tr>
  <td>
    
    <br>
    
  </td>
            
            <td colspan="2">
              &nbsp;
            </td>
            
            </table>
			<td>
	  <tr>
	  <button class="btn btn-info btn-flat"  type="submit" value="Tampilkan Data" name="cari">
      <i class="fa fa-check">
                   </i>
    </button>
	</tr>
	<tr>
	<button class="btn btn-box-tool" data-widget="collapse">
                   <i class="fa fa-minus">
                   </i>
                 </button>
				 </tr>
				 <tr>
	<a href="javascript:printDiv('table');" target="_blank" class="btn btn-default">
				<i class="fa fa-print">
				</i>

				</a>
				</tr>
	  </td>
         </form>
				 
				 
             <div  class="box-header with-border">
               <h3 class="box-title">
         Table Data
               </h3>
			   
               <div class="box-tools pull-right">
			 
               </div>
             </div>
             <div id='table' class="box-body">
			<div class="wrapper" >
             
	
	
      
      
      <!-- Left side column. contains the logo and sidebar -->
      
      
      <!-- Content Wrapper. Contains page content -->
      
      <!-- Content Header (Page header) -->
      
    
      <!-- Main content -->
    
		  
        
                   
                   <tr>
                     <td colspan="4" align="center">
                       
                       <?php
//jika data tidak ditemukan
if(mysql_num_rows($query)==0){
echo "
<font color=red>
<blink>
Tidak ada data yang dicari!
</blink>
</font>
";
}
?>
      </td>
                    </tr>
                    
  </table>
                  </div>
                  <!-- /.box-body -->
               
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      
      <!-- Left side column. contains the logo and sidebar -->
     
      <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
      

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
		  <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
			  
                <div class="inner">
				<?php
		$query=mysql_query("SELECT * from tanggal_cb where bulanangka like $bulanangka and tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
			
							<h3 style="font-size: 25px"><?php echo $row['jumlah'];?></h3>
						
			
			
		       
                  <p><?php echo $row['bulan'];?></p>
		<?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 25px'>Bulan : ". $bulanangka."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>

"
	;}
	?>
                </div>
				 <div class="inner">
				<?php
		$query=mysql_query("SELECT * from years_cb where tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
			
							<h3 style="font-size: 25px"><?php echo $row['jumlah'];?></h3>
						
			
			
		       
                  <p><?php echo $row['tahun'];?></p>
		<?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 25px'>Tahun : ". $tahun."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>

"
	;}
	?>
                </div>
                <div class="icon">
                  <i class="ion ion-happy"></i>
                </div>
                <a href="?page=chartcb" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
		  <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
				<?php
		$query=mysql_query("SELECT * from view_revenue01 where bulanangka like $bulanangka and tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
                  <h3 style="font-size: 25px">Rp. <?php echo number_format($row['toa'],0,',',',');?></h3>
                  <p>Revenue 01 Bulan : <?php echo $row['bulan'];?></p>
<?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 25px'>Bulan : ". $bulanangka."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>

"
	;}
	?>        
        </div>
		
				<div class="inner">
				<?php
		$query=mysql_query("SELECT * from view_revenue01years where tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
                  <h3 style="font-size: 25px">Rp. <?php echo number_format($row['toa'],0,',',',');?></h3>
                  <p> Revenue 01 Tahun : <?php echo $row['tahun'];?></p>
<?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 25px'>Tahun : ". $tahun."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>

"
	;}
	?>    
	</div>
	
			
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="?page=chartrevenue01" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
			  		
	
            </div>
			 <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
				<?php
		$query=mysql_query("SELECT * from view_revenue16 where bulanangka like $bulanangka and tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
                  <h3 style="font-size: 25px">Rp. <?php echo number_format($row['toa'],0,',',',');?></h3>
                  <p>Revenue 16 Bulan : <?php echo $row['bulan'];?></p>
                <?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 25px'>Bulan : ". $bulanangka."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>

"
	;}
	?>
				</div>
		
				<div class="inner">
				<?php
		$query=mysql_query("SELECT * from view_revenue16years where tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
                  <h3 style="font-size: 25px">Rp. <?php echo number_format($row['toa'],0,',',',');?></h3>
                  <p> Revenue 16 Tahun : <?php echo $row['tahun'];?></p>
<?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 25px'>Tahun : ". $tahun."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>

"
	;}
	?>        
        </div>
		
			
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="?page=chartrevenue16" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
			  </div>
			  <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
				<?php
		$query=mysql_query("SELECT * from view_arpac where bulanangka like $bulanangka and tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
                  <h3 style="font-size: 25px">Rp. <?php echo number_format($row['arpac'],4,'.',',');?></h3>
                  <p>Arpac Bulan : <?php echo $row['bulan'];?></p>
                <?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 25px'>Bulan : ". $bulanangka."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>

"
	;}
	?>
				</div>
		
				<div class="inner">
				<?php
		$query=mysql_query("SELECT * from view_arpacyears where tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
                  <h3 style="font-size: 25px">Rp. <?php echo number_format($row['arpac'],4,'.',',');?></h3>
                  <p> Arpac Tahun : <?php echo $row['tahun'];?></p>
<?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 25px'>Tahun : ". $tahun."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>

"
	;}
	?>        
        </div>
	<div class="icon">
                  <i class="ion ion-ionic"></i>
                </div>
	 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	 
              </div>
            </div>
			
            <div class="col-lg-3 col-xs-6">
            
              <div class="small-box bg-green">
                <div class="inner">
				<?php
		$query=mysql_query("SELECT * FROM view_bc01kpi60 where bulanangka like $bulanangka and tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
			
							 <h3 style="font-size: 25px">Rp. <?php echo number_format($row['billing'],0,',',',');?></h3>
						
			
			
			
                 
                  <p>Billing 01 KPI 60</p>
                </div>
				<div class="inner">
                  <h3 style="font-size: 25px">Rp. <?php echo number_format($row['collection'],0,',',',');?></h3>
                  <p>Collection 01 KPI 60</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
				   <h4 style="font-size: 20px"><?php echo $row['persen']*100;?><sup style="font-size: 12px">%</sup></h4>
                <?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 22px'>Tahun : ". $tahun."</h3><br>";
		echo "<h3 style='font-size: 20px'>Bulan : ". $bulanangka."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>
<br>
<br>";}
	?>    
				</div>
                <a href="?page=chartbc01kpi60" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
		    
          
			
            <div class="col-lg-3 col-xs-6">
              
              <div class="small-box bg-yellow">
                <div class="inner">
				<?php
		$query=mysql_query("SELECT * FROM view_bc01kpi90 where bulanangka like $bulanangka and tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
	           <h3 style="font-size: 25px">Rp. <?php echo number_format($row['billing'],0,',',',');?></h3>
                  <p>Billing 01 KPI 90</p>
                </div>
				<div class="inner">
               <h3 style="font-size: 25px">Rp. <?php echo number_format($row['collection'],0,',',',');?></h3>
                  <p>Collection 01 KPI 90</p>
                </div>
               <div class="icon">
                  <i class="ion ion-stats-bars"></i>
				   <h4 style="font-size: 20px"><?php echo $row['persen']*100;?><sup style="font-size: 12px">%</sup></h4>
                  <?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 22px'>Tahun : ". $tahun."</h3><br>";
		echo "<h3 style='font-size: 20px'>Bulan : ". $bulanangka."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>
<br>
<br>";}
	?>    
				</div>
                <a href="?page=chartbc01kpi90" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
			  
            </div><!-- ./col -->
			 <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                 <?php
		$query=mysql_query("SELECT * FROM view_bc01kpi120 where bulanangka like $bulanangka and tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
	           <h3 style="font-size: 25px">Rp. <?php echo number_format($row['billing'],0,',',',');?></h3>
                  <p>Billing 01 KPI 120</p>
                </div>
				<div class="inner">
                  <h3 style="font-size: 25px">Rp. <?php echo number_format($row['collection'],0,',',',');?></h3>
                  <p>Collection 01 KPI 120</p>
                </div>
               <div class="icon">
                  <i class="ion ion-stats-bars"></i>
				   <h4 style="font-size: 20px"><?php echo $row['persen']*100;?><sup style="font-size: 12px">%</sup></h4>
  <?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 22px'>Tahun : ". $tahun."</h3><br>";
		echo "<h3 style='font-size: 20px'>Bulan : ". $bulanangka."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>
<br>
<br>";}
	?>                
			</div>
                <a href="?page=chartbc01kpi120" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
			
            </div>
			
			 <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
				<?php
		$query=mysql_query("SELECT * FROM view_bc16kpi75 where bulanangka like $bulanangka and tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
	           <h3 style="font-size: 25px">Rp. <?php echo number_format($row['billing'],0,',',',');?></h3>
                  
                  <p>Billing 16 KPI 75</p>
                </div>
				<div class="inner">
                  <h3 style="font-size: 25px">Rp. <?php echo number_format($row['collection'],0,',',',');?></h3>
                  <p>Collection 16 KPI 75</p>
                </div>
               <div class="icon">
                  <i class="ion ion-stats-bars"></i>
				   <h4 style="font-size: 20px"><?php echo $row['persen']*100;?><sup style="font-size: 12px">%</sup></h4>
  <?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 22px'>Tahun : ". $tahun."</h3><br>";
		echo "<h3 style='font-size: 20px'>Bulan : ". $bulanangka."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>
<br>
<br>";}
	?>                
			</div>
                <a href="?page=chartbc16kpi75" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
			
	</div>
	<div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
				<?php
		$query=mysql_query("SELECT * FROM view_bc16kpi105 where bulanangka like $bulanangka and tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
	           <h3 style="font-size: 25px">Rp. <?php echo number_format($row['billing'],0,',',',');?></h3>
                  
                  <p>Billing 16 KPI 105</p>
                </div>
				<div class="inner">
                  <h3 style="font-size: 25px">Rp. <?php echo number_format($row['collection'],0,',',',');?></h3>
                  <p>Collection 16 KPI 105</p>
                </div>
               <div class="icon">
                  <i class="ion ion-stats-bars"></i>
				   <h4 style="font-size: 20px"><?php echo $row['persen']*100;?><sup style="font-size: 12px">%</sup></h4>
  <?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 22px'>Tahun : ". $tahun."</h3><br>";
		echo "<h3 style='font-size: 20px'>Bulan : ". $bulanangka."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>
<br>
<br>";}
	?>            
        </div>
                <a href="?page=chartbc16kpi105" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
		
	</div>
			
			 <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <?php
		$query=mysql_query("SELECT * FROM view_bc16kpi105 where bulanangka like $bulanangka and tahun like $tahun");					

		while($row=mysql_fetch_assoc($query)){
			?>
	           <h3 style="font-size: 25px">Rp. <?php echo number_format($row['billing'],0,',',',');?></h3>
                  <p>Billing 01 KPI 135</p>
                </div>
				<div class="inner">
                  <h3 style="font-size: 25px">Rp. <?php echo number_format($row['collection'],0,',',',');?></h3>
                  <p>Collection 01 KPI 135</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
				   <h4 style="font-size: 20px"><?php echo $row['persen']*100;?><sup style="font-size: 12px">%</sup></h4>
  <?php
		}
		if(mysql_num_rows($query)==0){ echo "<h3 style='font-size: 22px'>Tahun : ". $tahun."</h3><br>";
		echo "<h3 style='font-size: 20px'>Bulan : ". $bulanangka."</h3>";
echo "
<p>
<font color=red>
Tidak ada data yang dicari!
</font>
</p>
<br>
<br>";}
	?>                
			</div>
                <a href="?page=chartbc16kpi135" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
	
            
			
			 
          <!-- Main row -->
         

        </section><!-- /.content -->
     

      <!-- Control Sidebar -->
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
  <div class="chart">
                 <div id="morris-bar-chart2" >
                 </div>
               </div>
             </div>
             <!-- /.box-body -->
           </div>
    <!-- jQuery 2.1.4 -->
   
  </body>
</html>
