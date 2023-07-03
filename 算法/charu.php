<?php
/**
 
 *
 *插入排序
 *
 *时间复杂度（o(n^2)
*/


function sort_insert($arr) {

	//外层循环完成所有树的插入
	for($i = 1; $i < count($arr); $i++) {

		$insertVal = $arr[$i];
		$insertIndex = $i - 1;

		//内层循环把大于插入数的都后移， 直到插入位置

		while($insertIndex >=0 && $insertVal < $arr[$insertIndex]) {
			$arr[$insertIndex+1] = $arr[$insertIndex];
			$insertIndex--;
		}

		//找到插入位置
		$arr[$insertIndex+1] = $insertVal;
	}
	return $arr;
}


$s = sort_insert([23,12,35,22,27,1,23,4,99]);


print_r($s);