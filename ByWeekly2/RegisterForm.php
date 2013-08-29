<?php
	require "user.class.php";
	$FirstName = $_POST['FirstName'];
	
	$Username=$_POST['Username'];
	$EmailAddress=$_POST['EmailAddress'];
	$Password=$_POST['Password'];
	
	$symbols ="abcdef.....";
	$charPattern ="'/^def";
	/*if(!$FirstName || !$username ||! $EmailAddress ||! $Password )
	{
		echo "The fields are empty please enter again";
		exit;
	}*/
	

	if("^[A-Z][a-zA-Z]+$")
	{
		echo "The firstname is valid .<br/>";
	}
	else
	{
		echo "Firstname is not valid .<br/>";	
	}
	if("^[A-Z][a-zA-Z]+$")
	{
		echo "The Username is valid .<br/>";
	}
	else
	{
		echo "LastName is not valid";	
	}
	if(preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]/",$EmailAddress))
	{
		echo "Correct email is inserted .<br/>";
	}
	else
	{
		echo "Invalid email,Please try again .<br/>";
	}
	
	//I used regex for understanding of regular expression
	
	if(preg_match("#.*^(?=.{5,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\w).*$#",$Password))
	{
		echo "Password is strong .<br/>";
	}
	else
	{
		echo "Password is to weak .<br/>";
	}
	if(preg_match("/^.(?=.{5,})(?=.[0-9])(?=.[a-z])(?=.[A-Z]).*$/",$Password))
	{
		echo "Password is valid .<br/>";
	}
	
	else
	{
		echo "Password is not valid .<br/>";	
	}
	
?>