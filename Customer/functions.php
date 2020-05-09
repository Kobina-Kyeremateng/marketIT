<?php
session_start();
$con=mysqli_connect('localhost','root','','marketit');

$username = "";
$email = "";
$errors = array();

//to call the register() function when register_btn is clicked
if(isset($_POST['register_btn'])){
      register();}


//To register a User
function register(){
                    //call these variables with the global keyword making them available in functions
                    global $con, $errors, $username, $email;

                    //to retrieve all inputs from the form. We will call the e() functions
                    $username = e($_POST['username']);
                    $email = e($_POST['email']);
                    $password_1 = e($_POST['password_1']);
                    $password_2 = e($_POST['password_2']);

                          //form validation: this is to make sure that the form is filled correctly
                          if(empty($username)){
                            array_push($errors, "Username is required");
                          }

                          if(empty($email)){
                            array_push($errors, "E-Mail is required");
                          }

                          if(empty($password_1)){
                            array_push($errors, "Password is required");
                          }

                          if($password_1 != $password_2){
                            array_push($errors, "The two passwords do not match");
                          }

                        //register user if there are no errors in the form
                        if (count($errors) == 0) {
                      		$password = md5($password_1);//encrypt the password before saving in the database

                      		if (isset($_POST['user_type'])) {
                      			$user_type = e($_POST['user_type']);
                      			$query = "INSERT INTO users (username, email, user_type, password)
                      					  VALUES('$username', '$email', '$user_type', '$password')";
                      			mysqli_query($db, $query);
                      			$_SESSION['success']  = "New user successfully created!!";
                      			header('location: login.php');
                      		}else{
                      			$query = "INSERT INTO users (username, email, user_type, password)
                      					  VALUES('$username', '$email', 'user', '$password')";
                      			mysqli_query($db, $query);

                      			// get id of the created user
                      			$logged_in_user_id = mysqli_insert_id($db);

                      			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
                      			$_SESSION['success']  = "You are now logged in";
                      			header('location: index.php');
                      		}
                      	}
                      }



  //return user array from their ID
  function getUserById($id){
                  	global $con;
                  	$query = "SELECT * FROM users WHERE id=" . $id;
                  	$result = mysqli_query($con, $query);

                  	$user = mysqli_fetch_assoc($result);
                  	return $user;
                            }

// escape string
function e($val){
	global $con;
	return mysqli_real_escape_string($con, trim($val));
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

function isLoggedIn(){
  if(isset($_SESSION['user'])){
    return true;
  }else{
    return false;
  }
}

//To log out a user if the button is clicked
if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['user']);
  header('location: login.php');
}

//To call the login() function if the register_btn is clicked
if(isset($_POST['login_btn'])){
  login();
}

//To login User
function login(){
        global $con, $username, $errors;

        //to get form VALUES
        $username = e($_POST['username']);
        $password = e($_POST['password']);

        //To make sure form is filled properly
        if(empty($username)){
          array_push($errors, "Username is required");
        }

        if(empty($password)){
          array_push($errors, "Password is required");
        }

          //This will attempt the login if there are no errors
          if(count($errors) == 0){
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
            $results = mysqli_query($con, $query);

            if(mysqli_num_rows($results) == 1){//user found
              //check the user role
                $logged_in_user = mysqli_fetch_assoc($results);
                if($logged_in_user['user_type'] == 'admin'){
                  $_SESSION['user'] = $logged_in_user;
                  $_SESSION['success'] = "You are now logged in";
                  header('location: index.php');
                }
                elseif ($logged_in_user['user_type'] == 'student') {
                  $_SESSION['user'] = $logged_in_user;
                  $_SESSION['success'] = "You are now logged in";
                  header('location:index.php?page=adds');
                }
                elseif ($logged_in_user['user_type'] == 'accountant') {
                  $_SESSION['user'] = $logged_in_user;
                  $_SESSION['success'] = "You are now logged in";
                  header('location:index.php?page=add');
                }
                elseif ($logged_in_user['user_type'] == 'staff') {
                  $_SESSION['user'] = $logged_in_user;
                  $_SESSION['success'] = "You are now logged in";
                  header('location:index.php?page=add');
                }
                else{
                  array_push($errors, "Wrong Username and Password Combination");
                  // <?php echo "You don't have any priveleges";
                }
            }
}
}
?>
