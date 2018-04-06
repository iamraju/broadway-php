<?php
// static methods are accessed directly without creating an object of the class
// scope resolution operator :: (double colon)
// Syntax: ClassName::staticMethodName()

class Student {
	const _AGE_LIMIT = 18;

	private static $age = 20;

	private $name = "Ram";

	public static function printName() {
		/*echo "The Age Limit is : " . self::_AGE_LIMIT;
		echo "<hr>";
		echo "The Age Given IS : " . self::$age;*/

		
		$_this = (new self);
		echo $_this->name;

		
	}

	public static function Another() {
		echo "another";
	}

	public static function checkAgeValidation($age) {
		if($age < self::_AGE_LIMIT) {
			echo "Not eligible";
		}
		else {
			echo "Eligible";
		}
	}
}

Student::printName();

