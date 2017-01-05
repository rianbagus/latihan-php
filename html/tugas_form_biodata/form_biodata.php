<?php 
	$nama      = $_GET['nama'];
	$tempat    = $_GET['tempat'];
	$tgl_lahir = $_GET['lahir'];
	$jenis_kel = $_GET['jeke'];
	$gol_darah = $_GET['gol_darah'];
	$alamat    = $_GET['alamat'];
	$foto	   = $_GET['file_gambar'];
	$agama	   = $_GET['agama'];
	$perkawinan= $_GET['status_kawin'];
	$pekerjaan = $_GET['pekerjaan'];
	$negraan   = $_GET['kewarganeraan'];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <table style="widows: 50px; line-height: 20px;">
 <caption>Form Biodata</caption>
 <tr>
	<td>Nama</td>
	<td>:</td>
	<td><?php echo $nama; ?></td>
 </tr>
 <tr>
	<td>Tempat</td>
	<td>:</td>
	<td><?php echo $tempat; ?></td>
 </tr>
 <tr>
	<td>Tgl Lahir</td>
	<td>:</td>
	<td><?php echo $tgl_lahir; ?></td>
 </tr>
 <tr>
	<td>Jenis Kelamin</td>
	<td>:</td>
	<td><?php echo $jenis_kel; ?></td>
 </tr>
 <tr>
	<td>Golongan Darah</td>
	<td>:</td>
	<td><?php echo $gol_darah; ?></td>
 <tr>
	<td>Alamat</td>
	<td>:</td>
	<td><?php echo $alamat; ?></td>
 </tr>
 <tr>
	<td>Foto</td>
	<td>:</td>
	<td><?php echo $foto; ?></td>
 </tr>
 <tr>
	<td>Agama</td>
	<td>:</td>
	<td><?php echo $agama; ?></td>
 </tr>
 <tr>
	<td>Status Perkawinan</td>
	<td>:</td>
	<td><?php echo $perkawinan; ?></td>
 </tr>
 <tr>
	<td>Pekerjaan</td>
	<td>:</td>
	<td><?php echo $pekerjaan;?></td>
 </tr>
 <tr>
	<td>Kewarganegaraan</td>
	<td>:</td>
	<td><?php echo $negraan; ?></td>
 </tr>
 <tr>
	<td>Hobi</td>
	<td>:</td>
	<td><?php 
		if(isset($_GET['simpan'])){
			if(!empty($_GET['hobi'])){
				// $check_count = count($_GET['hobi']);
				foreach($_GET['hobi'] as $selected){
					echo $selected." ,";
				}
			}
		}
	 ?></td>
 </tr>
 </table>

 
 </body>
 </html>