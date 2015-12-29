<?php

class ArrayRemover
{
	public function remove($array, $val)
	{
		$check = true;
		
		while($check) {

			if(($key = array_search($val, $array)) !== false) {
			    
			    unset($array[$key]);
			
			} else {

				$check = false;
			}
		}	
		
		return array_values($array);
	}
}

