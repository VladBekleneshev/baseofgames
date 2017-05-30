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
			<input type="search" name="search" class="search_box" value="поиск..." required></input>
		</form>
	</ul>
</div>
<div class="section">
	
			<?php
			
				$activation = $_GET['game_activation'];
      			include('db.php');
				$sql = "SELECT `id`, `image` FROM pc_games WHERE LOCATE('$activation', game_activation);";
				$result = mysqli_query($conn, $sql);
				if(!$result)
					echo "Невозможно выполнить запрос.";
				else
				{
					$num_rows = mysqli_num_rows($result);
					echo "<a class='caption' href='activation.php?game_activation=".$activation."'>";
					echo $activation . " игры</a>";
					echo "<table>";
					if($num_rows == 1)
					{
						$row = mysqli_fetch_assoc($result);
						echo "<tr>";
						echo "<td>";
						echo "<a href='game.php?id=".$row['id']."'>";
						echo "<img class='table_images' src='".$row['image']."' alt=''>";
						echo "</a>";
						echo "</td>";
						echo "<td style = 'width: 50%;'>";
						echo "</td>";
						echo "</tr>";
					}
					else if ($num_rows > 1) {
						while($num_rows != 0)
						{
							$i = 0;
							echo "<tr>";
							while($i!=2)
							{
								$row = mysqli_fetch_assoc($result);
								if(!$row)
									break;
								echo "<td>";
								echo "<a href='game.php?id=".$row['id']."'>";
								echo "<img class='table_images' src='".$row['image']."' alt=''>";
								echo "</a>";
								echo "</td>";
								$i++;
								$num_rows--;
							}
							echo "</tr>";
						}
						
					}
					echo "</table>";
				}
			?>
		
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