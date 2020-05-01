<?php
/* 
This is a single-line comment
()
$
&
# 


		// Static Properties & Methods

	class User{
		public $username;
		public static $minPassLength = 5;

		public static function validatePassword($password){
			if (strlen($password) >= self::$minPassLength) {
				return true;
			}else{
				return false;
			}
		}
	}

	$password = 'password';

	echo User::$minPassLength.'<br />';

	if (User::validatePassword($password)) {
		echo "password is valid";
	}else{
		echo 'password is not valid';
	}




	//15. Abstract Classes & Methods () $ & # 

	
	abstract class Animal{
		public $name;
		public $color;

		public function describe(){
			return $this->name. ' is '. $this->color;
		}

		abstract public function makeSound();
	}


	class Duck extends Animal{
		public function describe(){
			return parent::describe();
		}

		public function makeSound(){
			return 'Quack';
		}
	}


	class Dog extends Animal{
		public function describe(){
			return parent::describe();
		}

		public function makeSound(){
			return 'Bark';
		}
	}

$animal = new Dog();
$animal->name = 'Larry';
$animal->color = 'Brown';

echo $animal->describe();

//echo $animal->makeSound();



//16. Autoloading Classes & Final Keyword () $ & # 

spl_autoload_register(function($class_name){
	include $class_name . '.php';
});


$foo = new Foo;
$bar = new Bar;
echo $foo->foo_function();
echo $bar->bar_function();
echo $bar->foo_function();
*/ 


//   17. Object Iteration  () $ & # 

class People{
	public $personal1 = 'Mike';
	public $personal2 = 'Shelly';
	public $personal3 = 'Jeffy';

	protected $personal4 = 'john';
	private $personal5 = 'jen';


}


$people = new People;

foreach ($people as $key => $value) {
	print "$key => $value\n";
}

//$people->iterateObject();


















?>