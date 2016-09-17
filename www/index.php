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
		<li class="navigation"><a class="navigation" href="about-site.php">О сайте</a></li>
		<li class="navigation"><a class="navigation" href="contacts.php">Контакты</a></li>

		<form action="search.php" method="post">
			<input type="search" name="search" class="search_box" value="поиск..." required></input>
		</form>

	</ul>
</div>
<!-- Slyder!
-->
<div class="slider">
	<img src="images/games/metal_gear_solid5_ground_zeroes.jpg" alt="" class="slide_show">
	<br>
	<a class="slide_text" href="new.php">Новинки</a>
</div>
<script type="text/javascript" src="javascript/slider.js">
</script>
<div class="section">
<table>
	<caption style="padding:15px;">Игры для активации в популярных сервисах цифровой дистрибуции</caption>
	<tr>
		<td>
			<a class="table_images" href="activation.php?game_activation=Steam">
				<img class="table_images" src="images/games_for_steam.jpg" alt=""></a>
		</td>
		<td>
			<a class="table_images" href="activation.php?game_activation=Origin">
				<img class="table_images" src="images/games_for_origin.jpg" alt="">
			</a>
		</td>
		<td>
			<a class="table_images" href="activation.php?game_activation=Uplay">
				<img class="table_images" src="images/games_for_uplay.jpg" alt="">
			</a>
		</td>
	</tr>
</table>
</div>
<div class="dots">
	<canvas class="canvas_for_dots" width="400" height="40">
		<b style="color:darkblue;text-size:30px;">o</b><b style="color:orange;text-size: 30px;">o</b><b style="color:darkblue;text-size: 30px;">o</b>
	</canvas>
</div>
<div class="section">
	<a class="caption" href="#">Лидеры продаж</a>
<table>
		<tr>
			<td>
				<a href="game.php?id=3"><img class="table_images" src="images/games/cs_global_offensive.jpg" alt=""></a>
			</td>
			<td>
				<a href="game.php?id=12"><img class="table_images" src="images/games/far_cry4.jpg" alt=""></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="game.php?id=6"><img class="table_images" src="images/games/dayz.jpg" alt=""></a>
			</td>
			<td>
				<a href="game.php?id=5"><img class="table_images" src="images/games/dark_souls2.jpg" alt=""></a>
			</td>
		</tr>
</table>
</div>
<div class="dots">
	<canvas class="canvas_for_dots" width="400" height="40">
		<!--If browser not support the HTML5 canvas tag-->
		<b style="color:darkblue;text-size:30px;">o</b><b style="color:orange;text-size: 30px;">o</b><b style="color:darkblue;text-size: 30px;">o</b>
	</canvas>
	<script type="text/javascript" src="javascript/dots.js"></script>
</div>
<div class="section">
	<a class="caption" href="#">Скидки</a>
<table>
			<tr>
				<td>
					<a href="game.php?id=16">
					<img class="table_images" src="images/games/half-life2.jpg" alt="">
					</a>
				</td>
				<td>
					<a href="game.php?id=19">
					<img class="table_images" src="images/games/the_crew.jpg" alt="">
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="game.php?id=20">
					<img class="table_images" src="images/games/civilization5.jpg" alt="">
					</a>
				</td>
				<td>
					<a href="game.php?id=2">
					<img class="table_images" src="images/games/unity.jpg" alt="">
					</a>
				</td>
			</tr>
		</table>
</div>
<div class="dots">
	<canvas class="canvas_for_dots" width="400" height="40">
		<!--If browser not support the HTML5 canvas tag-->
		<b style="color:darkblue;text-size:30px;">o</b><b style="color:orange;text-size: 30px;">o</b><b style="color:darkblue;text-size: 30px;">o</b>
	</canvas>
	<script type="text/javascript" src="javascript/dots.js"></script>
</div>
<div class="section">
	<a class="caption" href="#">Бесплатные игры</a>
		<table>
			<tr>
				<td class="inner_tables">
					<a href="game.php?id=7">
					<img class="table_images" src="images/games/dota2.jpg" alt="">
					</a>
				</td>
				<td class="inner_tables">
					<a href="game.php?id=21">
					<img class="table_images" src="images/games/tf2.jpg" alt="">
					</a>
				</td>
			</tr>
			<tr>
				<td class="inner_tables">
					<a href="game.php?id=22">
					<img class="table_images" src="images/games/warframe.jpg" alt="">
					</a>
				</td>
				<td class="inner_tables">
					<a href="game.php?id=23">
					<img class="table_images" src="images/games/war_thunder.jpg" alt="">
					</a>
				</td>
			</tr>
		</table>
</div>
<div class="dots">
	<canvas class="canvas_for_dots" width="400" height="40">
		<!--If browser not support the HTML5 canvas tag-->
		<b style="color:darkblue;text-size:30px;">o</b><b style="color:orange;text-size: 30px;">o</b><b style="color:darkblue;text-size: 30px;">o</b>
	</canvas>
	<script type="text/javascript" src="javascript/dots.js"></script>
</div>
<div class="footer">
Copyright &copy 2015 &nbsp Влад Бекленищев ПК-12-2 ФПМ ДНУ 
</div>
</body>
</html>