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
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
	<ul>	
		<li><a class="navigation" href="index.php">Главная</a></li>
		<li>
			<div class="spoiler_links"><a class="navigation" href="genres.php">Жанры</a>
				<div class="spoiler_body">
					<a class="navigation" href="action.php">Экшен</a>
					<a class="navigation" href="rpg.php">РПГ</a>
					<a class="navigation" href="logic.php">Головоломки</a>
					<a class="navigation" href="sport.php">Спортивные</a>
					<a class="navigation" href="strategy.php">Стратегии</a>
					<a class="navigation" href="mmo.php">ММО</a>
				</div>
			</div>
		</li>
		<li><a class="navigation" href="#">О сайте</a></li>
		<li><a class="navigation" href="#">Контакты</a></li>
		<input class="search" value="поиск..."></input>
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
			<a class="table_images" href="games-for-steam.php">
				<img class="table_images" src="images/games_for_steam.jpg" alt=""></a>
		</td>
		<td>
			<a class="table_images" href="games-for-origin.php">
				<img class="table_images" src="images/games_for_origin.jpg" alt="">
			</a>
		</td>
		<td>
			<a class="table_images" href="games-for-uplay.php">
				<img class="table_images" src="images/games_for_uplay.jpg" alt="">
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
</div>
<div class="section">
	<a class="caption" href="most-popular.php">Лидеры продаж</a>
<table>
			<tr>
				<td>
					<img class="table_images" src="images/games/cs_global_offensive.jpg" alt="">
				</td>
				<td>
					<img class="table_images" src="images/games/far_cry4.jpg" alt="">
				</td>
			</tr>
			<tr>
				<td>
					<img class="table_images" src="images/games/dayz.jpg" alt="">
				</td>
				<td>
					<img class="table_images" src="images/games/dark_souls2.jpg" alt="">
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
	<a class="caption" href="sales.php">Скидки</a>
<table>
			<tr>
				<td>
					<img class="table_images" src="images/games/half-life2.jpg" alt="">
				</td>
				<td>
					<img class="table_images" src="images/games/the_crew.jpg" alt="">
				</td>
			</tr>
			<tr>
				<td>
					<img class="table_images" src="images/games/civilization5.jpg" alt="">
				</td>
				<td>
					<img class="table_images" src="images/games/unity.jpg" alt="">
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
	<a class="caption" href="free-to-play.php">Бесплатные игры</a>
		<table>
			<tr>
				<td class="inner_tables">
					<img class="table_images" src="images/games/dota2.jpg" alt="">
				</td>
				<td class="inner_tables">
					<img class="table_images" src="images/games/tf2.jpg" alt="">
				</td>
			</tr>
			<tr>
				<td class="inner_tables">
					<img class="table_images" src="images/games/warframe.jpg" alt="">
				</td>
				<td class="inner_tables">
					<img class="table_images" src="images/games/war_thunder.jpg" alt="">
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
	<a class="caption" href="best_price.php">Игры в ценовой категории...</a>
		<table>
			<!--<caption><a class="caption" href="best_price.php">Игры в ценовой категории...</a></caption>-->
			<tr>
				<td class="inner_tables">
					<img class="table_images" src="images/games/dark_souls_ptde.jpg" alt="">
				</td>
				<td class="inner_tables">
					<img class="table_images" src="images/games/fifa14.jpg"  alt="">
				</td>
			</tr>
			<tr>
				<td class="inner_tables">
					<img class="table_images" src="images/games/dragon_age_inq.jpg" alt="">
				</td>
				<td class="inner_tables">
					<img class="table_images" src="images/games/arma3.jpg" alt="">
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
Copyright &copy 2015 &nbsp Влад Бекленищев ПК-12-2 ДНУ 
</div>
</body>
</html>