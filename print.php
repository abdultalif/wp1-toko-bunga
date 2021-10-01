<!DOCTYPE html>
<html>
<head>
	<title>Kwitansi Pembayaran</title>
	<hr/>
	<style >
		body{
			font-family: arial;
		}
		.print{
			margin-top: 10px;
		}
		@media print{
			.print{
				display: none;
			}
		}
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body onload="window.print()">
	
	<h3 align="center">Kwitansi Pembayaran Bunga</h3>
	
	<table border="1" cellpadding="4" width="100%">
		<tr>
			<th>No</th>
			<th>Nama Pembeli</th>
			<th>Nama Bunga</th>
			<th>Harga</th>
			<th>Jumlah Beli</th>
			<th>Total</th>	
			<th>Uang Anda</th>
			<th>Kembalian</th>
		</tr>

		<?php $no = 1; ?>
		<tr style="text-align: center;">
			<td><?= $no++ ?></td>
			<td><?= $_POST['nama'] ?></td>
			<td><?= $_POST['bunga'] ?></td>
			<td><?=  number_format($_POST['harga']) ?></td>
			<td><?= $_POST['jml'] ?></td>
			<td><?= number_format($_POST['total']) ?></td>
			<td><?= number_format($_POST['bayar']) ?></td>
			<td><?= number_format($_POST['kembalian']) ?></td>
		</tr>


	</table>
<table width="100%">
	<br>
	<tr>
		<td></td>
		<td width="200px">
			<p>Bogor , <?= date('d/m/y') ?> <br/>
				Toko Bunga,
			<br/>
			<br/>
			<br/>
		<p>__________________________</p>
		</td>
	</tr>
</table>



</body>
</html>