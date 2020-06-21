<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>KrustyKrab</title>
		<link rel="stylesheet" type="text/css" href="css/style1.2.css">
		<meta name="viewport" content="width=divice-widtgh, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.css">
	</head>
	<body>
 <style> body {
	background: url('img/4b30a8cd751f2481b7799f5ba3a7512a.png');} </style>
	<div class="container">
	<div class="row">
	<div class="col-lg-12">
	<div id="container">
	<div id="header">
		
					<h1>KrustyKrab</h1>
					<?php
date_default_timezone_set('GMT+3');
echo date(' jS \of m. Y h:i A');
?>
	</div>
	<div class="col-lg-12">
	<div id="mainmenu">
		<td>
					<th>
						<a href='lab4.php?id=menu'>Меню</a></th> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<th>
						<a href='lab4.php?id=personal'>Персонал</a></th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<th>
						<a href='lab4.php?id=inf'>Информация</a></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<th>
						<a href='lab4.php?id=gbook5'>Гостевая книга</a></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
				</div>	</div><br/>
		<div class="col-lg-12">
		<div id="A1">
		Вы готовы дети отведать самых вкусных крабсбургеров в Бикини Боттом? Тогда вам срочно нужно посетить KrustyKrab! Приходите и порадуйте своими денюжками Мистера Крабса.</div></div><br/><br/><br/>
			<div class="col-lg-12"><div id="A2"><img src="img/Bottle_Burglars_001.png" alt="Ресторан" width="50%"   /></div></div>
			<?php
			include 'routing.php';
			?>
	</body>
</html>