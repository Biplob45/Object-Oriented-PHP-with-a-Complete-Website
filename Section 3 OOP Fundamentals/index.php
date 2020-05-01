<?php /* 
This is a single-line comment
()
$
&
# 

	//Classes and methods...
	
	class User{
		public function __construct(){
			//echo "Constructor Called".'<br />';
		}
		public function register(){
			echo "User Register".'<br />';
		}

		public function auth_user($username, $password){
			echo $username.' is Authenticated'.'<br />';
		}

		public function login($username, $password){
			$this->auth_user($username, $password);
		}

		public function __destruct(){
			//echo 'Destrustor Called';
		}
	}

	$User = new User;
	//$User->register();

	$User->login('biplob', '1234')



	//Properties & Visibility[Access Modifier]  ()  $  &  # 

	


	class User{

		//public $id;
		//public $username;
		//public $email;
		//public $password;
		private $id;
		private $username;
		private $email;
		private $password;

		public function __construct($username, $password){
			//echo "Constructor Called".'<br />';
			$this->username = $username;
			$this->password = $password;
		}
		public function register(){
			echo "User Register".'<br />';
		}

		public function auth_user(){
			//echo $this->username.' is Authenticated'.'<br />';
			//echo $this->password.' is Authenticated'.'<br />';
		}

		public function login(){
			
			$this->auth_user();
		}

		public function __destruct(){
			//echo 'Destrustor Called';
		}
	}

	//$User = new User;
	$User = new User('biplob', '1234');

	//$User->register();
	//$User->login();

	//$User->login('biplob', '1234')



	   // __get & __set Magic Methods  () $ &  # 

	class Post{
		private $name;

		public function __set($name, $value){ //undefined property,value
			echo "Setting ". $name. ' to <strong> '.$value.' </strong><br />';
				$this->name = $value;
		}

		public function __get($name){
			echo 'Getting '. $name. ' <strong> '.$this->name.' </strong><br>';
		}

		public function __isset($name){
			echo "Is ". $name. ' Set?<br/ >';
			return isset($this->name);
		}
	}

	$post = new Post();
	$post->name = 'Testing';
	$post->name;
	var_dump(isset($post->name));

*/

	   //Class Inheritance   () $ &  # 

	class First{
		public $id = 23;
		public $name = 'Biplob Orton';

		public function saySomething($word){
			echo $word."World";
		}
	}

	class Second extends First{
		public function getName(){
		echo $this->name;

	}


	$Second = new Second;
	echo $Second->name;
	$Second->saySomething('Hello');

	
	echo $Second->getName();

?>
