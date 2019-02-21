<?php 
		include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data dari tanggal</title>
</head>
<body>
	<center> 
		<h2>Data dari Tangga</h2>
		<br/><br/><br/>
		<form method="get">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal2">
			<input type="submit" value="FILTER">
		</form>
		<br/> <br/>
		<table border="1">
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
			</tr>
			<?php 
			$no = 1;
 
			if(isset($_GET['tanggal'])){
				$tgl = $_GET['tanggal'];
				$tgl2 = $_GET['tanggal2'];
				$sql = mysqli_query($koneksi,"SELECT * from barang_masuk where tanggal between '$tgl' and '$tgl2'");
			}else{
				$sql = mysqli_query($koneksi,"SELECT * from barang_masuk");
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jumlah']; ?></td>
			</tr>
			<?php 
			}
			?>
		</table>
 
	</center>
</body>
</html>