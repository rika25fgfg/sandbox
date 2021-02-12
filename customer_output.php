<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>会員登録画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php require 'menu.php'; ?>
	<?php 
	    require 'db_connect.php';
		$sql = "INSERT INTO customer VALUES (null,:name, :address, :login, :password)";
		$stm = $pdo->prepare($sql);
		$stm->bindValue(':name',$_POST['name'],PDO::PARAM_STR);
		$stm->bindValue(':address',$_POST['address'],PDO::PARAM_STR);
		$stm->bindValue(':login',$_POST['login'],PDO::PARAM_STR);
		$stm->bindValue(':password',$_POST['password'],PDO::PARAM_STR);

		$stm->execute();
		echo 'お客様情報を登録しました';


	?>

</body>

</html>