<!DOCTYPE html>
<html>
<head>
	<title>Komentar</title>
</head>
<body>
<center>
	<form action=" " method="POST">
		<table>
			<tr>
				<td><input type="text" name="sentence" placeholder="Masukan komentar"></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
<?php 
	if (isset($_POST['submit'])) {
		$sentence = $_POST['sentence'];
		$separate = explode(" ", $sentence);
		$countSentence = count($separate);

		if ($countSentence < 5) {
			echo "ERROR!! Kata kurang dari 5";
			# code...
		}else
		echo $sentence."<br>Jumlah kata : ".$countSentence;
		# code...
	}
?>
</center>
</body>
</html>