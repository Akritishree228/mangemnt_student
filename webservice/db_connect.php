<?php
class DB_Connect{
	public $con;



	//connecting to database
	public function connect()
	{
		require_once 'config.php';

		//connecting to mysql
		$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

		//selecting database

		//return database handler
		return $con;
	}

	// closing database connection
	public function close()
	{
		mysqli_close();
	}
}
?>