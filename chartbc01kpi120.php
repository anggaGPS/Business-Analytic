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


//untuk menantukan tanggal awal dan tanggal akhir data di database
$min_tanggal=mysql_fetch_array(mysql_query("select min(tanggal) as min_tanggal from tb_bc01kpi120"));
$max_tanggal=mysql_fetch_array(mysql_query("select max(tanggal) as max_tanggal from tb_bc01kpi120"));
$min_tahun=mysql_fetch_array(mysql_query("select min(tahun) as min_tahun from tb_bc01kpi120"));
$max_tahun=mysql_fetch_array(mysql_query("select max(tahun) as max_tahun from tb_bc01kpi120"));

?>
  <body class="hold-transition skin-blue sidebar-mini">
    <form action="?page=chartbc01kpi120" method="post" name="postform">
            <table width="435" border="0">
              <tr>
                
                <div class="input-group margin">
                  <span class="input-group-btn">
                    <td colspan="2">
                    </td>
                  </span>
                </div>
              
  
  <div class="input-group margin">
	<span class="input-group-btn">
      <td colspan="2">
        
      <tr>
        <td>
         Bulan Akhir
        </td>
        <div class="input-group margin">
          
          <span class="input-group-btn">
            <td colspan="2">
                 <input type="date" name="tanggal" class="form-control" id="tanggal"> </input>
      
      </td>
      </span>
  </div>
      </tr>
     
      
  <?php
  
//di proses jika sudah klik tombol cari
if(isset($_POST['cari'])){

//menangkap nilai form



$tanggal=$_POST['tanggal'];



if(empty($tanggal)){
//jika tidak menginput apa2
$query=mysql_query("select * from tb_bc01kpi120");



}else{
		
		
		
		
	

?>
  
      
      <?php

$query=mysql_query("select * from tb_bc01kpi120 where tanggal like '$tanggal'");


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
                       <h4>
                         Kota
                       </h4>
                     </th>
                     <th>
                       <h4>
                         Billing Pel
                       </h4>
                     </th>
                     <th>
                       <h4>
                         Billing
                       </h4>
                     </th>
                     <th>
                       <h4>
                         Tunggakan Pel
                       </h4>
                     </th>
					 <th>
                       <h4>
                         Tunggakan
                       </h4>
                     </th>
					 <th>
                       <h4>
                         Collection Pel
                       </h4>
                     </th>
					 <th>
                       <h4>
                         Collection
                       </h4>
                     </th>
					 <th>
                       <h4>
                         Baddebt
                       </h4>
                     </th>
					  <th>
                       <h4>
						Persen
                       </h4>
                     </th>
					 <th>
                       <h4>
						Tanggal
                       </h4>
                     </th>
					 
                     
                     
                   </tr>
                   <?php


//menampilkan data
while($row=mysql_fetch_array($query)){
?>
                   <tr>
                    <td>
                       <?php echo $row['kota']; ?>
                     </td>
					 <td>
                       <?php echo $row['pelangganbilling']; ?>
                     </td>
					 <td>Rp.
                      <?php echo number_format($row['billing'],0,',',',');?>
                     </td><td>
                       <?php echo $row['pelanggantunggakan']; ?>
                     </td>
					 <td>Rp.
                       <?php echo number_format($row['tunggakan'],0,',',',');?>
                     </td>
					 <td>
                       <?php echo $row['pelanggancollection']; ?>
                     </td>
                     <td>Rp.
                       <?php echo number_format($row['collection'],0,',',',');?>
                     </td>
					 <td>
                       <?php echo number_format($row['baddeebt'],2,',','');?>
                     </td>
					 <td>
                       <?php echo number_format($row['persen'],2,',','');?>
                     </td>
                     <td>
                       <?php echo $row['tanggal']; ?>
                     </td>
                     
                    
                   </tr>
                   <?php
}
?>
                  
                   
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
                  <h3 class="box-title">Billing Collection 01 - KPI 120</h3>
                  <div class="box-tools pull-right">
				  <a href="javascript:printDiv('kotatotal');" target="_blank" class="btn btn-default">
				<i class="fa fa-print">
				</i>
				Print
				</a>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div id="kotatotal" class="box-body">
				Data Tanggal: <b><?php echo $tanggal;?></b>
                  <div class="chart">
                    <div id="morris-bar-chart" ></div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- DONUT CHART -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title"> Persentase Baddebt dan Collection 01 - KPI 120</h3>
                  <div class="box-tools pull-right">
				  <a href="javascript:printDiv('kotapersentase');" target="_blank" class="btn btn-default">
				<i class="fa fa-print">
				</i>
				Print
				</a>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div id="kotapersentase" class="box-body">
				Data Tanggal: <b><?php echo $tanggal;?></b>
				<div class="chart">
                   <div id="morris-bar-chart1" ></div>
				  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			
            </div><!-- /.col (LEFT) -->
            <div style="width:265px" class="col-md-6">
              <!-- LINE CHART -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h4 class="box-title">Total BC</h4>
                  <div class="box-tools pull-right">
				  <a href="javascript:printDiv('bulan');" target="_blank" class="fa fa-print"></a>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div id="jatengtotal" class="box-body">
				Data Tanggal: <b><?php echo $tanggal;?></b>
                  <div class="chart">
                    <div id="morris-bar-chart2" ></div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- BAR CHART -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Total persentase</h3>
                  <div class="box-tools pull-right">
				  <a href="javascript:printDiv('jatengpersentase');" target="_blank" class="fa fa-print" style="width:20px"></a>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div id="jatengpersentase" class="box-body">
				Data Tanggal: <b><?php echo $tanggal;?></b>
                  <div class="chart">
                <div id="morris-bar-chart3" ></div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			


            </div><!-- /.col (RIGHT) -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
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
        $exec=mysql_query("select * from tb_bc01kpi120 where tanggal like '$tanggal'");
        while($r=mysql_fetch_array($exec)){
        ?>
        {
            kota: '<?php echo $r[1] ?>',
            billing: <?php echo $r[3] ?>,
			tunggakan: <?php echo $r[5] ?>,
            collection: <?php echo $r[7] ?>
        },
        <?php
        }
        ?>
        ],
        xkey: 'kota',
        ykeys: ['billing', 'tunggakan','collection'],
        labels: ['Billing', 'Tunggakan','Collection'],
        hideHover: 'auto',
        resize: true
    });

});
</script>
<script type="text/javascript">
$(function() {
    Morris.Bar({
        element: 'morris-bar-chart1',
        data: [
        <?php
        $exec=mysql_query("select * from tb_bc01kpi120 where tanggal like '$tanggal'");
        while($r=mysql_fetch_array($exec)){
        ?>
        {
            kota: '<?php echo $r[1] ?>',
            baddebt: <?php echo $r[8] *100?>,
            persen: <?php echo $r[9] *100?>
        },
        <?php
        }
        ?>
        ],
        xkey: 'kota',
        ykeys: ['baddebt', 'persen'],
        labels: ['Baddebt %', 'Collection %'],
        hideHover: 'auto',
        resize: true
    });

});
</script>
  <script type="text/javascript">
$(function() {
    Morris.Bar({
        element: 'morris-bar-chart2',
        data: [
        <?php
        $exec=mysql_query("select * from view_bc01kpi120 where tanggal like '$tanggal'");
        while($r=mysql_fetch_array($exec)){
        ?>
        {
            kota: 'Jateng',
            billing: <?php echo $r[1] ?>,
			tunggakan: <?php echo $r[3] ?>,
            collection: <?php echo $r[5] ?>
        },
        <?php
        }
        ?>
        ],
        xkey: 'kota',
        ykeys: ['billing', 'tunggakan','collection'],
        labels: ['Billing', 'Tunggakan','Collection'],
        hideHover: 'auto',
        resize: true
    });

});
</script>
<script type="text/javascript">
$(function() {
    Morris.Bar({
        element: 'morris-bar-chart3',
        data: [
        <?php
        $exec=mysql_query("select * from view_bc01kpi120 where tanggal like '$tanggal'");
        while($r=mysql_fetch_array($exec)){
        ?>
        {
            kota: 'jateng',
            baddebt: <?php echo $r[6] *100?>,
            persen: <?php echo $r[7] *100?>
        },
        <?php
        }
        ?>
        ],
        xkey: 'kota',
        ykeys: ['baddebt', 'persen'],
        labels: ['Baddebt %', 'Collection %'],
        hideHover: 'auto',
        resize: true
    });

});
</script>
    
  </body>
</html>
