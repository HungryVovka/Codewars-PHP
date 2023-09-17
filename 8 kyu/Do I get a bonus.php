<?php
// -----------------------------------------------------------
// It's bonus time in the big city! The fatcats are rubbing their paws in anticipation... but who is going to make the most money?
// 
// Build a function that takes in two arguments (salary, bonus). Salary will be an integer, and bonus a boolean.
// 
// If bonus is true, the salary should be multiplied by 10. If bonus is false, the fatcat did not make enough money and must receive only his stated salary.
// 
// Return the total figure the individual will receive as a string prefixed with "£" (= "\u00A3", JS, Go, Java, Scala, and Julia), "$" (C#, C++, Ruby, Clojure, 
// Elixir, PHP, Python, Haskell, and Lua) or "¥" (Rust).
// -----------------------------------------------------------

function bonusTime($salary, $bonus) {
	$sal = "$";
	if ($bonus == true){
		return $sal . ($salary * 10);
	} else {
		return $sal . $salary;
	}
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