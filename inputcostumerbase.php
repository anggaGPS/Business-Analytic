<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Informasi Geographic SMB Telkom</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
	<script src="./lib/jquery.min.js"></script>
	<script src="./lib/highcharts.js"></script>
	<script src="./lib/modules/exporting.js"></script>
	 <script src="http://js.arcgis.com/3.14/"></script>
   <script src="map.js"></script>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <!--The viewport meta tag is used to improve the presentation and behavior of the samples 
      on iOS devices-->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1,user-scalable=no">
    <title>Maps Toolbar</title>
    
    <link rel="stylesheet" href="http://js.arcgis.com/3.14/dijit/themes/nihilo/nihilo.css">
    <link rel="stylesheet" href="http://js.arcgis.com/3.14/esri/css/esri.css">
    <style>
      html, body, #mainWindow {
        font-family: sans-serif; 
        height: 100%; 
        width: 100%; 
      }
      html, body {
        margin: 0; 
        padding: 0;
      }
      #header {
        height: 80px; 
        overflow: auto;
        padding: 0.5em;
      }
    </style>
    
    <script src="http://js.arcgis.com/3.14/"></script>
   <script src="map.js"></script>
	
	<link rel="stylesheet" href="style.css" />
		
		
	<?php include "koneksi.php";?>
	
</head>

  <body class="skin-blue">
  
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Admin</b>LTE</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="images/telu.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Admin</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
         
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="?page=home2"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="dashboard0.php"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Layout Options</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>
            <li>
              <a href="?page=info-ujian">
              
                <i class="fa fa-th"></i> <span>Input Information</span> <small class="label pull-right bg-green">Input Now</small>
              </a>
            </li>
			 <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Input Data</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?page=lokasi"><i class="fa fa-circle-o"></i> Input Lokasi Ujian</a></li>
                <li><a href="?page=data-ujian"><i class="fa fa-circle-o"></i> Input Jenis Ujian</a></li>
				   <li><a href="?page=data-provinsi"><i class="fa fa-circle-o"></i> Input Provinsi Target</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> input nama</a></li>
				<li><a href="?page=data-jurusan"><i class="fa fa-circle-o"></i> Input Jurusan</a></li>
				<li><a href="?page=data-sekolah"><i class="fa fa-circle-o"></i> Input Sekolah</a></li>
              </ul>
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Target</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?page=info-target"><i class="fa fa-circle-o"></i> Input Target</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
              </ul>
            </li>
            <li>
              <a href="?page=datauser">
                <i class="fa fa-envelope"></i> <span>Representatif</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li>
              <a href="kanban.php">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
			
          
            </li>
                <li class="treeview">
              <a href="?page=chat">
                <i class="fa fa-folder"></i> <span>Chat Forum</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
             
            </li>
         
            <li><a href="documentation/index.html"><i class="fa fa-book"></i> Documentation</a></li>
            <li class="header">LABELS</li>
			
            <li><a href="logout.php"><i class="fa fa-circle-o text-danger"></i> logout</a></li>
            
            <li><a href="?page=peta26"><i class="fa fa-circle-o text-info"></i> Information</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <?php
if(isset($_POST['submit'])){

	$nama=$_POST['nama'];
	$nik=$_POST['nik'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$nomorjob=$_POST['nomorjob'];
	$nomorpemohon=ucwords($_POST['nomorpemohon']);
	
	$query=mysql_query("insert into ippl values('$nama','$nik','$email','$alamat','$nomorjob','$nomorpemohon')");
	
	if($query){
		?><script language="javascript">alert('Berhasil Input Data')</script><?php
		?><script language="javascript">document.location.href="#"</script><?php
	}else{
		echo mysql_error();
	}
	
}else{
	unset($_POST['submit']);
}

if(isset($_GET['mode'])=='delete'){
	 $nomorjob=$_GET['nomorjob'];
	 mysql_query("delete from ippl where nomorjob='$nomorjob'");
}
?>
 <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

<table width="477" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
	<td align="left" valign="top" class="heading">Data Pemohon</td>
  </tr>
  <tr>
	<td align="left" valign="top" style="padding-top:20px;"><form method="post" action="#" style="margin:auto;">
	
	 
	</form></td>
  </tr>
</table>

<div id="tabelExport" align="center" class="table table-bordered table-hover">

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Pemohon</h3>
<div class="box-body">
 <td> <a href="exportgrafikselisih.php" class="btn btn-info btn-flat">Export Data</a></td>
                  <table id="example2" class="table table-bordered table-hover">
	<thead>
		<tr>
			
			<th width="10">Nomor Job</th>
			<th width="10">Nomor Pemohon</th>
			<th width="10">Nik</th>
			<th width="10">Nama</th>
			<th width="10">Alamat</th>
			<th width="5">Email</th>
			<th width="34">KTP</th>
			<th width="34">Surat</th>
			<th width="34">Surat</th>
			<th width="34">Aksi</th>
			
						
		</tr>
	</thead>
	<tbody>
	 <?php
		$query=mysql_query("SELECT * FROM ippl");					

		while($row=mysql_fetch_assoc($query)){
			?>
			<tr>
							<td><?php echo $row['nomorjob'];?></td>
							<td><?php echo $row['nomorpemohon'];?></td>
							<td><?php echo $row['nik'];?></td>
							<td><?php echo $row['nama'];?></td>
							<td><?php echo $row['alamat'];?></td>
							<td><?php echo $row['email'];?></td>
							<td><?php echo $row['ktp'];?></td>
							<td><?php echo $row['surtanah'];?></td>
							<td><?php echo $row['nikah'];?></td>
				<td><img src="images/edit.png"> 
				<a href="?page=input&mode=delete&nomorjob=
				<?php echo $row['nomorjob'];?>" onClick="return confirm('Apakah Anda Yakin?')">
				<img src="images/delete.png"></a>
				<a href="http://localhost/wm/?true#" method="">
				<img src="images/ceklis.png"></a></td>
			</tr>
			<?php
		}
	?>
	</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
 <button class="btn btn-primary" id="tombolExport">Export Excel</button>
           
		</div>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript">
		var sorter = new TINY.table.sorter("sorter");
		sorter.head = "head";
		sorter.asc = "asc";
		sorter.desc = "desc";
		sorter.even = "evenrow";
		sorter.odd = "oddrow";
		sorter.evensel = "evenselected";
		sorter.oddsel = "oddselected";
		sorter.paginate = true;
		sorter.currentid = "currentpage";
		sorter.limitid = "pagelimit";
		sorter.init("table",0);
	</script>
<script src="js/jquery-2.0.1.min.js"></script>
	<script src="js/jquery.base64.js"></script>
        <script src="js/jquery.btechco.excelexport.js"></script>
	<script>
            $(document).ready(function () {
                $("#tombolExport").click(function () {
                    $("#tabelExport").btechco_excelexport({
                        containerid: "tabelExport"
                       , datatype: $datatype.Table
                    });
                });
            });
	</script>
   
   
		
		<!--content web-->
		<?php error_reporting(E_ALL & ~E_NOTICE);
		$pg = htmlentities($_GET['page']);	
		$file ="$pg.php";
		if (!file_exists($file)) {
			include ("home2.php");
		}else if($pg=="" || $pg=="home2"){
			include ("home2.php");
		}else{
			include ("$pg.php");
		}
		?>
        </section>

        
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>

		
              
		
		
  
 

</body>
</html>

<iframe width=174 height=189 name="gToday:normal:agenda.js" id="gToday:normal:agenda.js" src="ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">

