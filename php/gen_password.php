<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>	

<div class="contentWrap">
	<div class="content">
		<div class="center">

			<h1>Генератор случайных паролей</h1>

			<div class="box">

				<?php

					$lengthPas = ($_GET["userInput"]);
					$lengthPas = (int)$lengthPas;
					$arrayLower = "abcdefghijklmnopqrstuvwyz";
					$arrayUpper = strtoupper($arrayLower);
					$arrayNum = "0123456789";
					$arraySymbol = $arrayLower . $arrayUpper . $arrayNum;
					$password = '';

					for ($i = 0; $i < $lengthPas; $i++){
						$index = rand(0, strlen($arraySymbol));
						$password = $password . $arraySymbol {$index};
					}
					echo $password;

				?>

				<form method="GET">

					<p>Введите длину желаемого пароля:</p>
					<input type="text" name="userInput">
					<br>
					<input type="submit" value="Генерировать" name=""> 

				</form>

			</div>
		</div>
	</div>
</div>


<div class="footer">
	Copyright &copy; Aleksandr Kostitsyn
<div>


</body>
</html>