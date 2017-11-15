<?php
	echo "<center>";
	echo "<br>
<br><h3 align=center>PENYEWAAN</h3><br>";
	echo"
	<table border=0 align=center cellpadding=0 bgcolor='020202' width='1000'>
	<tr bgcolor=#66CCCC>
		<th width=10%>NO ID</th>
		<th width=10%>Nama</th>
		<th width=10%>Jenis</th>
		<th width=10%>Nomor Polisi</th>
		<th width=10%>Harga Sewa</th>
		<th width=10%>Gambar</th>
	</tr>
	<tr bgcolor=white align=center>
		<td>6</td>
		<td>Avanza Matic</td>
		<td>MPV</td>
		<td>H 9088 GM</td>
		<td>Rp.300.000</td>
		<td><img src='avanza_matic.jpg' width=300 height=200></td>
	</tr>";
echo "</table>";
echo "<br>";
echo"
<br>
<br>
<center>
<table border=0>
<h3>Form Input Sewa Mobil</h3>
<br>
<form action='save_pasien.php' method='post'>
	<tr>
		<td>ID Member</td>
		<td><select name='jns_kelamin'>
        	<option>01</option>
            <option>02</option>
			<option>03</option>
            <option>04</option>
			<option>05</option>
            <option>06</option>
			<option>07</option>
            <option>08</option>
			<option>09</option>
            <option>10</option></select></td>
	</tr>
	<tr>
		<td>Nama Member</td>
		<td><input type='text' name='nama_pasien'></td>
	</tr>
	<tr>
		<td>No. KTP/SIM</td>
		<td><input type='text' name='nirm'></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type='text' name='alamat_pasien'></td>
	</tr>
	<tr>
		<td>No. HP</td>
		<td><input type='text' name='nirm'></td>
	</tr>
	<tr>
		<td>ID Mobil</td>
		<td><select name='jns_kelamin'>
        	<option>01</option>
            <option>02</option>
			<option>03</option>
            <option>04</option>
			<option>05</option>
            <option>06</option>
			<option>07</option>
            <option>08</option>
			<option>09</option>
            <option>10</option></select></td>
	</tr>
	<tr>
		<td>ID Sopir</td>
		<td><select name='jns_kelamin'>
        	<option>01</option>
            <option>02</option>
			<option>03</option>
            <option>04</option>
			<option>05</option>
            <option>06</option>
			<option>07</option>
            <option>08</option>
			<option>09</option>
            <option>10</option></select></td>
	</tr>
	<tr>
		<td>Tanggal Sewa</td>
		<td><input type='date' name='tgl_lahir'></td>
	</tr>
	<tr>
		<td>Tanggal Kembali</td>
		<td><input type='date' name='tgl_lahir'></td>
	</tr>
	<tr>
		<td>Lama Sewa</td>
		<td><input type='text' name='tgl_lahir'>/Hari</td>
	</tr>
	<tr>
		<td>Harga Sewa</td>
		<td><input type='text' name='tgl_lahir'></td>
	</tr>
    <tr>
    <td>&nbsp </td>
	<td>&nbsp </td>
    </tr>
	<tr>
		<td><button input type='submit' value='Simpan' class=btn>Simpan</button></td>
        <td><button input type='reset' value='Batal' class=btn>Batal</button></td>
	</tr>
	</form>
</table></center>";
echo "</center>";
?>