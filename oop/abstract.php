<?php
// abstract class
// abstract class cannot be instantiated
// you cannot create its object
abstract class Common {
	protected $name;
	protected $age;

	public function getName() {
		return $this->name;
	}

	public function getAge() {
		return $this->age;
	}
	// abstract methods have to be defined by child classes (sub classes)
	// to have an abstract method/function in a class, the class has to be abstract as well
	public abstract function doSomething();
}

class Student extends Common {
	protected $rollno = 10;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}

	public function doSomething() {
		echo "Hello I am abstract method!";
	}
}

//$common = new Common();

$student = new Student("Ram", 22);
echo $student->getName();
echo '<hr>';
$student->doSomething();
