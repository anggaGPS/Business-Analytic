<!DOCTYPE html>
<html>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
		<?php include "koneksi.php";?>
     

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
			  <form enctype='multipart/form-data' action='?page=bc16kpi135' method='post'>
   <h3 class="box-title">Silahkan Input data CSV</h3>
   <center> <input type='file' name='filename' size='100'> <br>
   <input class="btn btn-block btn-success btn-flat" type='submit' name='submit' value='Upload'></center>
   </form>
			  
                <div class="box-header">
                 
                </div><!-- /.box-header -->
                </div>
			

              <div class="box">
                <div class="box-header">
				
                  <center><h3 class="box-title">Data Table With Full Features</h3></center>
				  <button align="right" class="btn btn-primary" id="tombolExport">
                 Export Excel
               </button>
                </div><!-- /.box-header -->
				
                <div class="box-body">
				
                  <table id="tabelExport" class="table table-bordered table-striped">
	<?php


if(isset($_GET['mode'])=='delete'){
	 $kota=$_GET['kota'];
	 mysql_query("delete from tb_bc16kpi135 where kota='$kota'");
}
?>
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Kota</th>
						<th>Pelanggan Billing</th>
                        <th>Billing</th>
						 
						 <th>Pelanggan Tunggakan</th>
						 <th>Tunggakan</th>
						<th>Pelanggan Collection</th>
						<th>Collection</th>
						<th>Baddebt</th>
						<th>Collection</th>
						<th>Tanggal</th>
						 <th>Aksi</th>
                        
                      </tr>
                    </thead>
                   	<tbody>
					
	 <?php
		$query=mysql_query("SELECT * FROM tb_bc16kpi135");					

		while($row=mysql_fetch_assoc($query)){
			?>
			<tr>
							<td><?php echo $row['id'];?></td>
							<td><?php echo $row['kota'];?></td>
							<td><?php echo $row['pelangganbilling'];?></td>
							<td><?php echo $row['billing'];?></td>
							<td><?php echo $row['pelanggantunggakan'];?></td>
							<td><?php echo $row['tunggakan'];?></td>
							<td><?php echo $row['pelanggancollection'];?></td>
							<td><?php echo $row['collection'];?></td>
							<td><?php echo $row['baddebt'];?></td>
							<td><?php echo $row['persen'];?></td>
							<td><?php echo $row['tanggal'];?></td>
						
				<td><a href="?page=ibc16kpi135&mode=delete&kota=
				<?php echo $row['kota'];?>" onClick="return confirm('Apakah Anda Yakin?')">
				<img src="images/delete.png"></a>
				</td>
				
			</tr>
			<?php
		}
	?>
	</tbody>
                    <tfoot>
                      <tr>
                         <th>Id</th>
                        <th>Kota</th>
						<th>Pelanggan Billing</th>
                        <th>Billing</th>
						 
						 <th>Pelanggan Tunggakan</th>
						 <th>Tunggakan</th>
						<th>Pelanggan Collection</th>
						<th>Collection</th>
						<th>Baddebt</th>
						<th>Collection</th>
						<th>Tanggal</th>
						 <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
  

  </body>
</html>
