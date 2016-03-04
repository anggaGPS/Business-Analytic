<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
      Biiling Collection Data
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js">
</script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js">
</script>
<![endif]-->
	
  </head>
    <?php include "koneksi.php";?>
      <?php
//untuk koneksi database


//untuk menantukan bulan awal dan bulan akhir data di database
$min_bulan=mysql_fetch_array(mysql_query("select min(bulan) as min_bulan from view_revenue01"));
$max_bulan=mysql_fetch_array(mysql_query("select max(bulan) as max_bulan from view_revenue01"));
$min_tahun=mysql_fetch_array(mysql_query("select min(tahun) as min_tahun from view_revenue01"));
$max_tahun=mysql_fetch_array(mysql_query("select max(tahun) as max_tahun from view_revenue01"));

?>
  <body class="hold-transition skin-blue sidebar-mini">
    <form action="?page=testgrafikbagus" method="post" name="postform">
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
                  bulan Awal
                </td>
                <div class="input-group margin">
                  
                  <span class="input-group-btn">
                    <td colspan="2">
                      
                      <input type="text" class="form-control"  name="bulan_awal" size="15" value="
<?php echo $min_bulan['min_bulan'];?>
"/>
      
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
        <select name="tahun_awal" class="form-control" id="tahun">
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
      <tr>
        <td>
          Bulan Akhir
        </td>
        <div class="input-group margin">
          
          <span class="input-group-btn">
            <td colspan="2">
              <input type="text" class="form-control" name="bulan_akhir" size="15" value="
<?php echo $max_bulan['max_bulan'];?>
"/>
      
      </td>
      </span>
  </div>
      </tr>
      <tr>
        <td width="111">
          Tahun
        </td>
        <div class="input-group margin">
          <span class="input-group-btn">
            <td colspan="2">
              <select name="tahun_akhir" class="form-control" id="tahun">
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

?>
  
  <br>
  Dari bulan 
  <b>
    <?php echo $_POST['bulan_awal']?>
    
    <br>
    
    <br>
  </b>
  Sampai dengan bulan 
  <b>
    <?php echo $_POST['bulan_akhir']?>
  </b>
  <?php echo $_POST['tahun']?>
  
      </i>
      
      <?php

$query=mysql_query("select * from view_revenue01 where tahun between '$tahun_awal' and '$tahun_akhir' and bulan between '$bulan_awal' and '$bulan_akhir'");
$jumlah=mysql_fetch_array(mysql_query("select sum(toa) as total	 from view_revenue01 where tahun between '$tahun_awal' and '$tahun_akhir' and bulan between '$bulan_awal' and '$bulan_akhir'"));

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
    <button class="btn btn-info btn-flat"  type="submit" value="Tampilkan Data" name="cari">
      Tampilkan Data
    </button>
  </td>
            </center>
            <td colspan="2">
              &nbsp;
            </td>
            
            </table>
         </form>
	<div class="wrapper">
      
      
      <!-- Left side column. contains the logo and sidebar -->
      
      
      <!-- Content Wrapper. Contains page content -->
      
      <!-- Content Header (Page header) -->
      
    
      <!-- Main content -->
      <section class="content">
	  
        <div class="row">
		  
         <div style="width:820px"class="col-md-6">
           <!-- AREA CHART -->
           <div class="box box-primary">
             <div class="box-header with-border">
               <h3 class="box-title">
                 Revenue Perbulan
               </h3>
               <div class="box-tools pull-right">
                 <button class="btn btn-box-tool" data-widget="collapse">
                   <i class="fa fa-minus">
                   </i>
                 </button>
                 <button class="btn btn-box-tool" data-widget="remove">
                   <i class="fa fa-times">
                   </i>
                 </button>
               </div>
             </div>
             <div class="box-body">
               <div class="chart">
                 <div id="morris-bar-chart" >
                 </div>
               </div>
             </div>
             <!-- /.box-body -->
           </div>
		       <div class="box box-primary">
             <div class="box-header with-border">
               <h3 class="box-title">
                Revenue Pertahun
               </h3>
               <div class="box-tools pull-right">
                 <button class="btn btn-box-tool" data-widget="collapse">
                   <i class="fa fa-minus">
                   </i>
                 </button>
                 <button class="btn btn-box-tool" data-widget="remove">
                   <i class="fa fa-times">
                   </i>
                 </button>
               </div>
             </div>
             <div class="box-body">
               <div class="chart">
                 <div id="morris-bar-chart2" >
                 </div>
               </div>
             </div>
             <!-- /.box-body -->
           </div>
           <!-- /.box -->
           
           <!-- DONUT CHART -->
           <div class="box box-danger">
             <div class="box-header with-border">
               <h3 class="box-title" >
                 Table
               </h3>
               <div class="box-tools pull-right">
                 <button class="btn btn-box-tool" data-widget="collapse">
                   <i class="fa fa-minus">
                   </i>
                 </button>
                 <button class="btn btn-box-tool" data-widget="remove">
                   <i class="fa fa-times">
                   </i>
                 </button>
               </div>
             </div>
             <div class="box-body">
               <button class="btn btn-primary" id="tombolExport">
                 Export Excel
               </button>
               <div class="box-body">
                 <tr>
                   <td>
                     
                     <td colspan="2">
                       &nbsp;
                   </td>
                 </tr>
                 <table id="tabelExport" class="table table-bordered table-hover">
                   <tr>
                     <th>
                       <h3>
                         No.
                       </h3>
                     </th>
                     <th>
                       <h3>
                         bulan
                       </h3>
                     </th>
                     <th>
                       <h3>
                         Tahun
                       </h3>
                     </th>
                     <th>
                       <h3>
                         Jumlah
                       </h3>
                     </th>
                     
                     
                   </tr>
                   <?php
//untuk penomoran data
$no=0;

//menampilkan data
while($row=mysql_fetch_array($query)){
?>
                   <tr>
                     <td>
                       <?php echo $no=$no+1; ?>
                     </td>
                     <td>
                       <?php echo $row['bulan']; ?>
                     </td>
                     <td>
                       <?php echo $row['tahun']; ?>
                     </td>
                     
                     <td align="left">
                       Rp.
                       <?php echo number_format($row['toa'],0,',','');?>
                     </td>
                   </tr>
                   <?php
}
?>
                   <tr>
                     <td colspan="3" align="right">
                       <strong>
                         TOTAL
                       </strong>
                     </td>
                     <td align="center" >
                       <strong>
                         Rp.
                         <?php echo number_format($jumlah['total'],0,',','.');?>
                       </strong>
                     </td>
                     
                     
                     
                     
                   </tr>
                   
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
                </div>
                <!-- /.box -->
                
              </div>
              <!-- /.col (LEFT) -->
              
              <!-- /.col (RIGHT) -->
         </div>
         <!-- /.row -->
         <a href="printchartbc01kpi60.php" target="_blank" class="btn btn-default">
           <i align="left" class="fa fa-print">
           </i>
           Print
         </a>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    
    
    
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js">
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js">
    </script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js">
    </script>
    <!-- FastClick -->
    
    
    <!-- page script -->
	<?php
include "koneksi.php";
?>
    
    <script src="raphael-min.js">
    </script>
    <script src="morris.min.js">
    </script>
    <script type="text/javascript">
      $(function() {
        Morris.Bar({
          element: 'morris-bar-chart',
          data: [
            <?php
            $exec=mysql_query("select * from view_revenue01 where tahun between '$tahun_awal' and '$tahun_akhir' and bulan between '$bulan_awal' and '$bulan_akhir'");
            while($r=mysql_fetch_array($exec)){
            ?>
            {
            bulan: '<?php echo $r[1] ?>',
			toa: <?php echo $r[0] ?>,
      
    }
               ,
               <?php
               }
               ?>
               ],
               xkey: 'bulan',
               ykeys: ['toa'],
               labels: ['toa'],
               hideHover: 'auto',
               resize: true
               }
              );
  
}
 );
    </script>
    <script type="text/javascript">
      $(function() {
        Morris.Bar({
          element: 'morris-bar-chart2',
          data: [
            <?php
            $exec=mysql_query("select * from view_revenue01years where tahun between '$tahun_awal' and '$tahun_akhir'");
            while($r=mysql_fetch_array($exec)){
            ?>
            {
            tahun: '<?php echo $r[1] ?>',
            toa: <?php echo $r[0] ?>,
          
        }
                   ,
                   <?php
                   }
                   ?>
                   ],
                   xkey: 'tahun',
                   ykeys: ['toa'],
                   labels: ['toa'],
                   hideHover: 'auto',
                   resize: true
                   }
                  );
        
      }
       );
    </script>
  </body>
</html>
