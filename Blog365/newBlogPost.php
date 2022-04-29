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
    <link rel="icon" href="images/coffee.jpg">

    <div id="leftside">
        <ul>
            <a href="index.html">
                <li class="button">Home</li>
            </a>
            <a href="blog.php">
                <li class="button">Blog</li>
            </a>
            <a href="aboutus.html">
                <li class="button">About</li>
            </a>
            <a href="login.php">
                <li class="button">Log In</li>
            </a>
            <a href="registration.html">
                <li class="button">Register</li>
            </a>
            <a href="newBlogPost.php">
                <li class="button">New Post</li>
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