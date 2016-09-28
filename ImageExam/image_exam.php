<html>
	<head> 
		<meta charset="utf-8">
			<title>Image exam</title> 
			<link type="text/css" href="style.css" rel="stylesheet">
		</meta>
	</head>
	<body>
	
	<div class = "content">
		<h1>Image</h1>
		<div class="image">	
			<?php 
				$i= 1;

				do {
					echo '<img src=" '.$i.'.jpg" width="600" height="300"/>';
					$flagshow = 0;
					if(isset($_GET["show"])){
						$flagshow = $_GET["show"];
						$i++;
					} 
					
				}
				while ($i<=5 && $flagshow==1);
					
			?>
				<a href="image_exam.php?show=1"> Show all </a>
		</div>
		
	</div>	
	
	
	</body>