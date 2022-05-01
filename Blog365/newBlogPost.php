<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: Login.php');
        exit;
    }
    if($_SESSION['level']<1){
        echo "Your access level is too low.";
    }
    else{
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
            <a href="logout.php">
                <li class="button">Logout</li>
            </a>
        </ul>
    </div>
</head>

<body>
    <div id="mainbody">
    <h1 id="postheader">Blog post</h1>

    <form action="newBlogPostHandler.php" method="post" id="blogcreation">
        <textarea id="title" name="title" rows="1" cols="80" placeholder="Title..."></textarea><br/><br/>
        <textarea id="body" name="body" rows="10" cols="80" placeholder="Body..."></textarea><br/><br/>
        
        <input id="blogsubmit" type="submit" value=" Post ">
        </form>
</div>
</body>
<?php }?>