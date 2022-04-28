<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: Login.html');
        exit;
    }
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>

    <link rel="stylesheet" href="style.css" type="text/css">
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

<body>
    <h1>Post thread</h1>

    <form action="newBlogPostHandler.php" method="post" id="blogcreation">
        <textarea id="title" name="title" rows="1" cols="80" placeholder="Title..."></textarea>
        <textarea id="body" name="body" rows="10" cols="80" placeholder="Body..."></textarea>
        
        <input id="blogsubmit" type="submit" value=" Post ">
        </form>
</body>