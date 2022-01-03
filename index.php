<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>php</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		<style type="text/css">
			kbd{
				color: white;
				background-color: green;
			}
		</style>
	</head>
	<body>
		<h1 class="text-center text-success">Learn PHP</h1><hr>
		<div class="container"><br>
			<h5>For comments</h5>
			Syntax for single line comments<br>
			1) //<br>
			2) #<br>
			Syntax for multiple line comments:<br>
			/*........*/<br><br>
			<h5>For display the output </h5>
			Syntax: echo 'display the output';<br><br>
			<div>
				<h4>Variables in PHP</h4>
				<p>
					Variables can be used to hold values or expressions.<br>
					A variable in php always starts with a dollar sign. $<br>
					$ is must then contain a letter or underscore.<br>
					It's contain the any of the following.<br>
					A-Z, a-z, 0-9<br>
					A variable can contain any number of letters,<br>
					Before numbers or underscores must start with a letter or underscore.<br>
					Examples:<br>
					$name;<br>$name1;<br>$_name;<br>$Name;<br>$first_name;<br>$middleName;<br>
				</p>
				<?php
				// valid types variable in php
				$name;
				$name1;
				$_name;
				$Name;
				$first_name;
				$myname ="Rabi Kr Yadav"; // assignment defines the type of variable
				echo "$myname"; // it's data type is string
				echo "<br>";
				$num = 15;  // it's data type is integer
				echo "$num";
				echo "<br>";
				$float_num = 15.45; // it's data type is float
				echo "$float_num";
				?>
			</div>
			<br>
			<div>
				<h4>Expression Operators in PHP</h4>
				The combination of operands with an operator to produce a result is called an Expression.<br>
				Operator are used to perform operations on variables and values.<br>
				Examples:<br>
				a = 12;<br>b = 4;<br>
				<?php
				$a = 12;
				$b = 4;
				$sum = $a + $b;
				echo $sum;
				echo '<br>';
				$sub = $a - $b;
				echo $sub;
				?>
			</div>
			<div>
				<h4>Data Types in PHP</h4>
				<ul>
					<li>Integer</li>
					Example:
					<?php
					$num = 98;
					echo $num;
					echo '<br>';
					?>
					<li>String</li>
					Example:
					<?php
					$name = "Rabi Kr Yadav";
					echo "My name is $name.";
					echo "<br>";
					?>
					<li>Float</li>
					Example:
					<?php
					$num = 98.156;
					echo $num;
					echo '<br>';
					?>
					<li>Boolean</li>
					A boolean represents two possible states: TRUE or FALSE.<br>
					Where TRUE = 1; or FALSE = 0;<br>
					<li>Array</li>
					Example: $friends = array('ram','laxman','bharat','satrudhan');<br>echo $friends[0];<br>
					Result:
					<?php
					$friends = array('ram','laxman','bharat','satrudhan');
					echo $friends[0];
					?>
				</ul>
			</div><br><hr><br>
			<div>
				<h2 align="center">Operators in PHP</h2>
				<h3>Arithmatic Operator</h3>
				<ul>
					<li>Addition</li>
					Example:<br>
					$num1 = 18;<br>
					$num2 = 6;<br>
					$sum = $num1 + $num2;<br>
					echo "The Addition of Two Number is: $sum.";<br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 18;
					$num2 = 6;
					$sum = $num1 + $num2;
					echo "The Addition of two Number is: $sum.";
					?>
					<li>Substraction</li>
					Example:<br>
					$num1 = 18;<br>
					$num2 = 6;<br>
					$sub = $num1 - $num2;<br>
					echo "The Subtraction of Two Number is: $sub.";<br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 18;
					$num2 = 6;
					$sub = $num1 - $num2;
					echo "The Subtraction of two Number is: $sub.";
					?>
					<li>Multiplication</li>
					Example:<br>
					$num1 = 18;<br>
					$num2 = 6;<br>
					$mult = $num1 * $num2;<br>
					echo "The Multiplication of Two Number is: $mult.";<br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 18;
					$num2 = 6;
					$mult = $num1 * $num2;
					echo "The Multiplication of two Number is: $mult.";
					?>
					<li>Division</li>
					Example:<br>
					$num1 = 18;<br>
					$num2 = 6;<br>
					$div = $num1 / $num2;<br>
					echo "The Division of Two Number is: $div.";<br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 18;
					$num2 = 6;
					$div = $num1 / $num2;
					echo "The Division of two Number is: $div.";
					?>
					<li>Modulus</li>
					Example:<br>
					$num1 = 18;<br>
					$num2 = 6;<br>
					$mod = $num1 % $num2;<br>
					echo "The Modulus of Two Number is: $mod.";<br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 18;
					$num2 = 6;
					$mod = $num1 % $num2;
					echo "The Modulus of two Number is: $mod.";
					?>
				</ul>
				<br>
			<div>
				<h3>Concatenation Operator</h3>
				The php concatenation operator(.) is used to combine two string values to create one string<br>
				Example 1:<br>
				<code>
				$firstName = 'Rabi';<br>
				$middleName = 'krishna';<br>
				$lastName = 'yadav';<br>
				echo 'My first name is '.$firstName. ' and middle name is '.$middleName. ' and last name is '.$lastName;<br>
				</code><br>
				<kbd>Result:</kbd>
				<?php
				$firstName = 'Rabi';
				$middleName = 'krishna';
				$lastName = 'yadav';
				echo 'My first name is '.$firstName. ' and middle name is '.$middleName. ' and last name is '.$lastName;
				?><br><br>
				Example 2:<br>
				<code>
				$name = 'rabi';<br>
				$name .= 'krishna';<br>
				$name .= 'yadav';<br>
				echo $name;	<br>
				</code><br>
				<kbd>Result:</kbd>
				<?php
				$name = 'rabi';
				$name .= 'krishna';
				$name .= 'yadav';
				echo $name;
				?>
			</div><br>
			<div>
				<h3>Comparison Operator</h3>
				Comparisono operators, as their name implies, allow you to compare two values.<br>
				<ul>
					<li>$a == $b(equal)</li>TRUE if $a is equal to $b.<br>
					Example:<br>
					<code>
					$num1 = 5;<br>
					$num2 = 5;<br>
					if ($num1 == $num2) {<br>
						echo $num1. ' is equal to ' .$num2;<br>
					}	<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 5;
					$num2 = 5;
					if ($num1 == $num2) {
						echo $num1. ' is equal to ' .$num2;
					}
					?><br><br>
					<li>$a != $b(Not equal)</li>TRUE if $a is not equal to $b.<br>
					Example:<br>
					<code>
					$num1 = 5;<br>
					$num2 = 15;<br>
					if ($num1 != $num2) {<br>
						echo $num1. ' is not equal to ' .$num2;<br>
					}	<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 5;
					$num2 = 15;
					if ($num1 != $num2) {
						echo $num1. ' is not equal to ' .$num2;
					}
					?><br><br>
					<li>$a < $b(Less than)</li>TRUE if $a is strictly less than $b.
					Example:<br>
					<code>
					$num1 = 5;<br>
					$num2 = 15;<br>
					if ($num1 < $num2) {<br>
						echo $num1. ' is not greater than ' .$num2;<br>
					}	<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 5;
					$num2 = 15;
					if ($num1 < $num2) {
						echo $num1. ' is less than ' .$num2;
					}else{
						echo $num1. ' is greater than ' .$num2;
					}
					?><br><br>
					<li>$a > $b(Greater than)</li>TRUE if $a is strictly greater than $b.<br>
					Example:<br>
					<code>
					$num1 = 50;<br>
					$num2 = 15;<br>
					if ($num1 > $num2) {<br>
						echo $num1. ' is greater than ' .$num2;<br>
						echo $num1. ' is less than ' .$num2;<br>
					}	<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 50;
					$num2 = 15;
					if ($num1 > $num2) {
						echo $num1. ' is greater than ' .$num2;
					}else{
						echo $num1. ' is less than ' .$num2;
					}
					?><br><br>
					<li>$a <= $b</li>TRUE if $a is less than or equal to $b.<br>
					Example:<br>
					<code>
					$num1 = 5;<br>
					$num2 = 15;<br>
					if ($num1 < $num2) {<br>
						echo $num1. ' is not greater than ' .$num2;<br>
					}	<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 5;
					$num2 = 15;
					if ($num1 < $num2) {
						echo $num1. ' is less than ' .$num2;
					}else{
						echo $num1. ' is greater than ' .$num2;
					}
					?><br><br>
					<li>$a >= $b</li>TRUE if $a is greater than or equal to $a.<br>
					Example:<br>
					<code>
					$num1 = 50;<br>
					$num2 = 15;<br>
					if ($num1 >= $num2) {<br>
						echo $num1. ' is greater than ' .$num2;<br>
						echo $num1. ' is less than ' .$num2;<br>
					}	<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$num1 = 50;
					$num2 = 15;
					if ($num1 >= $num2) {
						echo $num1. ' is greater than ' .$num2;
					}else{
						echo $num1. ' is less than ' .$num2;
					}
					?><br><br>
				</ul>
			</div><br>
			<div>
				<h3>Logical Operator</h3>
				<ul>
					<li>$a and $b(AND)</li>TRUE if both $a and $b are True.<br>
					Example:<br>
					<code>
					$a = 5;<br>
					$b = 10;<br>
					$c = 5;<br>
					if ($a == $b and $a == $c) {<br>
						echo 'true';<br>
					}else{<br>
						echo 'false';<br>
					}<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php 
					$a = 5;
					$b = 10;
					$c = 5;
					if ($a == $b and $a == $c) {
						echo 'true';
					}else{
						echo 'false';
					}
					?><br><br>
					<li>$a or $b(OR)</li>TRUE if either $a or $b is True.<br>
					Example:<br>
					<code>
					$a = 5;<br>
					$b = 10;<br>
					$c = 5;<br>
					if ($a == $b or $a == $c) {<br>
						echo 'true';<br>
					}else{<br>
						echo 'false';<br>
					}<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php 
					$a = 5;
					$b = 10;
					$c = 5;
					if ($a == $b or $a == $c) {
						echo 'true';
					}else{
						echo 'false';
					}
					?><br><br>
					<li>$a xor $b(XOR)</li>TRUE if either $a or $b is True, but not both.<br>
					Example:<br>
					<code>
					$a = 5;<br>
					$b = 10;<br>
					$c = 5;<br>
					if ($a == $b xor $a == $c) {<br>
						echo 'true';<br>
					}else{<br>
						echo 'false';<br>
					}<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php 
					$a = 5;
					$b = 10;
					$c = 5;
					if ($a == $b xor $a == $c) {
						echo 'true';
					}else{
						echo 'false';
					}
					?><br><br>
					<li>$a && $b(AND)</li>TRUE if both $a and $b are True.<br>
					Example:<br>
					<code>
					$a = 5;<br>
					$b = 10;<br>
					$c = 5;<br>
					if ($a == $b && $a == $c) {<br>
						echo 'true';<br>
					}else{<br>
						echo 'false';<br>
					}<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php 
					$a = 5;
					$b = 10;
					$c = 5;
					if ($a == $b && $a == $c) {
						echo 'true';
					}else{
						echo 'false';
					}
					?><br><br>
					<li>$a || $b(OR)</li>TRUE if either $a or $b is True.><br>
					Example:<br>
					<code>
					$a = 5;<br>
					$b = 10;<br>
					$c = 5;<br>
					if ($a == $b || $a == $c) {<br>
						echo 'true';<br>
					}else{<br>
						echo 'false';<br>
					}<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php 
					$a = 5;
					$b = 10;
					$c = 5;
					if ($a == $b || $a == $c) {
						echo 'true';
					}else{
						echo 'false';
					}
					?><br><br>
				</ul>
			</div><br>
			<div>
				<h3>Ternary Operator</h3>
				The ternary operator takes three operands, a condition, a result for true, and a result for false.<br>
				Syntax: (condition) ? true value : false value;<br>
				Example:<br>
				<code>
				$num = 5;<br>
				echo ($num == 5) ? "Yes, It's equal to {$num}" : "Ooh No, It's not equal to {$num}";<br>	
				</code><br>
				<kbd>Result:</kbd>
				<?php
				$num = 5;
				echo ($num == 5) ? "Yes, It's equal to {$num}" : "Ooh No, It's not equal to {$num}";
				?><br><br>
			</div>
			</div><br><hr>
			<div>
				<h6>Find the power of number</h6>
				Example:<br>
				$base = 5;<br>
				$power = 2;<br>
				$powerOfNumber = pow(5,2);<br>
				echo $powerOfNumber;<br>
				<kbd>Result:</kbd>
				<?php
				$base = 5;
				$power = 2;
				$powerOfNumber = pow(5,2);
				echo $powerOfNumber;
				?>
				<br><br>
				<h5>Find the Area Of</h5>
				<ul>
					<li>Circle</li>
					Formula: pi*r2<br>
					Example:<br>
					$pi = 3.141;<br>
					$r = 5;<br>
					$areaOfCircle = $pi*pow($r,2);<br>
					echo $powerOfNumber;<br>
					<kbd>Result:</kbd>
					<?php
					$pi = 3.141;
					$r = 5;
					$areaOfCircle = $pi*pow($r,2);
					echo $areaOfCircle;
					?>
					<li>Triangle</li>Formula = (1/2)bh<br>
					Example:<br>
					$h = 5;<br>
					$b = 3;<br>
					$areaOfTriangle = (1/2)*$h*$b;<br>
					echo $areaOfTriangle;<br>
					<kbd>Result:</kbd>
					<?php
					$h = 5;
					$b = 3;
					$areaOfTriangle = (1/2)*$h*$b;
					echo $areaOfTriangle;
					?>
					<li>Square</li>Formula = a*a<br>
					Example:<br>
					$a = 5;<br>
					$areaOfSquare = pow($a,2);<br>
					echo $areaOfSquare;<br>
					<kbd>Result:</kbd>
					<?php
					$a = 5;
					$areaOfSquare = pow($a,2);
					echo $areaOfSquare;
					?>
					<li>Rectangle</li>Formula = l*w<br>
					Example:<br>
					$l = 5;<br>
					$w = 3;<br>
					$areaOfRectangle =$l * $w;<br>
					echo $areaOfRectangle;<br>
					<kbd>Result:</kbd>
					<?php
					$l = 5;
					$w = 3;
					$areaOfRectangle = $l * $w;
					echo $areaOfRectangle;
					?>
				</ul>
			</div>
			<h4>Single Quotes & Double Quotes</h4>
			<ul>
				<li>Single Quotes(' ')</li>
				The simplest way to specify a string is to enclose it in single quotes.<br>
				Single quote is generally faster, and everything quoted inside treated as plain string.<br>
				Examples:<br>
				<?php
				$name = 'rabi';
				echo 'my name is rabi' // this is perfect
				//eho 'my name is $name' "it's not show the output"
						// echo 'my name in single quotes \'rabi\' ';	 // like this we can use single quotes
				?>
				<li>Double Quotes(" ")</li>
				Double quotes allow you to use \n,\r and \t and variables.<br>
				An important point here is that you can use curly{}braces to isolate the name of the varialbe you want evaluated.<br>
				Examples:<br>
				<?php
				$fname = "rabi";
				$mname = "krishna";
				$lname = "yadav";
				echo "My name is $fname <br>"; // here we can use variable
				echo "My middle name is '$mname' <br>";
				echo "my last name is {$lname} ";
				?>
			</ul>
			<br><hr><br>
			<div>
				<h4>Conditional Statement</h4>
				<ul>
					<li>if statement</li>
					The if statement executes some code if one condition is true.<br>
					Example:<br>
					<code>
					$day = 'sunday';<br>
					if ($day =="sunday") {<br>
					echo 'Today is holiday';<br>
					}<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$day = 'sunday';
					if ($day =="sunday") {
						echo 'Today is holiday';
					}
					?>
					<br><br>
					<li>if...else statement</li>
					The if...else statement executes some code if a condition is true and another code if that condition is false.<br>
					Example:<br>
					<code>
					$day = 'monday';<br>
					if ($day =="sunday") {<br>
					echo 'Today is holiday';<br>
					}else<br>
					{<br>
					echo 'Today is not holiday';<br>
					}<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$day = 'monday';
					if ($day =="sunday") {
						echo 'Today is holiday';
					}else
					{
						echo 'Today is not holiday';
					}
					?>
					<br><br>
					<li>if...elseif..else statement</li>
					The if...elseif..else statement executes different codes for more than two conditions.<br>
					Syntax:<br>
					if (condition) {<br>
					// code...<br>
					}elseif (condition) {<br>
					// code...<br>
					}else{<br>
					// code..<br>
					}<br>
					Example:<br>
					<code>
					$num = 20;<br>
					if ($num % 2 == 0) {<br>
					echo 'Multiples of 2';<br>
					}elseif ($num % 3 == 0) {<br>
					echo 'Multiples of 3';<br>
					}else{<br>
					echo 'god know';<br>
					}<br>
					</code><br>
					<kbd>Result:</kbd>
					<?php
					$num = 20;
					if ($num % 2 == 0) {
						echo 'Multiples of 2';
					}elseif ($num % 3 == 0) {
						echo 'Multiples of 3';
					}else{
						echo 'god know';
					}
					?>
				</ul>
			</div><br><hr><br>
		</div>
	</body>
</html>