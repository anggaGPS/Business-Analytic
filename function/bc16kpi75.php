<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Upload page</title>
</head>
<body>
<div id="container">
<div id="form">

<?php
$host='localhost';
$username='root';
$password='rahasia';
$database='db_telkomsel';
mysql_connect($host,$username,$password);
mysql_select_db($database);
     
//Upload File
if (isset($_POST['submit'])) {
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        echo "<h1>" . "File ". $_FILES['filename']['name'] ." Berhasil di Upload" . "</h1>";
        echo "<h2>Menampilkan Hasil Upload:</h2>";
        readfile($_FILES['filename']['tmp_name']);
    }

    // replace data sebelumnya
    $deleterecords = "TRUNCATE TABLE tb_bc16kpi75"; //empty the table of its current records
    mysql_query($deleterecords);

    //Import uploaded file to Database
    $handle = fopen($_FILES['filename']['tmp_name'], "r");

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $import="INSERT into tb_bc16kpi75 (id,kota,billing,collection,persen) values(NULL,'$data[0]','$data[1]','$data[2]','$data[3]')";

        mysql_query($import) or die(mysql_error());
    }

    fclose($handle);

    print "Import data selesai";
   
}else {

    print "Silahkan masukan file csv yang ingin diupload<br />\n";

    print "<form enctype='multipart/form-data' action='#' method='post'>";

    print "File name to import:<br />\n";

    print "<input size='50' type='file' name='filename'><br />\n";

    print "<input type='submit' name='submit' value='Upload'></form>";

}

?>

</div>
</div>
</body>
</html>