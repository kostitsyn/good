<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">


		do{
		var answer = parseInt(Math.random() * 100);
		}while(answer == 0);
		var tryCount = 0;
		var maxTryCount = 3;

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){
			tryCount++;

			var userAnswer = readInt();
			if(userAnswer == answer){
				write("<b>Поздравляю, вы угадали!</b>");
				hide("button");
				hide("userAnswer");
			} else if(tryCount >= maxTryCount){
				write("Вы проиграли<br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
			} else if(userAnswer > answer){
				write("Вы ввели слишком большое число<br>Попробуйте еще раз. Введите число от 1 до 100. У вас осталось " + (maxTryCount - tryCount) + " попытки.");
			} else if(userAnswer < answer){
				write("Вы ввели слишком маленькое число<br>Попробуйте еще раз. Введите число от 1 до 100. У вас осталось " + (maxTryCount - tryCount) + " попытки.");				
			}
		}

	</script>
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>	

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра угадайка</h1>

			<div class="box">

				<?php
					if(isset($_GET["userAnswer"])){
						$answer = rand(1, 100);
						$tryCount = 0;
						$maxTryCount = 3;

						$userAnswer = (int)$userAnswer;
						for($i = 0; $i < $maxTryCount; $i++){
							$userAnswer = $_GET["userAnswer"];
							$tryCount++;
							if($userAnswer == $answer){
							echo 'Поздравляю, вы угадали!';
							}else if($tryCount >= $maxTryCount){
								echo 'Вы проиграли<br>Правильный ответ ' . $answer;
							}else if($userAnswer < $answer){
								echo 'Вы ввели слишком маленькое число<br>Попробуйте еще раз. Введите число от 1 до 100.<br>У вас осталось ' . ($maxTryCount - $tryCount) . ' попытки.';
							}else if($userAnswer > $answer){
								echo 'Вы ввели слишком большое число<br>Попробуйте еще раз. Введите число от 1 до 100.<br>У вас осталось ' . ($maxTryCount - $tryCount) . ' попытки.';
							}
						}		
					}
				?>

				<form method="GET">
					<p id="info">Угадайте число от 0 до 100</p>
					<input type="text" name="userAnswer">
					<br>
					<input type="submit" value="Начать" name="">
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