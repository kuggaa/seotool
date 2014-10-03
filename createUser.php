<?php
session_start();     
error_reporting(E_ERROR | E_WARNING);
require_once 'Services/NATIVERANK/DB.php';
$user = $_SESSION['user'];
if ($user == null)
{
	header("Location: login.php");
} else 
{
	if ($_POST) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$role = $_POST['role'];
		$password = $_POST['password'];

		$stmt = $mysql->prepare('INSERT INTO accounts (firstname, lastname, email, address, phone, role, password) VALUES (?, ?, ?, ?, ?, ?, ?)');
		$stmt->bind_param('sssssss', $firstname, $lastname, $email, $address, $phone, $role, md5($password));
		if ( $stmt->execute() ) {
			header("Location: register.php");
		} else {
			echo "Failed...";
		}
	}
}
?>