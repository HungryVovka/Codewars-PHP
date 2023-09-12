<?php
// -----------------------------------------------------------
// Your function takes two arguments:
// 
// current father's age (years)
// current age of his son (years)
// Сalculate how many years ago the father was twice as old as his son (or in how many years he will be twice as old). The answer is always greater or 
// equal to 0, no matter if it was in the past or it is in the future.
// -----------------------------------------------------------

function twice_as_old($dad_years_old, $son_years_old){
	$age = $dad_years_old - $son_years_old * 2;
	if ($age >= 0){
		return $age;
	} else {
		return 0 - $age;
	}
}

// or

function twice_as_old($dad_years_old, $son_years_old){
	return abs($dad_years_old - ($son_years_old * 2));
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