<!DOCTYPE html>
<html>
<head>
	<title>Form Res=gistrasi</title>
</head>
<body>
	<form action=" " method="post">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim" maxlength="10" minlength="10"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Surel</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$batasNim = strlen($nim);
		# code...
		if ($batasNim = 10) {
			echo "NIM sudah benar<br>";
			# code...
		}elseif ($batasNim < 10 && $batasNim > 10) {
			echo "NIM salah<br>";
			# code...
		}
		include 'prosesregris.php';
		$sql = "INSERT INTO registrasi(nim, nama, email) VALUE('$nim', '$name', '$email')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			echo "<br>Database sudah di input";
			# code...
		}else
		echo "error!!!";
	}
?>
