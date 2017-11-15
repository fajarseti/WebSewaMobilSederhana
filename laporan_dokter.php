<?php
	echo "<center>";
	echo "<br>
<br><h3 align=center>DATA MOBIL</h3> <br>";
	echo"
	<table border=0 align=center cellpadding=0 bgcolor='020202' width='1000'>
	<tr bgcolor=#66CCCC>
		<th width=10%>NO ID</th>
		<th width=10%>Nama</th>
		<th width=10%>Jenis</th>
		<th width=10%>Nomor Polisi</th>
		<th width=10%>Harga Sewa</th>
		<th width=10%>Gambar</th>
		<th width=10%>Opsi</th>
	</tr>
	<tr bgcolor=white align=center>
		<td>1</td>
		<td>Kijang Innova</td>
		<td>MPV</td>
		<td>H 711 TG</td>
		<td>Rp.400.000</td>
		<td><img src='Innova.jpg' width=300 height=200></td>
		<td><a href=index.php?page=input_sewa><font color='blue'><u>Sewa</u></a></td>
	</tr>
	<tr bgcolor=white align=center>
		<td>2</td>
		<td>Avanza G</td>
		<td>MPV</td>
		<td>H 9972 HD</td>
		<td>Rp.300.000</td>
		<td><img src='Avanza.jpg' width=300 height=200></td>
		<td><a href=index.php?page=input_sewa><font color='blue'><u>Sewa</u></a></td>
	</tr>
	<tr bgcolor=white align=center>
		<td>3</td>
		<td>Avanza Veloz</td>
		<td>MPV</td>
		<td>H 9188 HM</td>
		<td>Rp.300.000</td>
		<td><img src='veloz.jpg' width=300 height=200></td>
		<td><a href=index.php?page=input_sewa><font color='blue'><u>Sewa</u></a></td>
	</tr>
	<tr bgcolor=white align=center>
		<td>4</td>
		<td>Jazz Putih</td>
		<td>Hatchback</td>
		<td>H 711 NR</td>
		<td>Rp.400.000</td>
		<td><img src='jazz_putih.jpg' width=300 height=200></td>
		<td><a href=index.php?page=input_sewa><font color='blue'><u>Sewa</u></a></td>
	</tr>
	<tr bgcolor=white align=center>
		<td>5</td>
		<td>Jazz Kuning</td>
		<td>Hatchback</td>
		<td>-</td>
		<td>Rp.400.000</td>
		<td><img src='jazz_kuning.jpg' width=300 height=200></td>
		<td><a href=index.php?page=input_sewa><font color='blue'><u>Sewa</u></a></td>
	</tr>
	<tr bgcolor=white align=center>
		<td>6</td>
		<td>Avanza Matic</td>
		<td>MPV</td>
		<td>H 9088 GM</td>
		<td>Rp.300.000</td>
		<td><img src='avanza_matic.jpg' width=300 height=200></td>
		<td><a href=index.php?page=input_sewa><font color='blue'><u>Sewa</u></a></td>
	</tr>";
echo "</table>";
echo "<br>";
echo "<center><a href=index.php?page=input_dokter><b>[Tambah Data Mobil]</b></a></center>";
echo "</center>";
?>