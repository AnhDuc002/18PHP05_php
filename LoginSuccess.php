<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thông báo đăng nhập thành công</title>
</head>
<body>
	<form method="POST">
		<h1 style="color: blue;"></h1>
		<p>Nhập tên:
			<input type="text" name="name">
		</p>
		<input type="submit" name="submit" value="Xuất">
	</form>
	<?php 
			$name = $_POST['name'];
			echo "<h3>Chúc mừng $name đã đăng nhập thành công </h3>";	
		
	?>
</body>
</html>