<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Гостевая кинига</title>
		<link rel="stylesheet" type="text/css" href="css/style5.css">
		<meta name="viewport" content="width=divice-widtgh, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.css">
	</head>
	<body>
		<style> body {
				background: url('img/4b30a8cd751f2481b7799f5ba3a7512a.png');
			} </style>
			<div class="container">
	<div class="row">
	<div class="col-lg-12">
		<div id="container">
		<div id="header">
			<h1>Гостевая книга</h1>
			<?php
date_default_timezone_set('GMT+3');
echo date(' jS \of m. Y h:i A');
?>
			</div>
				
		<div class="col-lg-10">
		<div id="A1">Приветствуем в нашем новом разделе "Гостевая книга"! Здесь вы можете заказать столик онлайн!<br/> Вам всеголишь нужно указать несколько пунктов: ФИО, email или номер телефонв, дату и ваши пожелания.<br/> Так же вы можете в строчке "пожелания" указать что вы хотите заказать у нас из еды, если вы укажете, то вам не придется ждать ваше блюдо, мы принесем его вам, когда вы прибудете к нам.</div>
<form class="form-inline">
<div class="col-lg-12">
<form action="form.php" method="post">
	<div class="form-group">
	<div id="form">
		<label class="sr-only" for="inputNaim">ФИО</label>
	<input type="ФИО" class="form-control" id="inputNaim" placeholder="ФИО">	
	</div>
	<div class="col-lg-12">
				<div class="form-group">
				<div id="form">
				<label class="sr-only" for="inputEmail">Email</label>
				<input type="Email" class="form-control" id="inputEmail" placeholder="Email">
</div>
<div class="col-lg-12">
				<div class="form-group">
				<div id="form">
				<label class="sr-only" for="inputPog">Пожелания</label>
				<input type="Пожелания" class="form-control" id="inputPog" placeholder="Пожелания">
				</div>
				<div class="col-lg-12">
				<div class="form-group">
				<div id="form">
				<label class="sr-only" for="inputTaim">Дата и время</label>
				<input type="Дата" class="form-control" id="inputTaim" placeholder="Дата и время">
				</div>
				<button type="submit"
				class="btn btn-primary">
				<div id="form1">
				 <input type="submit" class="btn btn-info" value="Отправить"/>Отправить	</button>
</form>
<div id="form">	
<table border="1" align="center" class="tablr">
	<tr>
		<td>Имя пользователя</td>
		<td>Email</td>
	<td>Пожелания</td>
	<td>Дата и время</td>
	</tr>
	<?php
	include 'bd.php';
	foreach (getALL() as $row)
	{
		echo "<tr><td>" . $row["name"]
		. "</td><td>" . $row ["email"]
		."</td><td>" . $row["text"]
		."</td><?tr>";
	}
	?>
</table>
	</body>
</html>