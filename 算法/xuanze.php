<?php

/**

*选择排序
*
*选择最小索引值，交换索引数据
*
*时间复杂度（o(n^2))
*/


function sort_select($arr) {

	$len = count($arr);


	//外层循环完成所有元素选择
	for($i=0; $i < $len; $i++) {
		$minInx = $i;

		//内层循环选择一个最小元素的位置
		for($j = $i; $j < $len; $j++) {

			if ($arr[$minInx] > $arr[$j]) {
				$minInx = $j;
			}
		}

		//交换最小元素到有序队列尾部

		if($i != $minInx) {
			$tmp = $arr[$i];
			$arr[$i] = $arr[$minInx];
			$arr[$minInx] = $tmp;
		}
	}

	return $arr;
}



$s = sort_select([23,12,35,22,27,1,23,4,99]);

print_r($s);









