<?php
class Database{
	private $host	= 'localhost';
	private $user	= 'root';
	private $pass	= '123456';
	private $dbname	= 'myblog';

	private $dbh;
	private $error;
	private $stmt;

	public function __construct(){
		// Set DSN
		$dsn = 'mysql:host='. $this->host . ';dbname='. $this->dbname;
		// Set Options
		$options = array(
			PDO::ATTR_PERSISTENT		=> true,
			PDO::ATTR_ERRMODE		=> PDO::ERRMODE_EXCEPTION
		);
		// Create new PDO
		try {
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
		} catch(PDOEception $e){
			$this->error = $e->getMessage();
		}
	}
}