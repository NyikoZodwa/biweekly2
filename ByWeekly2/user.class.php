<?php
	 require "dbconn.class.php";
	class User
	{
		public $username;
		public $email;
		public $password;
		function __constructor($username,$email)
		{
			$this->username=$username;
			$this->email=$email;
			
		}
		function setPassword($password)
		{
			$this->password =md5($password);
		}
		function dispalayUserInfo()
		{
			print "The username is " + $this->username + "The email address is" + $this->email;
		}
		function save($username,$email,$password)
		{
			$database=new DatabaseConection;
			$connect=$database->establishConnection();
			$query="INSERT into users(username,email,password)values('".$username."','".$email."','".$password."')";
			#$query = "INSERT into users (username, email, password) values('".mysql_escape_string($username)."','".mysql_escape_string($email)."','".mysql_escape_string($password)."')";
			echo $database->execute($query);
		}
		
		
	}
	
	
?>