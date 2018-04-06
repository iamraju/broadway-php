<?php
// interface is a blueprint of a class
// where you define the abstract methods that have to be defined in the classes that inherits/extends (implements actually) the interface
// abstract classes can have non abstract methods too but interfaces cannot have any non abstract methods.

interface College {
	const _AGE_LIMIT = 18;

	public function getName();
	public function getAge();
}

Class Common implements College {
	protected $name;
	protected $age;

	public function getName() {
		return $this->name;
	}

	public function getAge(){
		return $this->age;
	}
}

class Student extends Common {
	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}
}

$student = new Student("Ram", 22);
echo $student->getAge();

