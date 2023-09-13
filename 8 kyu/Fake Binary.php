<?php
// -----------------------------------------------------------
// Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.
// 
// Note: input will never be an empty string
// -----------------------------------------------------------

function fake_bin(string $s): string {
	$binstr = "";
	$fakebin = str_split($s);
	foreach ($fakebin as $f){
		if (intval($f) < 5){
			$binstr .= "0";
		} else {
			$binstr .= "1";
		}
	}
	return $binstr;
}

// or

function fake_bin(string $s): string {
	return strtr($s, "0123456789", "0000011111");
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