<html>
	<head>
		<title>
			
		</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div class="form1">
		<h1>Rover 1</h1>
		<form >
			<p>Type the cordinates x and y you wish your rover to move to</p>

			<input type="text" name="r1x" placeholder="type the cordinate x">
			<input type="text" name="r1y" placeholder="type the cordinate y">

			<button name="submit1cord" type="submit" value="submit">Submit</button>

			<p>Choose one of the following letters M for forword R for right L for left to turn the rover or move it by 1 grid point to the direction it is heading</p>

			<select name="r1letter" >
				
				<option value="M">M</option>
				<option value="R">R</option>
				<option value="L">L</option>

			</select>

			<button name="submit1let" type="submit" value="submit">Submit</button>

		</form>
		</div>

		<div class = "form 2">
			<h1>Rover 2</h1>
		    <form action="">
			<p>Type the cordinates x and y you wish your rover to move to</p>

			<input type="text" name="r2x" placeholder="type the cordinate x">
			<input type="text" name="r2y" placeholder="type the cordinate y">

			<button name="submit2cord" type="submit" value="submit">Submit</button>

			<p>Choose one of the following letters M for forword R for right L for left to turn the rover or move it by 1 grid point to the direction it is heading </p>

			<select name="r2letter" >
				
				
				<option value="M">M</option>
				<option value="R">R</option>
				<option value="L">L</option>

			</select>

			<button name="submit2let" type="submit" value="submit">Submit</button>
		</form>
		</div>
			
			<?php

				$x1 = 0;
				$y1 = 0;
				$facing1 = 'N';

				$x2 = 0;
				$y2 = 0;
				$facing2 = 'W';

			?>

			<?php



				echo "<br><br>";
				echo "<p class = 'form1'>"."The starting position of the rover 1 is:".$x1." ".$y1." facing ".$facing1."</p>";

				if(isset($_GET['submit1let'])){


					if($facing1 == 'N'){
						if ($_GET['r1letter'] == 'R') {
							$facing1 = 'Ε';
						}elseif ($_GET['r1letter'] == 'L') {
							$facing1 = 'W';
						}elseif($_GET['r1letter'] == 'M'){
							$y1 = $y1 + 1;
						}
					}elseif ($facing1 == 'S') {
						if ($_GET['r1letter'] == 'R') {
							$facing1 = 'W';
						}elseif ($_GET['r1letter'] == 'L') {
							$facing1 = 'E';
						}elseif($_GET['r1letter'] == 'M'){
							if($y1 - 1 >= 0){
								$y1 = $y1 - 1;
							}else{
								echo "<br>";
								echo "<p class='results'>"."You cant move that way choose somethink else"."</p>";
							}
						}
					}elseif ($facing1 == 'W') {
						if ($_GET['r1letter'] == 'R') {
							$facing1 = 'N';
						}elseif ($_GET['r1letter'] == 'L') {
							$facing1 = 'S';
						}elseif($_GET['r1letter'] == 'M'){
							$x1 = $x1 + 1;
						}
					}elseif ($facing1 == 'E') {
						if ($_GET['r1letter'] == 'R') {
							$facing1 = 'S';
						}elseif ($_GET['r1letter'] == 'L') {
							$facing1 = 'N';
						}elseif($_GET['r1letter'] == 'M'){
							if($x1 - 1 >= 0){
								$x1 = $x1 - 1;
							}else{
								echo "<br>";
								echo "<p class='results'>"."You cant move that way choose somethink else"."</p>";
							}
						}
					}
					echo "<br>";
					echo "<p class='results'>"."The new cordinates of Rover 1 is :".$x1." ".$y1." and it is facing ".$facing1."</p>";
				}

				echo "<br><br>";
				echo "<p class='form2'>"."The starting position of the rover 2 is:".$x2." ".$y2." facing ".$facing2."</p>";

				if(isset($_GET['submit2let'])){

					if($facing2 == 'N'){
						if ($_GET['r2letter'] == 'R') {
							$facing2 = 'Ε';
						}elseif ($_GET['r2letter'] == 'L') {
							$facing2 = 'W';
						}elseif($_GET['r2letter'] == 'M'){
							$y2 = $y2 + 1;
						}
					}elseif ($facing2 == 'S') {
						if ($_GET['r2letter'] == 'R') {
							$facing2 = 'W';
						}elseif ($_GET['r2letter'] == 'L') {
							$facing2 = 'E';
						}elseif($_GET['r2letter'] == 'M'){
							if($y2 - 1 >= 0){
								$y2 = $y2 - 1;
							}else{
								echo "<br>";
								echo "<p class='results'>"."You cant move that way choose somethink else"."</p>";
							}
						}
					}elseif ($facing2 == 'W') {
						if ($_GET['r2letter'] == 'R') {
							$facing2 = 'N';
						}elseif ($_GET['r2letter'] == 'L') {
							$facing2 = 'S';
						}elseif($_GET['r2letter'] == 'M'){
							$x2 = $x2 + 1;
						}
					}elseif ($facing2 == 'E') {
						if ($_GET['r2letter'] == 'R') {
							$facing2 = 'S';
						}elseif ($_GET['r2letter'] == 'L') {
							$facing2 = 'N';
						}elseif($_GET['r2letter'] == 'M'){
							if($x2 - 1 >= 0){
								$x2 = $x2 - 1;
							}else{
								echo "<br>";
								echo "<p class='results'>"."You cant move that way choose somethink else"."</p>";
							}
						}
					}
					echo "<br>";
					echo "<p class='results'>"."The new cordinates of Rover 2 is :".$x2." ".$y2." and it is facing ".$facing2."</p>";

				}

				if (isset($_GET['submit1cord'])) {
					if($_GET['r1x'] >= 0 && $_GET['r1y'] >= 0  ){
						$x1 = $_GET['r1x'];

						$y1 = $_GET['r1y'];
						echo "<br>";
						echo "<p class='results'>"."The new cordinates of the rover are :".$x1." ".$y1." and it is facing: ".$facing1."</p>";
					}else{
						echo "<br>";
						echo "<p class='results'>"."you cant choose negative cordinates try again"."</p>";
					}
										
				}

				if (isset($_GET['submit2cord'])) {
					if($_GET['r2x'] >= 0 && $_GET['r2y'] >= 0  ){
						$x2 = $_GET['r2x'];
						$y2 = $_GET['r2y'];
						echo "<br>";
						echo "<p class='results'>"."The new cordinates of the rover are :".$x2." ".$y2." and it is facing: ".$facing2."</p>";
					}else{ 
						echo "<br>";
						echo "<p class='results'>"."you cant choose negative cordinates try again"."</p>";
					}
										
				}



				
			?>
		</form>
	</body>
</html>