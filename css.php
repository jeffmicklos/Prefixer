<?php

function css($property, $value){
	
	$is_border_raduis = preg_match_all('^border[a-z\-]+radius^',$property, $arr, PREG_PATTERN_ORDER);

	if($is_border_raduis == 1){
		
		if(strpos($property, 'top') == true || strpos($property, 'bottom') == true){
			
			$hyphens = explode('-', $property);
			$coords = $hyphens[1].$hyphens[2];
			
			$declaration .= 
				'-moz-border-radius-'.$coords.': '.$value.';'.
				'-webkit-'.$property.': '.$value.';'.
				$property.': '.$value.';';
		
		}
	}
	
	return $declaration;
	
}

?>

<html>
	<head>
	
	</head>
	
	<body>
	
	<?php
	
		echo css('border-top-left-radius','5px');
	
	?>
	
	</body>
</html>