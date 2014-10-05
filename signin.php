<?php
session_start();     
error_reporting(E_ERROR | E_WARNING);
require_once 'Services/NATIVERANK/DB.php';
$user = $_SESSION['user'];

if ($_POST) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($mysql->connect_errno) {
    	echo "Connect failed: %s\n", $mysqli->connect_error;
	    exit();
	}

	$query = "SElECT firstname, lastname, email, address, phone, role FROM accounts WHERE email='" . $email . "' AND password='" . md5($password) . "'";

	if ($result = $mysql->query($query)) {
		if ( $account = $result->fetch_object() ) {
			$_SESSION['user'] = $account;
			$_SESSION['userName'] = $account->firstname . " " . $account->lastname;
			$_SESSION['userEmail'] = $account->email;
			$_SESSION['userPhone'] = $account->phone;
			$_SESSION['userRole'] = $account->role;
			header("Location: index.php");
		} else {
			echo "Something went wrong...";
		}
	} else {
		echo "Incorrect email address or password.";
	}
	// var_dump($_SESSION);
}
?>