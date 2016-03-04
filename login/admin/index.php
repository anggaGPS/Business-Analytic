<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>Halaman Login</h1>
		<h2>carikode.com</h2>
		<div id="kotak">
			<form action="proses.php" method="post">
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="uname"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pass"></td>
					</tr>
					<tr>
						<td>Login Sebagai</td>
						<td>
							<select name="sebagai">
								<option value="admin">Admin</option>
								<option value="guru">Guru</option>
								<option value="siswa">Siswa</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Login"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>