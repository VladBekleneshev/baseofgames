<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>BASEOFGAMES - Интернет-магазин видеоигр</title>
	<script type="text/javascript" src="javascript/jquery.js"></script>
	<script type="text/javascript" src="javascript/drop-down_vertical_menu.js"></script>
	<script type="text/javascript" src="javascript/interact-captions.js"></script>
	<script type="text/javascript" src="javascript/clear-search.js"></script>
	<!--
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
-->
	<style>
		.description{
			background-color: white;
			padding: 10px;
		}
		.description p{
			margin: 20px;
			margin-left: 10px;
			font-size: 16px;
		}
		span.first_letter{
			color: orange;
			font-size: 30px;
			margin-left: 10px;
		}
		img{
			float: left;
			width: 130px;
		}
	</style>
</head>
<body>
<div class="header">
	<canvas id="logo" width="500" height="110">
		<!--If browser not support the HTML5 canvas tag-->
		<b style="color:darkblue;text-size:30px;">Base</b> <b style="color:orange;text-size: 30px;">of</b> <b style="color:darkblue;text-size: 30px;">games</b>
	</canvas>
	<script type="text/javascript" src="javascript/logo.js"></script>
</div>
<div class="navigation">
	<ul class="navigation">	
		<li class="navigation"><a class="navigation" href="index.php">Главная</a></li>
		<li class="navigation">
			<div class="spoiler_links"><a class="navigation">Жанры</a>
				<div class="spoiler_body">
					<a class="navigation" href="genre.php?game_genre=action">Экшен</a>
					<a class="navigation" href="genre.php?game_genre=rpg">РПГ</a>
					<a class="navigation" href="genre.php?game_genre=logic">Головоломки</a>
					<a class="navigation" href="genre.php?game_genre=sport">Спортивные</a>
					<a class="navigation" href="genre.php?game_genre=strategy">Стратегии</a>
					<a class="navigation" href="genre.php?game_genre=online">ММО</a>
				</div>
			</div>
		</li>
		<li class="navigation"><a class="navigation" href="#">О сайте</a></li>
		<li class="navigation"><a class="navigation" href="#">Контакты</a></li>
		<form action="search.php" method="post">
			<input type="search" name="search" class="search_box" value="поиск..."></input>
		</form>
	</ul>
</div>
	<div class='section' style='font-size: 20px;'>
        	<p style='padding: 15px;margin: 0px;border-bottom: 5px solid rgb(0,80,120);'>Контакты</p>
    </div>
    <div class='description'>
    	<p>
    		<span class='first_letter'>М</span>еня зовут Бекленищев Влад. Я студент 3 курса (на момент создания этого сайта и вообще курсовой работы)
    		факультета "Прикладной математики". Увлекаюсь программированием и проектированием. Люблю видеоигры, хорошее кино. 
    		Ищу себя :)
   		</p>
   		<p>
			<span class='first_letter'>С</span>вязаться со мной можно такими способами:
			<ol>
				<li>Написать на <b style='color: orange;'>E-mail</b>
					<ul>
						<li>v.bekleneshev@gmail.com</li>
						<li>vladislav23@ukr.net</li>
					</ul>
				</li>
				<li>Написать в социальных сетях
					<ul>
						<li><b style='color: #66CCFF;'>twitter:</b> @vladkinoman</li>
						<li><b style='color: blue;'>facebook:</b> </li>
					</ul>
				</li>
			</ol>
   		</p>
    </div>
<div class="dots">
	<canvas class="canvas_for_dots" width="400" height="40">
		<b style="color:darkblue;text-size:30px;">o</b><b style="color:orange;text-size: 30px;">o</b><b style="color:darkblue;text-size: 30px;">o</b>
	</canvas>
	<script type="text/javascript" src="javascript/dots.js"></script>
</div>
<div class="footer">
	Copyright &copy 2015 &nbsp Влад Бекленищев &nbsp ПК-12-2 &nbsp ДНУ
</div>


</body>
</html>