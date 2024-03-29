<?php
// -----------------------------------------------------------
// In this simple exercise, you will build a program that takes a value, integer , and returns a list of its multiples up to another value, limit . If 
// limit is a multiple of integer, it should be included as well. There will only ever be positive integers passed into the function, not consisting of 0. 
// The limit will always be higher than the base.
// 
// For example, if the parameters passed are (2, 6), the function should return [2, 4, 6] as 2, 4, and 6 are the multiples of 2 up to 6.
// -----------------------------------------------------------

function findMultiples(int $integer, int $limit): array{
	$answer = [];
	for ($i = $integer; $i <= $limit; $i += $integer){
		array_push($answer, $i);
	}
	return $answer;
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