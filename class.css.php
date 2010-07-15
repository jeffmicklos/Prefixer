<?php

class CSS {

	public static $units = 'px';
	
	function prefixer($property, $value){

		if(preg_match_all('^border[a-z\-]+radius^',$property, $arr, PREG_PATTERN_ORDER) == 1) {
			return self::border_raduis($property, $value);
		} else if($property == 'opacity') {
			return self::opacity($value);
		} else {
			return self::decalartion_builder(self::general_builder($property, $value));
		}
		
	}
	
	public static function border_raduis($property, $value) {
	
		if(is_numeric($value)) {
			$value = $value.self::$units;
		}
		
		if(strpos($property, 'top') == true || strpos($property, 'bottom') == true){
			
			$hyphens = explode('-', $property);
			$coords = $hyphens[1].$hyphens[2];
			
			$decalartion = array(
				'-moz-border-radius-'.$coords => $value,
				'-webkit-'.$property 		 => $value,
				$property 					 => $value);
				
		}else {				
			$decalartion = self::general_builder($property, $value);
		}

		return self::decalartion_builder($decalartion);
		
	}
	
	public static function opacity($value) {
		
		$percent = $value * 100;
		
		$decalartion = array(
			'opacity' 	 => $value,
			'-ms-filter' => 'progid:DXImageTransform.Microsoft.Alpha(Opacity='.$percent.')',
			'filter' 	 => 'alpha(opacity='.$percent.')');
		
		return self::decalartion_builder($decalartion);
	}
	
	private static function general_builder($property, $value) {
		
		return array(
			'-moz-'.$property => $value,
			'-webkit-'.$property => $value,
			$property => $value);
		
	}
	
	private static function decalartion_builder($decalartions) {
		
		foreach($decalartions as $property => $value) {
			
			$decalartion .= $property.': '.$value.';';
			
		}
		
		return $decalartion;
		
	}
	
}

?>