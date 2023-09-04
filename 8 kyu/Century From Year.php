<?php
// -----------------------------------------------------------
// Introduction
// The first century spans from the year 1 up to and including the year 100, the second century - from the year 101 up to and including the year 200, etc.
// 
// Task
// Given a year, return the century it is in.
// 
// Examples
// 1705 --> 18
// 1900 --> 19
// 1601 --> 17
// 2000 --> 20
// 
// Note: this kata uses strict construction as shown in the description and the examples, you can read more about it here 
// (https://en.wikipedia.org/wiki/Century)
// -----------------------------------------------------------

function centuryFromYear($year){
	return (int)(($year - 1) / 100) + 1;
}

// or

function centuryFromYear($year){
	return (int)(ceil($year / 100));
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