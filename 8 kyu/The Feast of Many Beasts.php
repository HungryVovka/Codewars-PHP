<?php
// -----------------------------------------------------------
// All of the animals are having a feast! Each animal is bringing one dish. There is just one rule: the dish must start and end with the same letters as the 
// animal's name. For example, the great blue heron is bringing garlic naan and the chickadee is bringing chocolate cake.
// 
// Write a function feast that takes the animal's name and dish as arguments and returns true or false to indicate whether the beast is allowed to 
// bring the dish to the feast.
// 
// Assume that beast and dish are always lowercase strings, and that each has at least two letters. beast and dish may contain hyphens and 
// spaces, but these will not appear at the beginning or end of the string. They will not contain numerals.
// -----------------------------------------------------------

function feast($beast, $dish){
	return substr($beast, -1) == substr($dish, -1) &&
		substr($beast, 0, 1) == substr($dish, 0, 1);
}

// or

function feast($beast, $dish){
	return $beast[-1] == $dish[-1] && $beast[0] == $dish[0];
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