<?php
// Constructor : is a function of a class (with the same name as class or __contruct) which is automatically called when an object is created.
class Common {
	
}

// inheritence
class Student extends Common {
	// member variable of the class Student
	public $name;
	public $age;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}

	// here getName() is the member function of this class
	public function getName() {
		$name = $this->name;
		return $name;
	}

	public function getAge() {
		return $this->age;
	}
}

class Teacher extends Common {
	// member variable of the class Student
	public $name;
	public $age;
	
	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}

	// here getName() is the member function of this class
	public function getName() {
		$name = $this->name;
		return $name;
	}

	public function getAge() {
		return $this->age;
	}
}

$name = "Ram";
$ram = new Student($name, 22);
echo "Name: " . $ram->getName() . ", Age : " . $ram->getAge();
echo '<hr>';
$shyam = new Student("Shyam", 18);
echo "Name: " . $shyam->getName() . ", Age : " . $shyam->getAge();

