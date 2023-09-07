<?php
// -----------------------------------------------------------
// Make a function that will return a greeting statement that uses an input; your program should return, "Hello, <name> how are you doing today?".
// 
// [Make sure you type the exact thing I wrote or the program may not execute properly]
// -----------------------------------------------------------

function greet($name){
	return sprintf("Hello, %s how are you doing today?", $name);
}

// or

function greet($name){
	return "Hello, " . $name . " how are you doing today?";
}

// or

function greet($name){
	return "Hello, $name how are you doing today?";
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