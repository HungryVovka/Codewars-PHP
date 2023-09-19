<?php
// -----------------------------------------------------------
// You probably know the "like" system from Facebook and other pages. People can "like" blog posts, pictures or other items. We want to create the 
// text that should be displayed next to such an item.
// 
// Implement the function which takes an array containing the names of people that like an item. It must return the display text as shown in the 
// examples:
// 
// []                                -->  "no one likes this"
// ["Peter"]                         -->  "Peter likes this"
// ["Jacob", "Alex"]                 -->  "Jacob and Alex like this"
// ["Max", "John", "Mark"]           -->  "Max, John and Mark like this"
// ["Alex", "Jacob", "Mark", "Max"]  -->  "Alex, Jacob and 2 others like this"
// 
// Note: For 4 or more names, the number in "and 2 others" simply increases.
// -----------------------------------------------------------

function likes($names){
	switch(count($names)){
		case 0:
			return "no one likes this";
		case 1:
			return sprintf("%s likes this", 
				$names[0]);
		case 2:
			return sprintf("%s and %s like this", 
				$names[0], $names[1]);
		case 3:
			return sprintf("%s, %s and %s like this", 
				$names[0], $names[1], $names[2]);
		default:
			return sprintf("%s, %s and %d others like this", 
				$names[0], $names[1], count($names) - 2);
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