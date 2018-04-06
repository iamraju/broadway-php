<?php
// access modifier or visivility

class Common {
	// member variable of the class Student
	protected $name;
	protected $age;

	// here getName() is the member function of this class
	public function getName() {
		$name = $this->name;
		return $name;
	}

	public function getAge() {
		return $this->age;
	}
}

// inheritence
class Student extends Common {
	protected $rollno = 10;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}
}

class Student1 extends Student {
	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
		echo $this->rollno;
	}
}

$student = new Student("Ram", 22);
$student1 = new Student1("Shyam", 12);
echo $student->getName();
echo '<hr>';
echo $student1->getName();
die;
