<?php
// -----------------------------------------------------------
// This kata is about multiplying a given number by eight if it is an even number and by nine otherwise.
// -----------------------------------------------------------

function simpleMultiplication($number){
	if ($number % 2 == 0){
		return $number * 8;
	} else {
		return $number * 9;
	}
}

// or

function simpleMultiplication($number){
	return $number % 2 == 0 ? $number * 8 : $number * 9;
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