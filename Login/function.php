<?php
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'marketit');

// variable declaration
$email = "";
//$email    = "";
$errors   = array();
global $email, $password, $Id, $firstName, $lastName, $db;

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM login WHERE loginID=" . $id;
	$result = mysqli_query($db, $query);
	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $email, $errors;

	// grap form values
	$email = e($_POST['email']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($email)) {
		array_push($errors, "email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {

		$query = "SELECT * FROM login WHERE email='$email' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check the Role of the user
			$logged_in_user = mysqli_fetch_assoc($results);
			
			if ($logged_in_user['RoleID'] == 1)
			{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:../Admin');
			}
		else if($logged_in_user['RoleID']== 2)
			{
			$_SESSION['user'] = $logged_in_user;
			$_SESSION['success']  = "You are now logged in";
			header('location:../Customer');
			}
		}else {
			array_push($errors, "Wrong email/password combination");
		}
	}
}

// ...
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['RoleID'] == 1 ) {
		return true;
	}else{
		return false;
	}
}

function isCustomer()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['RoleID'] == 2 ) {
		return true;
	}else{
		return false;
	}
}
