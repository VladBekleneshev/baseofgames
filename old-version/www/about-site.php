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
		span{
			color: orange;
			font-size: 30px;
			margin-left: 10px;
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
        	<p style='padding: 15px;margin: 0px;border-bottom: 5px solid rgb(0,80,120);'>О сайте</p>
    </div>
    <div class='description'>
    	<p>
   			<span>В</span>еб-сайт BaseOfGames не является коммерческим проектом, а
   			представляет из себя результат работы над курсовой по предмету Базы данных и информационные системы" ("Data bases and information systems").
   		</p>
   		<p>
   			<span>В</span>се данные по видеоиграм (изображения, информация о жанрах и создателях) не были согласованы с разработчиками и
   			издателями. Все коды активации при покупке игры не являются действительными! Они были вымышлены лишь для того
   			чтобы симитировать механизм покупки продукта (электронной версии игры) через интернет.
   		</p>
   		<p>
   			<span>С</span>айт создан студентом 3 курса группы ПК-12-2 факультета "Прикладной математики" Бекленищевым Владиславом.
   		</p>
   		<p>
   			<u style='color:rgb(0,80,120);'>Примечание для работы с сайтом</u>: для правильного отображения некоторых страниц (например "главной" и "жанров")
   			лучше открывать сайт<br>
   			<ul>
   				<li>на десктопе или ноутбуке с OS Windows при помощи браузеров "Google Chrome" или "Opera".
   				<li>на смартфоне или планшете с OS Android при помощи стандартного браузера либо браузера "Google Chrome".
   			</ul>
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