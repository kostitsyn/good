<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">
		

		var answer = parseInt(Math.random() * 100);
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
		
		function generate(){
			

			var lengthPas = readInt();

			var arrayLower = 'abcdefghijklmnopqrstuvwyz';
			var arrayUpper = arrayLower.toUpperCase();
			var arrayNum = '0123456789';
			var arraySymbol = arrayLower + arrayUpper + arrayNum;
			var password = ''

			for (i=0; i < lengthPas; i++){
				var index = parseInt(Math.random() * arraySymbol.length);
				password +=arraySymbol.charAt(index);
			write(password);
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

			<h1>Генератор случайных паролей</h1>

			<div class="box">

				<p id="info">Введите длину желаемого пароля:</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="generate();" id="button">Генерировать</a>

			</div>
		</div>
	</div>
</div>


<div class="footer">
	Copyright &copy; Aleksandr Kostitsyn
<div>


</body>
</html>