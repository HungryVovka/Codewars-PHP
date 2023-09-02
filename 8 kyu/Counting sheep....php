<?php
// -----------------------------------------------------------
// Consider an array/list of sheep where some sheep may be missing from their place. We need a function that counts the number of sheep present in 
// the array (true means present).
// 
// For example,
// 
// [true,  true,  true,  false,
//   true,  true,  true,  true ,
//   true,  false, true,  false,
//   true,  false, false, true ,
//   true,  true,  true,  true ,
//   false, false, true,  true]
// 
// The correct answer would be 17.
// 
// Hint: Don't forget to check for bad values like null/undefined
// -----------------------------------------------------------

function countSheep($sheeps){
	return count(array_filter($sheeps, function($sheep){
		return $sheep == true;
	}));
}

// or

function countSheep($sheeps){
	return array_sum($sheeps);
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