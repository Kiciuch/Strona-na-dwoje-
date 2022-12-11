
<?php
session_start();

// zmienna
$username = "";
$email    = "";
$errors = array(); 



// rejestracja
if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Nazwa jest wymagana"); }
  if (empty($email)) { array_push($errors, "Email jest wymagany"); }
  if (empty($password_1)) { array_push($errors, "Haslo jest wymagane"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Te hasla nie sa takie same");
  }

  $user_check_query = "SELECT * FROM register WHERE Name='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['Name'] === $username) {
      array_push($errors, "Ta nazwa jest juz zajeta");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email jest juz zajety");
    }
  }

 
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO register (Name, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['Name'] = $username;
  	$_SESSION['success'] = "Jestes zalogowany";
  	header('location: index.php');
  }
}
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Email jest wymagany");
  }
  if (empty($password)) {
  	array_push($errors, "Haslo jest wymagane");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM register WHERE email='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $username;
  	  $_SESSION['success'] = "Jestes zalogowany";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Nieprawidlowa nazwa lub haslo");
  	}
  }
}

?>