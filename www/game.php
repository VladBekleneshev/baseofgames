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
		.spec_chars{
			display:inline;
			font-size:20px;
			color:orange; 
			margin-left: 5px;
		}
		.game_description{
			margin-top: 40px;
			background-color: white;
		}
		.description{
			background-color: white;
			padding: 10px;
		}
		.description p{
			margin: 20px;
			margin-left: 10px;
			font-size: 16px;
		}
		.submit{
			width:100%;
			height:40px;
			color: black;
			background-color: white;
			font-size: 20px;
		}
		.submit:hover{
			color: black;
			background-color: orange;
		}
		.submit:active{
			color: black;
			background-color:#66CCFF;
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
<div class = "section" style="height:227px;">
<?php
        $id = $_GET['id'];
      	include('db.php');
		$sql = "SELECT * FROM pc_games WHERE id = '$id'";
		$result = mysqli_query($conn, $sql);
		if(!$result)
		{
			echo "Невозможно выполнить запрос.";
			echo "</div>";
		}
		else
		{
			if (mysqli_num_rows($result) == 1) {
    			$row = mysqli_fetch_assoc($result);
        			echo "<div style='width:50%; float:left;'>";
        				echo "<img class='table_images' src='".$row["image"]."'>";
        			echo "</div>";
        			echo "<div style='float:left;'>";
        				echo "<ul style='list-style-type:none;'>";
        					echo "<li><b><p style='font-size:20px;color:orange;'>" . $row["game_name"]."</b>";
        					echo "<li>Разработчик: " . $row["game_developer"];
       						echo "<li>Издатель: " . $row["game_publisher"];
        					echo "<li>Жанр: " . $row["game_genre"];
        					echo "<li>Возрастной рейтинг: " . $row["game_age_rating"]."+";
        					echo "<li>Сервис активации: " . $row["game_activation"];
        					echo "<li style='margin-top:20px;'>Цена: <b><span class='spec_chars'>" 
        					. $row["game_price"]." &euro;</span></b>";
        				echo "</ul>";
        			echo "</div>";
        		echo "</div>";
        			echo "<div class='section' style='font-size: 20px;'>";
        				echo "<p style='padding: 15px;margin: 0px;border-bottom: 5px solid rgb(0,80,120);'>Описание игры</p>";
        			echo "</div>";
        			echo "<div class='description'>";
        				echo "<p >" . $row['game_description'] . "</p>";
        			echo "</div>";
        			echo "<form action='game-buying.php?".$row['game_name']."' method='POST' style='margin-top: 15px;'> ";
        				echo "<input class='submit'".
        				" type='submit'value='Купить'>";
        			echo "</form>";

			} else {
    			echo "Ошибка! Обратитесь к веб-мастеру!";
    			echo "</div>";
			}
		}
		mysqli_close($conn);
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