<?php
	echo "<center>";
	echo "<br><br><h3 align=center>DATA MEMBER</h3> <br>";
	include 'koneksi.php';
	$tampil=mysql_query("select * from pasien order by id_pasien asc");
	echo"<table border=0 align=center cellpadding=0 bgcolor='020202' width='1000'>
	<tr bgcolor=#66CCCC>
		<th width=20%>NO ID</th>
		<th width=20%>Nama Member</th>
		<th width=20%>Alamat</th>
		<th width=20%>Tanggal Lahir</th>
		<th width=25%>Jenis Kelamin</th>
	</tr>";
	$x=1;
	while ($data=mysql_fetch_array($tampil))
	{
	if ($x%2==0)
	{
		$bg='#FFFFFF';
	}
	else
	{
		$bg='#FFFFFF';
	}
	echo "<tr bgcolor=$bg>";
	echo "<td>";
		echo "<center>$data[nirm]</center></td>";
		echo "<td><center>$data[nama_pasien]</center></td>";
		echo"<td><center>$data[alamat_pasien]</center></td>";
		echo"<td><center>$data[tgl_lahir]</center></td>";
		echo"<td><center>$data[jns_kelamin]</center></td>";
		echo "</tr>";
	$x++;
	}
echo "</table>";
echo "<br><center><a href=index.php?page=input_pasien><b>[Input Member]</b></a></center>";
echo "<br>";
echo "</center>";
?>
