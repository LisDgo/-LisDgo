<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<br/><br/><title>Меню</title>
		<link rel="stylesheet" type="text/css" href="css/style2.2.css">
		<meta name="viewport" content="width=divice-widtgh, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.css">
		<style> body {
				background: url('img/4b30a8cd751f2481b7799f5ba3a7512a.png');
			} </style>
	</head>
	<body>
	<div class="container">
	<div class="row">
	<div class="col-lg-12">
		<div id="T1">Меню<br/>
		<?php
date_default_timezone_set('GMT+3');
echo date(' jS \of m. Y h:i A');
?></div><br/><br/><br/><br/><br/>
		<div class="col-lg-12">
		<div id="A1"><a href='lab4.php'>Вернуться в главное меню </a></div>
		<br/>
		<div class="col-lg-12">
		<div id="table"><table align="center" bgcolor="#dcfffb" border="1" width="900" height="750">
			<tr>	
					<th><font color="#ea3933">Вид</th>
					<th >
						<font color="#ea3933">Блюда</font></th>
					<th><font color="#ea3933">Цена</font></th>
			</tr>
			<tr>
			<th width="300"><img src="img/Krabby_Patty_transparentpng.png" alt="Крабсбургер" width="35%" /></th>
				<th>Крабсбургер</th>
				<th>$2.00</th>
			</tr>
			<tr>
			<th width="300"><img src="img/Le_Big_Switch_003.png" alt="Красти комбо" width="45%" /></th>
				<th>Красти Комбо</th>
				<th>$3.99</th>
			</tr>
			<tr>
			<th width="300"><img src="img/zmfi1nkrp2ny.png" alt="Красти делюкс" width="65%" /></th>
				<th>Красти Делюкс</th>
				<th>$3.00</th>
			</tr>
			<tr>
			<th width="300"><img src="img/Безымянный.png" alt="Салат" width="90%"/></th>
				<th>Салат из морских водорослей</th>
				<th>$1.50</th>
			</tr>
			<tr>
			<th width="300"><img src="img/Без названия.png" alt="Кусочки кораллов" width="65%" /></th>
				<th>Кусочки кораллов</th>
				<th>$1.95</th>
					</tr>
				</table></div>
		<b><h3><mark>*Возврат денег гарантирован!</mark><br/>
		<mark>**Но это не точно</mark></h3>
	</body>
</html>