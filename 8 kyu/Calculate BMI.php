<?php
// -----------------------------------------------------------
// Write function bmi that calculates body mass index (bmi = weight / height2).
// 
// if bmi <= 18.5 return "Underweight"
// 
// if bmi <= 25.0 return "Normal"
// 
// if bmi <= 30.0 return "Overweight"
// 
// if bmi > 30 return "Obese"
// -----------------------------------------------------------

function bmi($weight, $height){
	$bmi = $weight / ($height * $height);
	if ($bmi <= 18.5){
		return "Underweight";
	} elseif ($bmi <= 25.0){
		return "Normal";
	} elseif ($bmi <= 30.0){
		return "Overweight";
	} elseif ($bmi > 30.0){
		return "Obese";
	} else {
		return "Invalid value";
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