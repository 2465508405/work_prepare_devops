<?php



function bubble($arr ) {


	$length = count($arr);
	$flag = false;
	for ($i=1; $i< $length;$i++) {

		for($j = 0; $j < $length-$i; $j++) {

			if($arr[$j] > $arr[$j+1]) {
				list($arr[$j], $arr[$j+1]) = array($arr[$j+1], $arr[$j]);
				$flag = true;
			}
		}
		if(!$flag) {
			break;
		}

	}

	return $arr;
	
}


$a = bubble([23,12,35,22,27,1,23,4,99]);


print_r($a);