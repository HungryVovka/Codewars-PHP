<?php
// -----------------------------------------------------------
// Build a function that returns an array of integers from n to 1 where n>0.
// 
// Example : n=5 --> [5,4,3,2,1]
// -----------------------------------------------------------

function reverseSeq($n){
	$arr = [];
	for ($i = $n; $i > 0; $i--){
		array_push($arr, $i);
	}
	return $arr;
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