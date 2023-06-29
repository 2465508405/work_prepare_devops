<?php
/**


 *递归思想

*/


function sort_quick($arr) {

	if(count($arr) < 1) return $arr;

    
	$key = $arr[0];
	$left_array = [];
	$right_arry = [];

	//左边数组都比右边数组小
	for( $i =1; $i < count($arr); $i++) {
		if($arr[$i] < $key) {
			$left_array[] = $arr[$i];
		} else {
			$right_arry[] = $arr[$i];
		}
	}

	$left_array = sort_quick($left_array);
	$right_arry = sort_quick($right_arry);

	return array_merge($left_array,array($key), $right_arry);
}

$s = sort_quick(array(7,2,21,6,29, 56, 98,2,3,6,236,99));


print_r($s);