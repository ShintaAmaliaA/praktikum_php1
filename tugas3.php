<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="GET" action="get3.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="130">Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="130">Tempat,Tanggal lahir</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td width="130">Semester</td>
				<td><input type="text" name="semester"></td>
			</tr>
			<tr>
				<td width="130">Program Studi</td>
				<td><input type="text" name="prodi"></td>
			</tr>						
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login"> 
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>