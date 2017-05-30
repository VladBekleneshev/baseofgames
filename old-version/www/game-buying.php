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
	<style>
		input.form_buying{
			display: block;
			height: 30px;
			width: 50%;
			font-size: 18px;
		}
		input.submit_from_form_buying{
			width: 130px;
		}
		form.form_buying{
				
		}
		p.form_buying{
			margin-left: 32%;
			color: white;
		}
		select.form_buying{
			
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
<div class = "section" style="background-color: rgb(0,80,120);">
	<p style='font-size:18px; color:orange;'>Покупка игры</p>
<form method='POST' class='form_buying' style=''>
	<p class='form_buying'>
		<label>Имя:</label>
		<input type='text' name='name' class='form_buying'>
	</p>
	<p class='form_buying'>
		<label>Фамилия:</label>
		<input type='text' name='surname' class='form_buying'>
	</p>
	<p class='form_buying'>
		<label>E-mail:</label>
		<input type='text' name='mail' class='form_buying'>
	</p>
	<p class='form_buying'>
		<label>Страна:</label><br>
		<select name="country"  style="" class='form_buying'>
				<option value="Belorus">Беларусь</option>
				<option value="Russia">Россия</option>
				<option value="Ukraine">Украина</option>
		</select>
		<input type='submit'value='Купить' class='submit_from_form_buying'>
	</p>
</form>
</div>
<?php
	if(isset($_POST['name']) && isset($_POST['mail']) && isset($_GET['game_name']))
	{
		include('db.php');
        $name = mysql_real_escape_string($_POST['name']);
        $mail = mysql_real_escape_string($_POST['mail']);
        $game_name = mysql_real_escape_string($_GET['game_name']);
		$sql = "SELECT game_code FROM game_activation WHERE game_name = '$game_name'";
		$result = mysqli_query($conn, $sql);
		if(!$result)
			echo "Невозможно выполнить запрос.";
		else
		{
			if (mysqli_num_rows($result) >= 1) {
    			//$row = mysqli_fetch_assoc($result);
        			
        			
			} else {
    			echo "Ошибка! Обратитесь к веб-мастеру!";
			}
		}
		mysqli_close($conn);
	}
?>

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