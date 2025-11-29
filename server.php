<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();


$timeout = 600; // time in seconds (10 min example)

if (isset($_SESSION['last_activity']) && time() - $_SESSION['last_activity'] > $timeout) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}

$_SESSION['last_activity'] = time();

$username ="";
$email = "";
$errors = array();


$db = mysqli_connect("sql311.infinityfree.com","if0_40511546","agile4fragile","if0_40511546_testdb");

if(!$db){
    die("Database connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//registration
if(isset($_POST["reg_user"])){
    if(isset($_POST["reg_user"])){
    $username = mysqli_real_escape_string($db, $_POST["username"]);
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $grade = mysqli_real_escape_string($db, $_POST["grade"]); // <-- ADD
    $password_1 = mysqli_real_escape_string($db, $_POST["password_1"]);
    $password_2 = mysqli_real_escape_string($db, $_POST["password_2"]);
}



//Form Validtion
//Add (array_push) errors into $errors array
if(empty($username)) {array_push($errors, "Username is Required");}
if(empty($email)) {array_push($errors, "Email is Required");}
if(empty($password_1)) {array_push($errors, "Password is Required");}
if($password_1 != $password_2) {array_push($errors, "The two passwords do not match");
}

//First check the database that a username and email does not exist already
$user_check_query = "SELECT * FROM Account WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);


if ($user) { //If user exists (Fixed)
if($user['username'] === $username) {
    array_push($errors, "Username already exists");
    }

if($user['email'] === $email) {
    array_push($errors, "Email aleady exists");
    }
}


//Now register the user if no errors in the form
if(count($errors) == 0) {
    $password = md5($password_1); //Encrypts the password before inserting into database

    $query = "INSERT INTO Account(username, email, grade, password) VALUES('$username', '$email', '$grade', '$password')";

if(!mysqli_query($db, $query)){
    die("Insert Error: " . mysqli_error($db)); // shows the exact issue
}

    $_SESSION['username']=$username;
    $_SESSION['success']="You are now logged in";
    header('location: index.php');
}
} // added
//log in

//Login User
if(isset($_POST['login_user'])) {
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $password=mysqli_real_escape_string($db, $_POST['password']);

    if(empty($username)) {
        array_push($errors, "Username is Required");
    }
    if(empty($password)) {
        array_push($errors, "Password is Required");
    }

    if(count($errors) == 0) {
        $password=md5($password);
        $query="SELECT * FROM Account WHERE username='$username' AND password='$password'";
        $results=mysqli_query($db, $query);
        if(mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }else {
            array_push($errors, "Wrong Username/Password Combination");
        }
    }
}
?>