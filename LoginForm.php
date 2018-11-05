<?php
	if ( $_POST["name"] || $_POST["age"] ) {
		if (preg_match("/[^A-Za-z'-]/", $_POST['name'])) {
			die ("Biến name không hợp lệ - phải là các chữ cái");
		}
		echo "Chào mừng ".$_POST['name']."<br>";
		echo "Bạn ".$_POST['age']." tuổi";

		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>p
	<meta charset="utf-8">
	<title>Form dăng nhập</title>
</head>
<body>
	<form action="<?php $_PHP_SELF ?>" method="POST">
		<p>Họ tên:
			<input type="text" name="name">
		</p>
		<p>Tuổi:
			<input type="number" name="age">
		</p>
		<input type="submit" name="submit">
	</form>
</body>
</html>