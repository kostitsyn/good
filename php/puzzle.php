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

			<h1>Игра в загадки</h1>

			<div class="box">

				<?php

					if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){
						$userAnswer = strtolower($_GET["userAnswer1"]);
						$score = 0;
						if($userAnswer == "крапива" || $userAnswer == "борщевик"){
							$score++;
						}

						$userAnswer = strtolower($_GET["userAnswer2"]);
						if($userAnswer == "велосипед" || $userAnswer == "мотоцикл"){
							$score++;
						}

						$userAnswer = strtolower($_GET["userAnswer3"]);
						if($userAnswer == "сон" || $userAnswer == "темноту"){
							$score++;
						}

						echo "Вы угадали " . $score . " загадки из 3";
					}
				?>

				<form method="GET">
					<p>Не огонь, а жжется</p>
					<input type="text" name="userAnswer1">

					<p>Этот конь не ест овса<br>Вместо ног два колеса<br>Сядь верхом и мчись на нём<br>Только лучше правь рулём</p>
					<input type="text" name="userAnswer2">

					<p>Что можно увидеть закрытыми глазами?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">
				</form>
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; Aleksandr Kostitsyn
<div>


</body>
</html>