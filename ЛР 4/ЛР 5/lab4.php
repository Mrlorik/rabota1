<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Главное меню</title>
		 <link rel="stylesheet" type="text/css" href="css/lb.css"> 
		 <meta name="viewport" content="width=divice-widtgh, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.css">

		<style> body {
				background: url('img/d99a77aeb546be61d3016f6efa0078fb.jpg');
				background-size: 100%;
			} </style>
	</head>
	<body>
	<div class="container">
<div class="row">
<div class="col-lg-12">
		<div id="container">
		<div id="header">
		Бойцовский клуб <br/>
		<?php
date_default_timezone_set('GMT+3');
echo date(' jS \of m. Y h:i A');
?>
		</div>
		<div class="col-lg-12"><div id="A1"> Xочешь быть крутым как Джеки Чан или как Тайсон Фьюри?<br/>
		Тогда тебе к нам! В наш Бойцовский клуб!<br/>
		Ты можешь выбрать любой вид боевого исскуства, тебя будут обучать великие мастера.<br/>
		Не теряй время и вступай в наш клуб!
	Ты достоен быть учеником нашего клуба!
		</div><br/>
	<p style="text-align: center">
	<img src="img/unnamed.jpg" alt="ТЫ" align="middle" width="50%" /></p>
	<div class="col-lg-12"><div id="mainmenu">
			<td>
				<th>
					<font color="#000000">
						<a href='lab4.php?id=BIskustva'> Боевые искусства</a></th> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<th>
					<font color="#000000">
					<a href='lab4.php?id=kumirs'>Наши кумиры</a></th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<th>
					<font color="#000000">
					<a href='lab4.php?id=pravila'>Правила</a></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<th>
					<font color="#000000">
					<a href='lab4.php?id=gbook'>Гостевая книга</a></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
	</div>
	<?php
			include 'routing.php';
			?>
	</body>
</html>