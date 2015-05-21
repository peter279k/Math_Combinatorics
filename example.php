<?php

	require_once 'Combinatorics.php';

	$combinatorics = new Math_Combinatorics;
	$set = range(0, 9);
	
	$asc_num = 97;
	while ($asc_num<= 122) {
		# code...
		array_push($set, chr($asc_num));
		$asc_num++;
	}

	//組合
	echo $combinations = $combinatorics->combinations($set, 16);
	//排列
	//$permutations = $combinatorics->permutations($set, 16);
?>
