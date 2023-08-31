<?php
// -----------------------------------------------------------
// This code does not execute properly. Try to figure out why.
// -----------------------------------------------------------

function solution($number){
	$mult = 0;
	for ($i = 0; $i < $number; $i++){
		if ($i % 3 == 0){
			$mult += $i;
			continue;
		} else if ($i % 5 == 0){
			$mult += $i;
			continue;
		} else {
			continue;
		}
	}
	return $mult;
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