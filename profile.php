<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: Login.php');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'HaystackOverflow';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <div id="leftside">
        <ul>
            <a href="index.html">
                <li>Home</li>
            </a>
            <a href="blog.php">
                <li>Blog</li>
            </a>
            <a href="aboutus.html">
                <li>About</li>
            </a>
            <a href="login.php">
                <li>Log In</li>
            </a>
            <a href="registration.html">
                <li>Register</li>
            </a>
            <a href="newBlogPost.php">
                <li>New Post</li>
            </a>
        </ul>
    </div>
	</head>
	<body class="loggedin">
		
		<div id="profile-body">
	<h2>Username: <?=$_SESSION['name']?></h2>
	<h2>Email: <?=$email?> 
	<a href="logout.php"></br></br><i class="fas fa-sign-out-alt"></i>Logout</a>
</div>
	</body>
</html>