<html>
<head>
<title>Upload page</title>
</head>
<body>
<div id="container">
<div id="form">
<?php
	include "koneksi.php";
 
if (isset($_POST['submit'])) {//Script akan berjalan jika di tekan tombol submit..
 
//Script Upload File..
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        echo "<h1>" . "File ". $_FILES['filename']['name'] ." Berhasil di Upload" . "</h1>";
        echo "<h2>Menampilkan Hasil Upload:</h2>";
        readfile($_FILES['filename']['tmp_name']);
    }
 
    //Import uploaded file to Database, Letakan dibawah sini..
    $handle = fopen($_FILES['filename']['tmp_name'], "r"); //Membuka file dan membacanya
    while (($data = fgetcsv($handle, 1000000, ",")) !== FALSE) {
        $import="INSERT into tb_master 
		(id,CUSTID, BAID, LAID, misdn,ACCOUNT, 	IMONTH, 	IYEAR, 	AME, 	COMPAME, 	COMPAMEFIX, 	ALAMAT1, 	ALAMAT2, 	CITY, 	ZIPCODE, 	CUSTGROUP, 	INVOICENO, 	CFB, 	OPENBALNCE, 	DISCMONFEE, 	LOCAL, 	LOCALDISC, 	SLJJ, 	SLJJDISC, 	SLI, 	SLIDISC, 	SMS, 	SMSDISC, 	GPRS, 	GPRSDISC, 	MMS, 	MMSDISC, 	DVPNONCALL, 	OVPNONCALL, 	DVPNONSMS, 	OVPNONSMS, 	INTROAM, 	IRD, 	RL, 	RGPRS, 	IRGPRSDISC, 	DISCISMS, 	SMSINT, 	SMSINTD, 	VMB, 	FARIDANF, 	IBF, 	CU, 	SIMTOPUP, 	MDATA, 	SMSBANK, 	WIFI, 	TNTC, 	TTC, 	PPN, 	NETPAYMNT, 	TOTADJS, 	TOTBILLA, 	TOA, 	NPWP, 	PAYTYPE, 	DUTYSTMP, 	PREVPOINT, 	CURRPOINT, 	BONSPOINT, 	REDEPOINT, 	AREDPOINT, 	CURRPACK, 	GPRSPA, 	APNSTP, 	BBABN, 	BBINST, 	VENTUSABN, 	BONUSG, 	BONLOS, 	BONSALES, 	DPA, 	POINECC, 	POINENC, 	BMOABN, 	FLASHABN, 	FLASHSTP, 	FLASHINST, 	IPHONEABN, 	IPHONEPNT, 	IPHONEINST, 	EMPDISC, 	TOTMDMINST, 	UMA, 	TERBILANG1, 	TERBILANG2, 	AMOUNT1, 	AMOUNT2, 	BILLCYCLE, 	BBM, 	FLAG, 	GPRSALLOW, 	NOTGPRS, 	FLASHPLTY, 	DISCLOCAL, 	DISCSLJJ, 	DISCSLI, 	DISCSMS, 	DISCGPRS, 	DISCMMS, 	DISCIROAM, 	DISCGPRSIR, 	AM, 	Human, 	NonHuman, 	tanggal 
)
 values(NULL,'$data[0]','$data[1]',	'$data[2]',	'$data[3]',	'$data[4]',	'$data[5]',	'$data[6]',	'$data[7]',	'$data[8]',	'$data[9]',	'$data[10]',	'$data[11]',	'$data[12]',	'$data[13]',	'$data[14]',	'$data[15]',	'$data[16]',	'$data[17]',	'$data[18]',	'$data[19]',	'$data[20]',	'$data[21]',	'$data[22]',	'$data[23]',	'$data[24]',	'$data[25]',	'$data[26]',	'$data[27]',	'$data[28]',	'$data[29]',	'$data[30]',	'$data[31]',	'$data[32]',	'$data[33]',	'$data[34]',	'$data[35]',	'$data[36]',	'$data[37]',	'$data[38]',	'$data[39]',	'$data[40]',	'$data[41]',	'$data[42]',	'$data[43]',	'$data[44]',	'$data[45]',	'$data[46]',	'$data[47]',	'$data[48]',	'$data[49]',	'$data[50]',	'$data[51]',	'$data[52]',	'$data[53]',	'$data[54]',	'$data[55]',	'$data[56]',	'$data[57]',	'$data[58]',	'$data[59]',	'$data[60]',	'$data[61]',	'$data[62]',	'$data[63]',	'$data[64]',	'$data[65]',	'$data[66]',	'$data[67]',	'$data[68]',	'$data[69]',	'$data[70]',	'$data[71]',	'$data[72]',	'$data[73]',	'$data[74]',	'$data[75]',	'$data[76]',	'$data[77]',	'$data[78]',	'$data[79]',	'$data[80]',	'$data[81]',	'$data[82]',	'$data[83]',	'$data[84]',	'$data[85]',	'$data[86]',	'$data[87]',	'$data[88]',	'$data[89]',	'$data[90]',	'$data[91]',	'$data[92]',	'$data[93]',	'$data[94]',	'$data[95]',	'$data[96]',	'$data[97]',	'$data[98]',	'$data[99]',	'$data[100]',	'$data[101]',	'$data[102]',	'$data[103]',	'$data[104]',	'$data[105]',	'$data[106]',	'$data[107]',	'$data[108]',	'$data[109]')"; //data array sesuaikan dengan jumlah kolom pada CSV anda mulai dari “0” bukan “1”
        mysql_query($import) or die(mysql_error()); //Melakukan Import
    }
 
    fclose($handle); //Menutup CSV file
    echo "<br><strong>Import data selesai.</strong>";
    
}else { //Jika belum menekan tombol submit, form dibawah akan muncul.. ?>
 
<!-- Form Untuk Upload File CSV-->
   Silahkan masukan file csv yang ingin diupload<br /> 
   <form enctype='multipart/form-data' action='' method='post'>
    Cari CSV File anda:<br />
    <input type='file' name='filename' size='100'>
   <input type='submit' name='submit' value='Upload'></form>
 
<?php } mysql_close(); //Menutup koneksi SQL?>

</html><br><br><br>