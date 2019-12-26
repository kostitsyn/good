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
		var gamerNumber = "1";



		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
        }

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}
		
		function guess(){
			var userAnswer = readInt();
			if(userAnswer == answer){
				write("<b>Поздравляю, вы угадали! Победил игрок</b> " + gamerNumber.bold());
				hide("button")
				hide("userAnswer")
			}else if(userAnswer > answer){
				if (gamerNumber == "1"){
				gamerNumber = "2";
				} else{
				gamerNumber = "1";
				}
				write("Число слишком большое. Ходит игрок " + gamerNumber);
			}else if(userAnswer < answer){
				if (gamerNumber == "1"){
				gamerNumber = "2";
				} else{
				gamerNumber = "1";
				}
				write("Число слишком маленькое. Ходит игрок " + gamerNumber);
				
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

			<h1>Угадайка для двух игроков</h1>

			<div class="box">
				<?php
					$answer = rand(1, 100);
					$userAnswer = $_GET["userAnswer"];
					$gamerNumber = "1";
					if ($userAnswer == $answer){
						echo '<b>Поздравляю, вы угадали! Победил игрок</b> ' . $gamerNumber;
					}else if ($userAnswer > $answer){
						if ($gamerNumber == "1"){
							$gamerNumber = "2";
						}else{
							$gamerNumber = "1";
						}echo 'Число слишком большое. Ходит игрок';
					}else if($userAnswer < $answer){
						if ($gamerNumber == "1"){
							$gamerNumber = "2";
						}else{
							$gamerNumber = "1";
						}
					}echo 'Число слишком маленькое. Ходит игрок';

				?>

				<form method="GET">
					<p name="info">Угадайте число от 1 до 100. Ходит игрок 1</p>
					<input type="text" name="userAnswer">
					<br>
					<input type="submit" value="Начать" name="">
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