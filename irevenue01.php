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
			  <form enctype='multipart/form-data' action='?page=revenue01' method='post'>
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
	 $toa=$_GET['toa'];
	 mysql_query("delete from tb_revenue01 where toa='$toa'");
}
?>
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Toa</th>
                        <th>Tanggal</th>
						
						 <th>Aksi</th>
                        
                      </tr>
                    </thead>
                   	<tbody>
					
	 <?php
		$query=mysql_query("SELECT * FROM tb_revenue01");					

		while($row=mysql_fetch_assoc($query)){
			?>
			<tr>
							<td><?php echo $row['id'];?></td>
							<td><?php echo $row['toa'];?></td>
							<td><?php echo $row['tanggal'];?></td>
						
						
				<td><a href="?page=icostumerbase&mode=delete&toa=
				<?php echo $row['toa'];?>" onClick="return confirm('Apakah Anda Yakin?')">
				<img src="images/delete.png"></a>
				<a href="http://localhost/wm/?true#" method="">
				<img src="images/ceklis.png"></a></td>
				
			</tr>
			<?php
		}
	?>
	</tbody>
                    <tfoot>
                      <tr>
                         <th>Id</th>
                        <th>TOA</th>
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
