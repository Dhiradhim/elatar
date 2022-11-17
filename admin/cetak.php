<?php 
	include 'koneksi.php';
	$id_suara=$_GET['id_suara'];
	$q = mysqli_query($con, "SELECT * FROM detail WHERE id_suara=$id_suara ORDER BY id") or die(mysqli_connect_error());
	$row = mysqli_fetch_assoc($q);
	$run = mysqli_num_rows($q);
	$count = 1;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Perkara nomor <?=$row['noper']?></title>
</head>
<body>
		<center><h1>Pengadilan Agama Kupang</h1>
		<h2>Jl. Kejora, Oebobo, Kota Kupang</h2><br></center>
		
		<h3>No. Perkara : <?=$row['noper']?></h3>
		<h3>Nama : <?=$row['nama']?></h3>
	
				
					<table border="2">
						<thead>
                            <tr>
                                <th><div align="center">No</div></th>
                                <th><div align="center">Pesan</div></th>
                            </tr>
                        </thead>
                        <tbody>
						<?php do { ?>
							<tr>
								<td><div align="center"><?php echo $count; ?></div></td>
								<td><div><?php echo $row['pesan']; ?></div></td>
							</tr>
						<?php 
						$count++;
						} while ($row = mysqli_fetch_assoc($q)); 
						?>
                         </tbody>
				</table><br>
				
				<script>
					window.print();
					// window.close();
				</script>	
	
</body>
</html>