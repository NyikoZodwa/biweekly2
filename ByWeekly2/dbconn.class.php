<?php
	class DatabaseConection
	{
		public $localhost = "localhost";
		public $user ="root";
		public $dbconn ="usermanagement";
		public $password='';
		
		function establishConnection()
		{
			$connection = mysql_connect($this->localhost,$this->user,$this->password);
			mysql_select_db($this->dbconn);
			return $connection;
		}
		function execute($query)
		{
			$myQuery =mysql_query($query);
			#$resultsSet =mysql_fetch_assoc($resultsSet);
			if($row = mysql_affected_rows()==1)
			{
				return 'Successfully Registered  <br>';
			}else
			{
				return 'ERROR could not add Information to database <br>';
			}

		}
		
	}
?>