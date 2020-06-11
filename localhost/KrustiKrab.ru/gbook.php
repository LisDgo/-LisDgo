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
				<div id="form1">Отправить	</button>
</form>
<div id="table">	
<table class="table"  align="center" bgcolor="#dcfffb" border="1" width="900" height="750">
	<thead>
		<tr>	
					<th><font color="#ea3933">ФИО</th>
					<th >
						<font color="#ea3933">Email</font></th>
					<th><font color="#ea3933">Пожелание</font></th>
					<th><font color="#ea3933">Дата и время</font></th>
			</tr>
			<tr>
			<th>Патрик Стар</th>
				<th>PatrikZvezda@mail.ru</th>
				<th>ЭЭэээээ...</th>
				<th>08.07.2020</th>
			</tr>
			<tr>
			<th>Сенди Чикс</th>
				<th>belkiRULYAT@mail.ru</th>
				<th>Крабсбургер с орешками </th>
				<th>06.06.2020 20:30</th>
			</tr>
			<tr>
			<th>Перл Крабс</th>
				<th>PinkPerli@mail.ru</th>
				<th>Диетический сет + большое к-во еды, для большой компании</th>
				<th>18.06.2020 18:00</th>
			</tr>
			<tr>
			<th>Миссис Пафф</th>
				<th>MissPushhhka2000@mail.ru</th>
				<th>Мне пожалуйста диетическую коллу и грабсбургер</th>
				<th>20.07.2020 15:35</th>
			</tr>
	</thead>
</table><br/>
<div id="A1"><a href='lab4.php'>Вернуться в главное меню </a></div>	
	</body>
</html>