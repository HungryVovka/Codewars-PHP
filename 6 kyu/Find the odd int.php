<?php
// -----------------------------------------------------------
// Given an array of integers, find the one that appears an odd number of times.
// 
// There will always be only one integer that appears an odd number of times.
// 
// Examples
// [7] should return 7, because it occurs 1 time (which is odd).
// [0] should return 0, because it occurs 1 time (which is odd).
// [1,1,2] should return 2, because it occurs 1 time (which is odd).
// [0,1,0,1,0] should return 0, because it occurs 3 times (which is odd).
// [1,2,2,3,3,3,4,3,3,3,2,2,1] should return 4, because it appears 1 time (which is odd).
// -----------------------------------------------------------

function findIt(array $seq) : int {
	foreach ($seq as $i){
		if (array_count_values($seq)[$i] % 2 != 0){
			return $i;
		}
	}
	return -1;
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