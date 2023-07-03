<?php



/**
 * 希尔排序 标准
 *
 * @param array $lists
 * @return array
 时间复杂度（o(nlogn))
 */


 function shell_sort(array $lists)
 {
	 $n = count($lists);
	 $step = 2;
	 $gap = intval($n / $step);
	 while ($gap > 0) {
	 	for ($gi = 0; $gi < $gap; $gi++) {
	 		for ($i = $gi; $i < $n; $i += $gap) {
	 			$key = $lists[$i];
	 			for ($j = $i - $gap; $j >= 0 && $lists[$j] > $key; $j -= $gap) {
	 				$lists[$j + $gap] = $lists[$j];
	 				$lists[$j] = $key;
	 			}
	 		}
	 	}
	 	$gap = intval($gap / $step);
	 }
	 return $lists;
 }