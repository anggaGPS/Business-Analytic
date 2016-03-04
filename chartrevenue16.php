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
  </head>
    <?php include "koneksi.php";?>
      <?php
//untuk koneksi database


//untuk menantukan bulanangka awal dan bulanangka akhir data di database
$min_bulanangka=mysql_fetch_array(mysql_query("select min(bulanangka) as min_bulanangka from view_revenue16"));
$max_bulanangka=mysql_fetch_array(mysql_query("select max(bulanangka) as max_bulanangka from view_revenue16"));
$min_tahun=mysql_fetch_array(mysql_query("select min(tahun) as min_tahun from view_revenue16"));
$max_tahun=mysql_fetch_array(mysql_query("select max(tahun) as max_tahun from view_revenue16"));

?>
  <body class="hold-transition skin-blue sidebar-mini">
    <form action="?page=chartrevenue16" method="post" name="postform">
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
                      
                      <select name="bulanangka_awal" class="form-control" id="bulanangka_awal">
          
  <option value='1'>January</option>
<option  value='2'>February</option>
<option value='3'>  March</option>	
<option  value='4'>April</option>
<option  value='5'>May</option>
<option  value='6'>June</option>
<option  value='7'>July</option>
<option  value='7'>July</option>
<option  value='8'>August</option>
<option value='9'>September</option>	
<option value='10'>October</option>
<option value='11'>November</option>	
<option value='12'>December</option>
  
      </select>
      
      </td>
      <td>
	  <td>
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
	  </td>
      
      </span>
  </div>
  </tr>
  
      <tr>
        <td>
         Bulan Akhir
        </td>
        <div class="input-group margin">
          
          <span class="input-group-btn">
            <td colspan="2">
                 <select name="bulanangka_akhir" class="form-control" id="bulanangka_akhir">
  <option value='12'>December</option>    
<option value='11'>November</option>  
<option value='10'>October</option>
<option value='9'>September</option>
<option  value='8'>August</option>	
<option  value='7'>July</option>
<option  value='6'>June</option>
<option  value='5'>May</option>
<option  value='4'>April</option>
<option value='3'>  March</option>	
<option  value='2'>February</option>
 <option value='1'>January</option>








	

  
      </select>
      
      </td>
	  <td>
	  <td >
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
</select>
        </td>
      </span>
      </div>
      </span>
  </div></td>
      </tr>
      <tr>
        
  </tr>
  <?php
//di proses jika sudah klik tombol cari
if(isset($_POST['cari'])){

//menangkap nilai form

$bulanangka_awal=$_POST['bulanangka_awal'];
$tahun_awal=$_POST['tahun_awal'];
$tahun_akhir=$_POST['tahun_akhir'];

$bulanangka_akhir=$_POST['bulanangka_akhir'];
$tahun=$_POST['tahun'];


if(empty($bulanangka_awal) and empty($bulanangka_akhir)){
//jika tidak menginput apa2
$query=mysql_query("select * from view_revenue16");
$jumlah=mysql_fetch_array(mysql_query("select sum(toa) as total from view_revenue16"));


}else{
		
		
		
		
	

?>
  
  <br>
  Dari bulanangka 
  <b>
    <?php echo $_POST['bulanangka_awal']?>
    
    <br>
    
    <br>
  </b>
  Sampai dengan bulanangka 
  <b>
    <?php echo $_POST['bulanangka_akhir']?>
  </b>
  <?php echo $_POST['tahun']?>
  
      </i>
      
      <?php

$query=mysql_query("select * from view_revenue16 where bulanangka between '$bulanangka_awal' and '$bulanangka_akhir' and tahun between '$tahun_awal' and '$tahun_akhir'");
$jumlah=mysql_fetch_array(mysql_query("select sum(toa) as total	 from view_revenue16 where bulanangka between '$bulanangka_awal' and '$bulanangka_akhir' and tahun between '$tahun_awal' and '$tahun_akhir'"));

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
		  <div class="box box-danger">
		  <div class="box box-default collapsed-box">
             <div class="box-header with-border">
               <h3 class="box-title" >
                 Table
               </h3>
               <div class="box-tools pull-right">
                 <button class="btn btn-box-tool" data-widget="collapse">
                   <i class="fa fa-plus">
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
                         Bulan
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
         <div style="width:820px"class="col-md-6">
           <!-- AREA CHART -->
		   
           <div class="box box-primary">
             <div class="box-header with-border">
               <h3 class="box-title">
                 Revenue Perbulan
               </h3>
			    
               <div class="box-tools pull-right">
			   <a href="javascript:printDiv('bulan');" target="_blank" class="btn btn-default">
				<i class="fa fa-print">
				</i>
				Print
				</a>
				
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
             <div id='bulan' class="box-body">
			 <center><b>Informasi Revenue: </b> Pencarian Rentang<b> 
		<?php echo ucwords($_POST['bulanangka_awal']);?></b>/<b><?php echo $_POST['tahun_awal']?>
		</b> s/d <b><?php echo ucwords($_POST['bulanangka_akhir']);?></b>/<b><?php echo $_POST['tahun_akhir']?></b></center>
               <div class="chart">
                 <div id="morris-bar-chart" >
                 </div>
               </div>
             </div>
             <!-- /.box-body -->
           </div>
		       <div class="box box-primary">
             <div  class="box-header with-border">
               <h3 class="box-title">
                Revenue Pertahun
               </h3>
			   
               <div class="box-tools pull-right">
			 <a href="javascript:printDiv('pertahun');" target="_blank" class="btn btn-default">
				<i class="fa fa-print">
				</i>
				Print
				</a>
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
             <div id='pertahun' class="box-body">
			 <center><b>Informasi Revenue: </b> Pencarian Rentang<b><?php echo $_POST['tahun_awal']?>
		</b> s/d <b><?php echo $_POST['tahun_akhir']?></b></center>
               <div class="chart">
                 <div id="morris-bar-chart2" >
                 </div>
               </div>
             </div>
             <!-- /.box-body -->
           </div>
           <!-- /.box -->
           
           <!-- DONUT CHART -->
           <div class="box box-primary">
             <div class="box-header with-border">
               <h3 class="box-title">
                 Revenue Perbulan
               </h3>
			    
               <div class="box-tools pull-right">
			   <a href="javascript:printDiv('line');" target="_blank" class="btn btn-default">
				<i class="fa fa-print">
				</i>
				Print
				</a>
				
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
             <div id='line' class="box-body">
			 <center><b>Informasi Revenue: </b> Pencarian Rentang<b> 
		<?php echo ucwords($_POST['bulanangka_awal']);?></b>/<b><?php echo $_POST['tahun_awal']?>
		</b> s/d <b><?php echo ucwords($_POST['bulanangka_akhir']);?></b>/<b><?php echo $_POST['tahun_akhir']?></b></center>
               <div class="chart">
                 <div id="revenue-chart" >
                 </div>
               </div>
             </div>
             <!-- /.box-body -->
           </div>
              <!-- /.col (LEFT) -->
              
              <!-- /.col (RIGHT) -->
         </div>
		
 
         <!-- /.row -->
       
	 
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
            $exec=mysql_query("select * from view_revenue16 where tahun between '$tahun_awal' and '$tahun_akhir' and bulanangka between '$bulanangka_awal' and '$bulanangka_akhir' ORDER BY bulanangka ASC");
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
            $exec=mysql_query("select * from view_revenue16years where tahun between '$tahun_awal' and '$tahun_akhir' ORDER BY tahun ASC");
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
 <script>
      $(function () {
        "use strict";

        // AREA CHART
        var area = new Morris.Line({
          element: 'revenue-chart',
          resize: true,
          data: [
            <?php
            $exec=mysql_query("select * from view_revenue16 where tahun between '$tahun_awal' and '$tahun_akhir' and bulanangka between '$bulanangka_awal' and '$bulanangka_akhir' ORDER BY bulanangka ASC");
            while($r=mysql_fetch_array($exec)){
            ?>
            {
            tanggal: '<?php echo $r[4] ?>',
			toa: <?php echo $r[0] ?>,
      
    }
               ,
               <?php
               }
               ?>
               ],
          xkey: 'tanggal',
          ykeys: ['toa'],
          labels: ['toa'],
          lineColors: ['#3c8dbc'],
          hideHover: 'auto'
        });

        // LINE CHART
        var line = new Morris.Line({
          element: 'line-chart',
          resize: true,
          data: [
            {y: '2011 Q1', item1: 2666},
            {y: '2011 Q2', item1: 2778},
            {y: '2011 Q3', item1: 4912},
            {y: '2011 Q4', item1: 3767},
            {y: '2012 Q1', item1: 6810},
            {y: '2012 Q2', item1: 5670},
            {y: '2012 Q3', item1: 4820},
            {y: '2012 Q4', item1: 15073},
            {y: '2013 Q1', item1: 10687},
            {y: '2013 Q2', item1: 8432}
          ],
          xkey: 'y',
          ykeys: ['item1'],
          labels: ['Item 1'],
          lineColors: ['#3c8dbc'],
          hideHover: 'auto'
        });

        //DONUT CHART
        var donut = new Morris.Donut({
          element: 'sales-chart',
          resize: true,
          colors: ["#3c8dbc", "#f56954", "#00a65a"],
          data: [
            {label: "Download Sales", value: 12},
            {label: "In-Store Sales", value: 30},
            {label: "Mail-Order Sales", value: 20}
          ],
          hideHover: 'auto'
        });
        //BAR CHART
        var bar = new Morris.Bar({
          element: 'bar-chart',
          resize: true,
          data: [
            {y: '2006', a: 100, b: 90},
            {y: '2007', a: 75, b: 65},
            {y: '2008', a: 50, b: 40},
            {y: '2009', a: 75, b: 65},
            {y: '2010', a: 50, b: 40},
            {y: '2011', a: 75, b: 65},
            {y: '2012', a: 100, b: 90}
          ],
          barColors: ['#00a65a', '#f56954'],
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['CPU', 'DISK'],
          hideHover: 'auto'
        });
      });
    </script>
  </body>
</html>
