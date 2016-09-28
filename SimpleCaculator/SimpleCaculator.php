<html>
	<head> 
		<meta charset="utf-8">
			<title>Caculator (Máy tính)</title> 
			<link type="text/css" href="style.css" rel="stylesheet">
		</meta>
	</head>
	<body>
		<div class="content">
		<?php 	$n1 = "";
				$n2 = "";
				$operations = "";
				if (isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["operation"])){
					$n1 = $_POST["number1"];
					$n2 = $_POST["number2"];
					$operations = $_POST["operation"]	;				
				}
			
				switch($operations){
					case "+":
						$result = $n1+$n2;
						break;
					case "-":
						$result = $n1-$n2;
						break;
					case "*":
					case "x":
						$result =$n1*$n2;
						break;
					case "/":
					case ":":
						$result=$n1/n2;
						break;
					case "%":
						$result=$n1%n2;
						break;
					default :
						$result= "không thực hiện được";
						break;
						
				}
					
		?>
			<h1> Calculator </h1>
			<form action="#" method="post" name="main-form">			
				<div class="row">
					<span>Number 1 :</span> <input type="text" name="number1" value="<?php echo $n1; ?>"/>
				</div>
				<div class="row">
					<span>Operation :</span> <input type="text" name="operation" value="<?php echo $operations; ?>"/>
				</div>
				<div class="row">
					<span>Number 2 :</span> <input type="text" name="number2" value="<?php echo $n2; ?>"/>
				</div>
				<div class="row">
					<input type="submit" name="result"/>
				</div>
				<p>
				<?php 	if(is_numeric($n1) && is_numeric($n2) ){
							if( $operations == "+" or $operations =="-" or $operations=="*" or $operations=="/" or $operations=="x" or $operations=="%"){
								echo "result ".$n1." ".$operations." ".$n2." = ".$result; 	
							}
							else{
								echo "Wrong syntax : (just input + , - , * , / )";
							}
				
				}
						else{
							echo "Just enter number in field number 1 and 2";
						}
				?>
				</p>
				
				
				
			</form>
		</div>		
	</body>
</html>