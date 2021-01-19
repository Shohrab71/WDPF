<?php


	class Employee
	{
		private $name;
		private $title;
		protected $wage;

		public function setName($uname)
		{
			return $this -> name = $uname;
		}

		public function getName()
		{
			return  $this -> name;
		}

		public function sayHello()
		{
			echo "Welcome  {$this->getName()}";
		}
	} //class Employee

	class programmer extends Employee
	{


		public function setWage($amount)
		{
			$this ->wage = $amount;
		}
		public function getWage()
		{
			return $this ->wage;
		}
		public function bonous($percent)
		{
			echo "Bonous <br>" . $this->wage *$percent/100;
		}
	} //programmer


	$emp1 = new Employee;

	$emp1 -> setName("Hasib");
	//$emp1 -> name = "Rahim";
	$emp1 -> getName();

	$emp2 = new Employee;
	$emp2 -> setName("Monir");
	
	//$emp2 -> sayHello();

	$prog1 = new programmer;
	$prog1 -> setWage(10000);
	$prog1 -> getWage();
	echo $prog1 -> bonous(5);






?>