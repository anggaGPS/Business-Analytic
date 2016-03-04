<html>
	<head>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'area'
         },   
         title: {
            text: 'Grafik Penjualan '
         },
         xAxis: {
            categories: [<?php echo $row['kota'];?>]
         },
         yAxis: {
            title: {
               text: 'billing terjual'
            }
         },
              series:             
            [
            <?php 
        	include('koneksi.php');
           $sql   = "SELECT kota  FROM tb_bc01kpi60";
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
            	$kota=$ret['kota'];                     
                 $sql_billing   = "SELECT billing FROM tb_bc01kpi60 WHERE kota='$kota'";        
                 $query_billing = mysql_query( $sql_billing ) or die(mysql_error());
                 while( $data = mysql_fetch_array( $query_billing ) ){
                    $billing = $data['billing'];                 
                  }             
                  ?>
                  {
                      name: '<?php echo $kota; ?>',
                      data: [<?php echo $billing; ?>],
                  },
                  <?php } ?>
            ]
      });
   });	
</script>
	</head>
	<body>
		<div id='container'></div>		
	</body>
</html>