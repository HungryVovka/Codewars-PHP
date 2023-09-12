<?php
// -----------------------------------------------------------
// Complete the function that takes two integers (a, b, where a < b) and return an array of all integers between the input parameters, including 
// them.
// 
// For example:
// 
// a = 1
// b = 4
// --> [1, 2, 3, 4]
// -----------------------------------------------------------

function between(int $a, int $b): array {
	$i = 1;
	$arr = array();
	array_push($arr, $a);
	while ($i <= ($b - $a)){
		array_push($arr, $a + $i);
		$i++;
	}
	return $arr;
}

// or

function between(int $a, int $b): array {
	return range($a, $b);
}

// -----------------------------------------------------------
// License
// Tasks are the property of Codewars (https://www.codewars.com/) 
// and users of this resource.
// 
// All solution code in this repository 
// is the personal property of Vladimir Rukavishnikov
// (vladimirrukavishnikovmail@gmail.com).
// 
// Copyright (C) 2023 Vladimir Rukavishnikov
// 
// This file is part of the HungryVovka/Codewars-PHP
// (https://github.com/HungryVovka/Codewars-PHP)
// 
// License is GNU General Public License v3.0
// (https://github.com/HungryVovka/Codewars-PHP/blob/main/LICENSE.md)
// 
// You should have received a copy of the GNU General Public License v3.0
// along with this code. If not, see http://www.gnu.org/licenses/
// -----------------------------------------------------------
>