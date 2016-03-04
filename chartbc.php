<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Biiling Collection Data</title>
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
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

     
      <!-- Left side column. contains the logo and sidebar -->
     

      <!-- Content Wrapper. Contains page content -->
     
        <!-- Content Header (Page header) -->
    

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <!-- AREA CHART -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Billing Collection 01 - KPI 60</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <div id="morris-bar-chart" style="width:535px"></div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- DONUT CHART -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Billing Collection 01 - KPI 90</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
				<div class="chart">
                   <div id="morris-bar-chart1" style="width:535px"></div>
				  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Billing Collection 01 - KPI 120</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
				<div class="chart">
                    <div id="morris-bar-chart2" style="width:535px"></div>
					</div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  
            </div><!-- /.col (LEFT) -->
            <div class="col-md-6">
              <!-- LINE CHART -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Billing Collection 16 - KPI 75</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <div id="morris-bar-chart3" style="width:535px"></div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- BAR CHART -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Billing Collection 16 - KPI 105</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                <div id="morris-bar-chart4" style="width:535px"></div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Billing Collection 16 - KPI 135</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                     <div id="morris-bar-chart5" style="width:535px"></div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->


            </div><!-- /.col (RIGHT) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
    

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
    <!-- FastClick -->
   

    <!-- page script -->
	<?php
mysql_connect("localhost","root","rahasia");
mysql_select_db("db_telkomsel"); 
?>

<script src="raphael-min.js"></script>
<script src="morris.min.js"></script>
    <script type="text/javascript">
$(function() {
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [
        <?php
        $exec=mysql_query("select * from tb_bc01kpi60");
        while($r=mysql_fetch_array($exec)){
        ?>
        {
            kota: '<?php echo $r[1] ?>',
            billing: <?php echo $r[2] ?>,
            collection: <?php echo $r[3] ?>
        },
        <?php
        }
        ?>
        ],
        xkey: 'kota',
        ykeys: ['billing', 'collection'],
        labels: ['billing', 'collection'],
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
        $exec=mysql_query("select * from tb_bc01kpi90");
        while($r=mysql_fetch_array($exec)){
        ?>
        {
            kota: '<?php echo $r[1] ?>',
            billing: <?php echo $r[2] ?>,
            collection: <?php echo $r[3] ?>
        },
        <?php
        }
        ?>
        ],
        xkey: 'kota',
        ykeys: ['billing', 'collection'],
        labels: ['billing', 'collection'],
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
        $exec=mysql_query("select * from tb_bc01kpi120");
        while($r=mysql_fetch_array($exec)){
        ?>
        {
            kota: '<?php echo $r[1] ?>',
            billing: <?php echo $r[2] ?>,
            collection: <?php echo $r[3] ?>
        },
        <?php
        }
        ?>
        ],
        xkey: 'kota',
        ykeys: ['billing', 'collection'],
        labels: ['billing', 'collection'],
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
        $exec=mysql_query("select * from tb_bc16kpi75");
        while($r=mysql_fetch_array($exec)){
        ?>
        {
            kota: '<?php echo $r[1] ?>',
            billing: <?php echo $r[2] ?>,
            collection: <?php echo $r[3] ?>
        },
        <?php
        }
        ?>
        ],
        xkey: 'kota',
        ykeys: ['billing', 'collection'],
        labels: ['billing', 'collection'],
        hideHover: 'auto',
        resize: true
    });

});
</script>
<script type="text/javascript">
$(function() {
    Morris.Bar({
        element: 'morris-bar-chart4',
        data: [
        <?php
        $exec=mysql_query("select * from tb_bc16kpi105");
        while($r=mysql_fetch_array($exec)){
        ?>
        {
            kota: '<?php echo $r[1] ?>',
            billing: <?php echo $r[2] ?>,
            collection: <?php echo $r[3] ?>
        },
        <?php
        }
        ?>
        ],
        xkey: 'kota',
        ykeys: ['billing', 'collection'],
        labels: ['billing', 'collection'],
        hideHover: 'auto',
        resize: true
    });

});
</script>
<script type="text/javascript">
$(function() {
    Morris.Bar({
        element: 'morris-bar-chart5',
        data: [
        <?php
        $exec=mysql_query("select * from tb_bc16kpi135");
        while($r=mysql_fetch_array($exec)){
        ?>
        {
            kota: '<?php echo $r[1] ?>',
            billing: <?php echo $r[2] ?>,
            collection: <?php echo $r[3] ?>
        },
        <?php
        }
        ?>
        ],
        xkey: 'kota',
        ykeys: ['billing', 'collection'],
        labels: ['billing', 'collection'],
        hideHover: 'auto',
        resize: true
    });

});
</script>
  </body>
</html>
