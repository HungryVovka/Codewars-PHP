<?php
// -----------------------------------------------------------
// Nathan loves cycling.
// 
// Because Nathan knows it is important to stay hydrated, he drinks 0.5 litres of water per hour of cycling.
// 
// You get given the time in hours and you need to return the number of litres Nathan will drink, rounded to the smallest value.
// 
// For example:
// 
// time = 3 ----> litres = 1
// 
// time = 6.7---> litres = 3
// 
// time = 11.8--> litres = 5
// -----------------------------------------------------------

function litres(float $t): int{
	return intval($t * 0.5);
}

// or

function litres(float $t): int{
	return floor($t * 0.5);
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