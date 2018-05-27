<?php
  $username = "";
  $email = "";
  $errors = array();

  //connect to the database
  $db = mysql_connect('localhost','root','','registration');
  //if the register button is clicked
  if (isset($_POST['register'])){
  	$username = mysql_real_escape_string($_POST['username']);
  	$email = mysql_real_escape_string($_POST['email']);
  	$password_1 = mysql_real_escape_string($_POST['password_1']);
  	$password_2 = mysql_real_escape_string($_POST['password_2']);
  	//ensure that form fields are filled properly 
  	if (empty($username)){
  		array_push($errors, "username is required")
  	}
  	if (empty($email)){
  		array_push($errors, "Email is required")
  	}
  	if (empty($password_1)){
  		array_push($errors, "Password is required")
  	}
  	if ($password_1 != $password_2) {
  		array_push($errors, "The two Password do not match")

  	}
  	// if there are no errors, save user to database
  	if (count($errors) == 0){
  		$Password = mds($password_1);
  		$sql = "INSERT INTO users (username,email,Password) VALUES('$username','$email','$Password')";
  		mysql_query($db,$sql);
  	}
  }