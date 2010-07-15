<?php include 'class.css.php'; ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<style>
			#container {
				width: 200px;
				height: 100px;
				background-color: #333333;
				color: #999999;
				text-shadow: 0px -1px 0px #000000;
				font-family:arial;
				font-size: 40px;
				font-weight: bold;
				text-align: center;
				border: 2px solid #FFFFFF;
				<?php
					echo CSS::prefixer('border-radius',5),
						 CSS::prefixer('box-shadow', '0 0 5px #000000');
				?>
			}
			
			.text {
				font-size: 12px;
				background-color: #999999;
				color: #000000;
				font-size: 12px;
				font-weight: normal;
				margin: 0 auto;
				opacity: 0.5;
				text-shadow: none;
				width: 50%;
				<?php 
				echo CSS::prefixer('border-top-left-radius',10),
					 CSS::prefixer('border-bottom-right-radius','5px'), 
					 CSS::prefixer('opacity',0.5);
				?>
			}
			
		</style>
		
	</head>
	
	<body>
		
		<div id="container">
			Jello.
			<p class="text">in my tummy.</p>
		</div>
	
	</body>
</html>