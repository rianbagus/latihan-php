<?php 
	$namar = $_GET['nama'];
	$passr = $_GET['pass'];
	$mailr = $_GET['mail'];
	$gender = $_GET['gender'];
	$hoby = $_GET['sepeda'].$_GET['tonton'].$_GET['bola'];
	$agama = $_GET['agama'];
	$alamat = $_GET['alamat'];
	

	// echo $namar;
	// echo $passr;
	// echo $mailr;
 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
	nama  : <?php echo $namar; ?><br>
	pass  : <?php echo $passr; ?><br>
	mailr : <?php echo $mailr; ?><br> 
	gender: <?php echo $gender; ?> <br>
	hoby  : <?php echo $hoby; ?> <br>
	agama : <?php echo $agama; ?> <br>
	alamat: <?php echo $alamat; ?> <br>
	<a href="latihanform.html">Kembali</a>	
 </body>
 </html>

 